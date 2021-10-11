	<footer id="footer" class="w-100 float-left">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-5 order-2">
					<img src="<?php echo get_theme_mod('html_footer_header'); ?>" class="ft-logo">

					<h4>ENZU BERLIN</h4>
					<p>
						Địa chỉ: <?php echo get_theme_mod('html_address'); ?><br>
					    Liên hệ: <?php echo get_theme_mod('html_phone'); ?><br>
					    Email: <?php echo get_theme_mod('html_email'); ?>
					</p>
				</div>
				<div class="col-12 col-lg-3 mt-3 order-1">
					<h5>Liên Kết</h5>
					<?php
                        $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'primary-menu',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'walker'          => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                            'depth'           => 0,
                        );
                    if ( has_nav_menu( 'primary' ) ) {
                      wp_nav_menu( $primarymenu );
                    }
                    ?>
				</div>
				<div class="col-12 col-lg-4 mt-3 order-3">
					<h5>Đăng Ký Nhận Thông Tin</h5>
					<div class="form-subcribe">
						<input type="text" placeholder="Nhập email tại đây">
						<button type="submit">Gửi</button>
					</div>					
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</div>
<a href="javascript:;" id="goTop" class="bd-circle t-center"></a>
</body>
</html>