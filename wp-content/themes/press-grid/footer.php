		
		<footer id="footer">
			<div class="icontainer">
				<div class="row-flex">
					<div class="col-flex-start">
						<div class="footer-copyright">
							<?php printf('%s', Press_Grid_Std::get_mod('copyright_content')); ?>
						</div>
					</div>
					<div class="col-flex-center">
						<?php
		                wp_nav_menu( array(
		                    'menu_class'        => 'footer-menu',
		                    'theme_location'    => 'footer_menu',
		                    'container'         => '',
		                    'depth'             => 1,
		                    'fallback_cb'       => 'press_grid_footer_menu_callback'
		                ));
		                ?>
					</div>
					<div class="col-flex-end">
						<div class="footer-social">
							<?php Press_Grid_Tpl::get_social_links(); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>        

	</div>
	<!--// .wrapper -->
	<?php get_template_part('template-parts/reactions'); ?>

	<?php wp_footer(); ?>

</body>
</html>