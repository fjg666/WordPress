<!-- Sidebar
================================================== -->
<?php 
global $pressgrid_sidebar;
$sidebar_id = 'sidebar';
if( isset($pressgrid_sidebar) && !empty($pressgrid_sidebar) ){
    $sidebar_id = $sidebar_id ."-". $pressgrid_sidebar;
}

$sidebar_class = array('col-md-4 col-lg-4 col-xl-3', 'sidebar');
$sidebar_class[] = "area-" . $sidebar_id;

$sidebar_class = implode(' ', $sidebar_class);
?>
<div class="<?php echo esc_attr($sidebar_class); ?>">
	<div class="entry-sidebar theiaStickySidebar">
		<?php
	    if ( is_active_sidebar( $sidebar_id ) ) :
	        dynamic_sidebar($sidebar_id);
	    endif;
	    ?>
	</div>
</div>