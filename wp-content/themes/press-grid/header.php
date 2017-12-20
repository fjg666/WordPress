<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="the_loader">
        <svg class="svg-loader" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-loader"></use>
        </svg>
    </div>
    <!-- Wrapper -->
    <div class="wrapper">

    	<header id="header">

            <?php get_template_part('template-parts/topbar'); ?>

            <?php //get_template_part('template-parts/banner-header');?>

            <!-- Header Wrapper -->
    		<div class="header-wrap">
    			<div class="icontainer">
    				<div class="row-flex">
                        <div class="col-flex-start">
                            <div class="logo">
                                <?php Press_Grid_Tpl::get_logo(); ?>
                            </div>
                        </div>
                        <div class="col-flex-center">
                            <nav class="main-nav hidden-sm-down">
                                <?php
                                wp_nav_menu(array(
                                    'menu_id'           => 'primary-nav',
                                    'theme_location'    => 'primary',
                                    'container'         => '',
                                    'fallback_cb'       => 'press_grid_primary_callback'
                                ));
                                ?>
                            </nav>
                        </div>
                        <div class="col-flex-end">
                            <div class="right-content">
                                <a href="javascript:;" id="menu-handler" class="burger-menu hidden-md-up"><i class="fa fa-bars"></i></a>
                                <?php get_template_part('template-parts/user-login'); ?>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div><!-- Header Wrapper -->

            <div class="grid-menu-container">
                <div class="grid-menu" data-grid="1"></div>
            </div>

    	</header>
