<?php
// [share]
function ws_share($atts, $content = null) {
	global $post;
	if(!$post) return false;

	$post_id   = $post->ID;
	$permalink = get_permalink( $post_id );
	ob_start();
	?>

	<div class="list-share-social">	
		<a href="//www.facebook.com/sharer.php?u=<?php echo $permalink; ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="social-icon facebook" title="<?php _e('Share on Facebook', Theme_Name); ?>">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="//twitter.com/share?url=<?php echo $permalink; ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="social-icon twitter" title="<?php _e('Share on Twitter', Theme_Name); ?>">
			<i class="fa fa-twitter"></i>
		</a>
		<a href="//pinterest.com/pin/create/button/?url=<?php echo $permalink; ?>&amp;media=<?php echo $share_img; ?>&amp;description=<?php echo $post_title; ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="social-icon pinterest" title="<?php _e('Pin on Pinterest','flatsome'); ?>">
			<i class="fa fa-pinterest"></i>
		</a>
		<a href="//www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $post_title; ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="social-icon linkedin" title="<?php _e('Share on LinkedIn','flatsome'); ?>">
			<i class="fa fa-linkedin"></i>
		</a>
    </div>

    <?php
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode('share','ws_share');