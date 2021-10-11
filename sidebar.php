<div class="widget-popular">
	<div class="item-popular">
		<p class="wid-title">Most popular</p>
		<ul class="list-unstyled">
			<?php
                $args = array( 
                    'posts_per_page' => 5, 
                    'offset'=> 0, 
                    'category' => 1 
                );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); 
            ?>
			<li>
				<a class="popular d-flex" href="<?php the_permalink(); ?>">
					<div class="popular__img">
						<img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
					</div>
					<p class="popular__title">
						<?php the_title(); ?>
					</p>
				</a>
			</li>		
			<?php endforeach; wp_reset_query(); ?>
		</ul>
	</div>
</div>