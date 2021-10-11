<?php
    /**
 * Display navigation to next/previous pages when applicable
 */
if ( ! function_exists( 'ws_content_nav' ) ) :

function ws_content_nav( $nav_id ) {
    global $wp_query, $post;

    // Don't print empty markup on single pages if there's nowhere to navigate.
    if ( is_single() ) {
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous )
            return;
    }

    // Don't print empty markup in archives if there's only one page.
    if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
        return;

        $nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';

        ?>
        <?php if ( is_single() ) : // navigation links for single posts ?>
        <nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?> d-xl-flex justify-content-between">
            <?php previous_post_link( '<div class="navz-item nav-previous">%link</div>','<span class="hide-for-small"><img src="'.Theme_URL.'/assets/images/icon/ic-prev-post.svg"></span> %title' ); ?>
            <?php next_post_link( '<div class="navz-item nav-next">%link</div>', '%title <span class="hide-for-small"><img src="'.Theme_URL.'/assets/images/icon/ic-next-post.svg"></span>' ); ?>    
        </nav>
        <?php endif; ?>
        <?php
    }
    endif; // ws_content_nav
?>