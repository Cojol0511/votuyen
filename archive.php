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
	            	<?php while (have_posts()) : the_post(); ?>
	                	<?php get_template_part('template-parts/posts/content', 'default' ); ?>
		            <?php endwhile; ?>
	            </div>		

	            <div class="col-12 col-xl-3">
	            	<?php get_sidebar(); ?>
	            </div>	            
	        </div>

	    </div>
	</section>
</div><!--main-content-->
<?php get_footer(); ?>