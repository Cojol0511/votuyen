<?php get_header(); ?>

<div class="normal-articles w-100 float-left">
	<div class="container">
		<div class="col-left">
			<div class="ht-left">
				<ul>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<li class="d-flex">
						<a href="<?php the_permalink(); ?>" class="thumb-ht">
							<img src="<?php the_post_thumbnail_url('img250_166'); ?>" alt="<?php the_title(); ?>">
						</a>
                        <div class="ht-news-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span class="meta-date"><?php echo get_the_date('d/m/Y'); ?></span>
                            <p><?php echo wp_trim_words(get_the_content(), $num_words = 35, $more = null); ?></p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php else : echo '<h2 class="search">Không có kết quả tìm kiếm phù hợp </h2>'; endif; ?>
                </ul>                
            </div>
        </div>
        <div class="col-right">
            <div class="widget-box widget-most-view">
                <h4 class="ht-sub-title">Tin xem nhiều</h4>
                <ul>
                    <?php
                        $args = array( 
                            'posts_per_page' => 5, 
                            'offset'=> 0,  
                        );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); 
                    ?>
                    <li class="d-flex">
                        <a href="<?php the_permalink(); ?>" class="thumb-ht">
                            <img src="<?php the_post_thumbnail_url('img80_54'); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="ht-widget-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                
                        </div>
                    </li>
                    <?php endforeach; wp_reset_postdata();?>
                </ul>
            </div>
            <div class="widget-box widget-most-product">
                <h4 class="ht-sub-title">Sản phẩm vừa xem</h4>
                <ul>
                	<?php if(isset($_SESSION["viewed"]) && $_SESSION["viewed"]){
                		$data = $_SESSION["viewed"];
						$args = array(
							'post_type' => 'san-pham',
							'post_status' => 'publish',
							'posts_per_page' => 5,
							'post__in'	=> $data
						);
					?>
					<?php $getposts = new WP_query( $args);?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>							
					<li class="d-flex">
                        <a href="<?php the_permalink(); ?>" class="thumb-ht">
                            <img src="<?php the_post_thumbnail_url('full'); ?>">
                        </a>
                        <div class="ht-widget-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p>12,290,000 ₫</p>
                        </div>
                    </li>
                    <?php endwhile; wp_reset_postdata(); } else { ?>
                    	<p>Không có sản phẩm nào đã xem!</p>
                    <?php } ?>                        
                </ul>
            </div>
        </div>
    </div>				
</div>
<div class="clear"></div>
<?php get_footer(); ?>