<!-- Topbar -->
<div class="topbar">
	<div class="icontainer">
		<div class="row-flex">
			<div class="col-flex-start hidden-xs-down">
				<div class="topbar-item">
                    <div class="entry-wrap">
                        <i class="fa fa-calendar"></i> <?php Press_Grid_Tpl::the_date_info(); ?>
                    </div>
                </div>
                <div class="topbar-item hidden-sm-down">
                    <div class="entry-wrap">
                        <?php
                        wp_nav_menu( array(
                            'menu_class'        => 'topbar-menu',
                            'theme_location'    => 'topbar_menu',
                            'container'         => '',
                            'depth'             => 1,
                            'fallback_cb'       => 'press_grid_footer_menu_callback'
                        ));
                        ?>
                    </div>
                </div>
			</div>
            <div class="col-flex-center hidden-md-down">
                <div class="topbar-item">
                    <div class="entry-wrap"><?php printf('%s', get_bloginfo('description', 'display')); ?></div>
                </div>
            </div>
            <div class="col-flex-end">

                <?php if( class_exists('Themeton_Reaction') ): ?>
                <div class="topbar-item">
                    <div class="entry-wrap">
                        <div class="emotions-bar">
                            <?php
                            $emotions = Press_Grid_Tpl::get_emotions();
                            foreach ($emotions as $key => $value) {
                                printf('<a href="%3$s" class="emotion-item">
                                            <svg class="emotion-icon emoji-icon-%1$s" aria-hidden="true">
                                                <use xlink:href="#emoji-icon-%1$s"></use>
                                            </svg>
                                            <span>%2$s</span>
                                        </a>', $key, $value, esc_url(Press_Grid_Static::get_url_reaction($key)) );
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="topbar-item">
                    <div class="entry-wrap">
                        <div class="search-item">
                            <a href="javascript:;" class="search-handler"><i class="icon-magnifier"></i></a>
                            <a href="javascript:;" class="burger-handler"><span></span></a>
                            <div class="search-form-container">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
		</div>
	</div>
</div><!-- Topbar -->