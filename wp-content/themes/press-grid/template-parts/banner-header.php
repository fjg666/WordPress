<?php
$banner_header = sprintf('%s', Press_Grid_Std::get_mod('banner_header'));
$banner_header = trim($banner_header);
if( !empty($banner_header) ):
?>
<div class="pressgrid-banner-header">
	<div class="icontainer">
		<div class="row">
			<div class="col-sm-12"><?php printf('%s', $banner_header); ?></div>
		</div>
	</div>
</div>
<?php
endif;
?>