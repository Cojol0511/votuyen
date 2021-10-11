<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="slider-main w-100 float-left">
	<div class="owl-carousel owl-theme" data-autoheight="false" data-items="1" data-desktop="1" data-desktop-small="1" data-tablet="1" data-mobile="1" data-nav="false" data-dots="true" data-loop="true" data-autoplay="true" data-speed="500" data-autotime="3000">
		<div class="item">
			<img src="<?php bloginfo('template_url')?>/assets/images/slider-1.png" alt="">
		</div>
		<div class="item">
			<img src="<?php bloginfo('template_url')?>/assets/images/slider-1.png" alt="">
		</div>
		<div class="item">
			<img src="<?php bloginfo('template_url')?>/assets/images/slider-1.png" alt="">
		</div>
	</div>
</div>


<div class="main-content w-100 float-left">
	<div class="feature-product">
		<div class="container">
			<h3 class="title-h">CÁC SẢN PHẨM CỦA CHÚNG</h3>
			<div class="row mt-3 mt-xl-0">
				<?php
                    $taxonomies = array('product_cat');
                    $args = array(
                        'orderby'           => 'name', 
                        'order'             => 'ASC',
                        'hide_empty'        => false, 
                        'hierarchical'      => true, 
                    ); 
                    $terms = get_terms($taxonomies, $args);
                ?>
                <?php foreach ($terms as $term) { ?>
                <?php 
                	$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                	$image = wp_get_attachment_url( $thumbnail_id );
            	?>
				<div class="col-6 col-md-6">
					<div class="item-product">
						<a href="<?php echo get_term_link($term); ?>"><img src="<?php echo $image; ?>" class="bz-thumb"></a>
						<h3><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></h3>
						
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div><!--feature-product-->
	<div class="berlin-partner">
		<div class="container">
			<h3 class="title-h">KHÁCH HÀNG CỦA CHÚNG TÔI</h3>
			<div class="owl-carousel owl-theme" data-items="4" data-desktop="4" data-desktop-small="4" data-tablet="2" data-mobile="1" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true" data-speed="500" data-autotime="3000">
				<div class="item">
					<img src="<?php bloginfo('template_url')?>/assets/images/partner-1.png">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url')?>/assets/images/partner-2.png">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url')?>/assets/images/partner-3.png">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url')?>/assets/images/partner-4.png">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url')?>/assets/images/partner-1.png">
				</div>
			</div>
		</div>
	</div>
	<div class="video-introduce">
		<h3 class="title-h">GIỚI THIỆU SẢN PHẨM</h3>
		<div class="container">
			<iframe width="100%" height="855" src="https://www.youtube.com/embed/Ybk-FLqILYs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div><!--video-introduce-->
	
</div><!--main-content-->
<?php get_footer(); ?>