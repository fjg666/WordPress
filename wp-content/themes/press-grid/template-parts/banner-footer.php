<?php
$banner_footer = sprintf('%s', Press_Grid_Std::get_mod('banner_footer'));
$banner_footer = trim($banner_footer);
if( !empty($banner_footer) ):
?>
<div class="pressgrid-banner-footer">
	<?php printf('%s', $banner_footer); ?>
</div>
<?php
endif;
?>