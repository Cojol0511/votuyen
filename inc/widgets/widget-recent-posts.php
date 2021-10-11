<?php

add_action( 'widgets_init', 'recent_posts_widget' );

function recent_posts_widget() {

	register_widget( 'Ws_Recent_Post_Widget' );
}

/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Ws_Recent_Post_Widget extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'classname' => 'ws_recent_posts', 'description' => __('A widget that displays recent posts ', Theme_Name), 'customize_selective_refresh' => true);

		$control_ops = array( 'id_base' => 'ws_recent_posts' );

		parent::__construct( 'ws_recent_posts', __('WS Recent Posts', Theme_Name), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {

		$cache = wp_cache_get('widget_recent_posts', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( !isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		if ( empty( $instance['image'] ) ) $instance['image'] = false;
		$is_image = $instance['image'] ? 'true' : 'false';
        

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts', Theme_Name) : $instance['title'], $instance, $this->id_base);
		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 			$number = 10;

		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<?php echo '<ul class="list-unstyled mb-0">'; ?>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>

		<li class="recent-blog-posts-li d-flex">			
			<div class="flex-col-thumb">
				<?php if($is_image != 'false') { ?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
					</a>								
				<?php } ?>						
			</div>
			<div class="flex-content">
				<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>">
					<?php if ( get_the_title() ) the_title(); else the_ID(); ?>							
				</a>
				<p class="mb-0 post-date mt-1"><?php echo get_the_time('d/m/Y', get_the_ID()); ?></p>
			</div>
		</li>
		<?php endwhile; ?>
		<?php echo '</ul>'; ?>
		<?php echo $after_widget; ?>
	<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_recent_posts', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
	    $instance['image'] = $new_instance['image'];        
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_entries']) )
			delete_option('widget_recent_entries');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_recent_posts', 'widget');
	}

	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$instance['image'] = isset( $instance['image'] ) ? $instance['image'] : false;        

?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', Theme_Name ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:', Theme_Name ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

 		<p><input class="checkbox" type="checkbox" <?php checked($instance['image'], 'on'); ?> id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" />
		<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Show thumbnail', Theme_Name ); ?></label></p>

<?php
	}
}

?>
