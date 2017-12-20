<?php
// pagination
get_template_part('template-parts/paged');

get_header();
?>

<section class="content-area">

    <div class="icontainer">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-content">
                    <?php get_template_part('template-parts/home-slider'); ?>
                    <?php get_template_part('content'); ?>
            </div>
        </div>
    </div>

    <div id="pressgrid_pagination"></div>

</section>



<?php get_footer(); ?>