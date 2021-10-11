<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="page-content w-100 float-left">			
	<section class="section-blog mb-5">
	    <div class="container">
	    	<nav aria-label="breadcrumb">
	    		<ol class="breadcrumb">
	    			<li class="breadcrumb-item"><a href="#">Home</a></li>
	    			<li class="breadcrumb-item active" aria-current="page">Library</li>
	    		</ol>
	    	</nav>
	        <div class="row mt-5">
	            <div class="ar-left col-12 col-xl-9">
	            	<?php if ( have_posts() ) : ?>
	            	<?php while ( have_posts() ) : the_post(); ?>		            	
	           		<article id="post-<?php the_ID(); ?>" class="post__content">
	           			<?php 
	           				if ( is_single() ) {
	           					echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
	           				} else {
	           					echo '<h2 class="entry-title"><a href="' . get_the_permalink() . '" rel="bookmark" class="plain">' . get_the_title() . '</a></h2>';
	           				}
	           			?>
		            	<?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
		          	</article>
		          	<?php endwhile; ?>
		          	<?php else : ?>
					<?php get_template_part( 'no-results', 'index' ); ?>
					<?php endif; ?>
	            </div><!--ar-left-->
	            <div class="col-12 col-xl-3">
	            	<?php get_sidebar(); ?>
	            </div>	            
	        </div>

	    </div>
	</section>
</div><!--main-content-->

<?php get_footer(); ?>