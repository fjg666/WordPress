<?php
$loop_style = TT::get_mod('content_columns');

if( $loop_style=='one_column' ):
	get_template_part('content', 'standard');
else: ?>
	<div class="pressgrid-viewport">
	    <div id="pressgrid_content"></div>
	    <?php
	    $posts = Press_Grid_Post::get_posts();
	    printf('<script type="text/template" id="pressgrid_json">%s</script>', json_encode($posts));
	    ?>
	</div>
	<?php
	get_template_part('template-parts/banner-footer');
endif;
?>