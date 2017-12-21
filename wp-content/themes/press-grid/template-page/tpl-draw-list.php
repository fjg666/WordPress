 <?php
/*
Template Name: Video-list Page
*/

// pagination
get_template_part('template-parts/paged');

get_header();

$_get_post = get_query_var('post');
print_r($_get_post);
$post_id = !empty($_get_post) && abs($_get_post)>0 ? abs($_get_post) : 0;
$post_title = '';
$post_excerpt = '';
$post_content = '';
$post_image = '';
$post_image_src = '';
$post_cats = array();

if( $post_id>0 ){
    $the_post = get_post($post_id);

    if( !empty($the_post) && isset($the_post->post_content) ){
        $post_title = $the_post->post_title;
        $post_excerpt = $the_post->post_excerpt;
        $post_content = $the_post->post_content;

        if( has_post_thumbnail($post_id) ){
            $post_image = get_post_thumbnail_id($post_id);
            $post_image_src = sprintf( '<img src="%s">', esc_attr(wp_get_attachment_image_url($post_image, 'full')) );
        }

        $categories = wp_get_post_terms($post_id, 'category');
        if( !empty($categories) ){
            foreach( $categories as $category ){
                $post_cats[] = $category->term_id;
            }
        }
    }
}

global $current_user;
$user_id = $current_user->ID;
if(empty($_GET['t'])){
  $start=0;
}else{
  $start= (int)$_GET['t'];
}

$res = get_booklist($user_id, $start*5);
//$playlistcount = count(get_book_count($user_id));;

$sum = count( get_all_book_count($user_id) );
$sub = 10;
?>

<!-- <link rel="stylesheet" href="wp-content/themes/press-grid/css/jquery.fileupload.css"> -->

<section class="content-area">


  <form method="post" id="frontend_editor">
      <div class="icontainer">
          <div class="row sticky-content-sidebar">

            <!-- Sidebar
            ==================================================
            -->
            <div class="col-md-3 sidebar video">
                <div class="entry-sidebar">
                    <div class="theiaStickySidebar_video">

                        <div class="alert alert-success" role="alert"
                            style="display:none;">
                            <strong><?php esc_html_e('视频已上传', 'press-grid'); ?></strong> <span data-text="<?php esc_attr_e('显示上传内容', 'press-grid'); ?>"></span>
                        </div>

                        <div class="alert alert-danger" role="alert" style="display:none;">
                            <strong><?php esc_html_e('警告!', 'press-grid'); ?></strong> <?php esc_html_e('请再次尝试!', 'press-grid'); ?>
                        </div>

                        <?php get_template_part('template-page/tpl-draw-nav'); ?>

                    </div> <!-- end .theiaStickySidebar_video-->
                </div><!--End .entry-sidebar-->
            </div><!--End .sidebar .video .col-md-3 -->

            <div class="col-md-9">
              <div class="post-entry-content post-entry-content-video">
                <div class="theiaStickySidebar_video">

                  <div class="page-content">
                      <div class="entry-content">
                        
                        <!-- End . -->
                        <div class="wrapper_video">
                          <div class="video_content" id="video_view">

                            <div class="mod_nav_related">
                              <ul class="related_list cf">
                                
                                <li class="item current">
                                  <a href="<?php echo esc_url(Press_Grid_Static::get_url_draw_list() ); ?>" class="link">绘本
                                    <i class="nums"><?php echo $sum;?></i>
                                  </a>
                                </li>
                              </ul>
                            </div><!-- End .mod_nav_related -->

                            <div class="filter_bar btn-group-xs">
                              <!-- <button class="btn btn-secondary">全选</button> -->
                              <button class="btn btn-danger" id="del_draw_all">删除</button>
                            </div><!-- End .filter_bar btn-group-xs -->

                            <ul class="draw_list" id="draw_list">
                              <li class="item_title">
                                <div class="item_a"><input type="checkbox" class="_check_all" id="check_all"></div>
                                <div class="item_b"><span class="text">全选</span></div>
                                <div class="item_c">浏览</div>
                                <div class="item_d">操作</div>
                              </li>

<?php
foreach ($res as $item):
// print_r($item)
?>
                              <li class="item_list">
                                <div class="item_a">
                                  <input type="checkbox" name="selectFlag" value="<?php echo $item->ID; ?>">
                                </div>
                                <div class="item_b">

<!-- <a href="./?pagename=video-edit&amp;post=<?php //echo $item->ID?>" target="_blank" class="img" > -->
<a href="<?php echo esc_url(Press_Grid_Static::get_url_draw_edit($item->ID) ); ?>" target="_blank" class="img" >

<!-- <img onerror="picerr(this)" src=" echo WP_CONTENT_URL."/uploads/".$item->backgroundurl" alt="9月19日电视节目" width="175px" height="100px"> -->

  <?php 
    $post_image = get_post_thumbnail_id($item->ID);
    $image_url = wp_get_attachment_image_url($post_image, 'full');
  ?>
  <img src="<?php echo $image_url; ?>" alt="">
</a>

<div class="video_detail">
  <h3 class="title">
    <a hot="uc.manage.li.title" href="./?p=<?php echo $item->ID?>" target="_blank" >
      <?php echo $item->post_title;?>
    </a>
  </h3>
  <h6 class="desc">
    创建于：<?php echo $item->post_date;?>
    <span class="album_info _covers" title=""></span>
  </h6>
</div>
                                </div>
                                <div class="item_c">
<ol class="trend_list">
  <li class="item">
    <i class="icon-eye"></i>
    <span class="nums"><?php echo $item->post_read; ?></span>
  </li>

  <!-- <li class="item">
    <i class="icon-bubbles"></i>
    <span class="nums _comment_num"><?php //echo $item->comment_count;?></span>
  </li> -->
</ol>

                                </div>
                                <div class="item_d">

<ol class="option_list" style="width: 115px;">
    <li class="item">
      <a href="<?php echo esc_url(Press_Grid_Static::get_url_draw_edit($item->ID) ); ?>" 
        class="btn_normal _edit_video"
        data-vid="<?php echo $item->ID; ?>" 
        >
        <i class="icon_edited"></i>
        <span class="inner">编辑</span>
      </a>

      <a href="javascript:" class="btn_normal del_video" 
        data-vid="<?php echo $item->ID; ?>"
        >
        <i class="icon_delete"></i>
        <span class="inner">删除</span>
      </a>
    </li>
</ol>

                                </div><!-- end .item_d -->
                              </li><!-- end .item_list -->
<?php endforeach; ?>
                            </ul>

                            <div class="mo_pages">
                          <ul class="pagination">
                            
<?php 
  $s = round( $sum/5 );
  for($i = 1; $i<=$s; $i++){

    if($i-1 == $start){
      $active = ' active';
    }
    else{
      $active = ' ';
    }
?>

                            <li class="page-item <?php echo $active;?>"> 
                              <a href="?pagename=draw-list&t=<?php echo $i-1;?>" 
                                class="page-link"><?php echo $i;?>
                              </a>
                            </li>
<?php
  }
?>
                            <li class="page-item"> 
<?php

// next page or previous page
$page_next_str = '<a class="page-link" href="?pagename=draw-list&t=';

if($s==$start+1){
  $page_next_str = $page_next_str.($start-1).'">上一页</a>';
}
else{
  $page_next_str = $page_next_str.($start+1).'">下一页</a>';
}
echo $page_next_str;
?>

                            </li>
                          </ul>
                            </div>

                          </div><!-- End .video_content -->


                        </div>
                      </div><!--End .entry-content -->
                  </div><!--End .page-content -->
                  <!--End . -->

                </div>
              </div>
            </div><!--End 9.col-md-9 -->
          </div><!-- .End .row sticky-content-sidebar -->
      </div><!-- End .icontainer -->
  </form><!-- End #frontend_editor -->
</section><!-- End .content-area -->

<!--
============================================================
删除提示
-->
<div class="m-modal " id="modal-video-del" >
  <div class="m-modal-dialog" >

    <div class="m-top">
      <h4 class="m-modal-title">提示信息</h4>
      <span class="m-modal-close m-modal-close-video-del">&times;</span>
    </div>

    <div class="m-middle">
      <div class="m-middle-figures">
        <h3>是否确定删除</h3>
      </div><!-- end .m-middle-figures-->
    </div><!-- end .m-middle-figures-->

    <div class="m-bottom btn-group-xs">

    <!-- <button class="send " >&#10004;</button> -->

      <button class="m-btn-sure-video-del-single btn btn-primary" >
         &#10004; 确 定 </button>
      <button class="m-btn-cancel-video-del btn btn-cancel">
          取 消</button>
    </div>

  </div>
  <!--End .m-modal-dialog -->
</div>
<!--End .m-modal -->


<!--
============================================================
添加到播单弹窗
-->

<style>
#modal-video-add-item .m-middle h5 {
  padding: 10px;
}

#m-middle-figure-ul-video-add-item {
    list-style: none;
    margin:0;
    padding:0 10px 20px 10px;
}
#m-middle-figure-ul-video-add-item li {
  font-size: 14px;
  border-bottom: 1px solid #e6e6e6;
  cursor: pointer;
  overflow: hidden;
}
#m-middle-figure-ul-video-add-item li label{
  display: block;
  height: 35px;
  line-height: 35px;
  margin:0;
  padding: 0 0 0 5px; 
}

#m-middle-figure-ul-video-add-item li:hover {
  background-color: #f3bfc8;
}

</style>


<!--
style="display: block"
style="margin-top: 40px; width: 600px;"
-->
<div class="m-modal " id="modal-video-add-item">
  <div class="m-modal-dialog">
    <div class="m-top">
      <h4 class="m-modal-title">添加到播单</h4>
      <span class="m-modal-close m-modal-close-video-add-item">&times;</span>
    </div>

    <div class="m-middle">
      <div class="m-middle-figures">

        <h5>将视频移到以下专辑</h5>

        <div class="m-middle-loading">
          <p> 
          <img src="wp-content/themes/press-grid/img/loading01.gif" alt="">
            数据加载中，请等待...
          </p>
        </div>
        
        <!-- <h3>将视频移到以下专辑</h3> -->
        <ul class="mod_figure _vlist" id="m-middle-figure-ul-video-add-item">

          <!--  <li>
            <label class="video_add_item_cbx">
              <input type="checkbox" name="video_add_item_cbx" value="2" class="form_cbx">
              播单01
            </label>
          </li> -->
          
        </ul><!-- end .mod_figure -->

      </div><!-- end .m-middle-figures-->
    </div><!-- end .m-middle-figures-->
    
    <div class="m-bottom btn-group-xs">

      <button class="m-btn-sure-video-add-item btn btn-primary" 
        data-counter="0"  >
         &#10004; 添 加 </button>

      <button class="m-btn-cancel-video-add-item btn btn-cancel">
          取 消</button>
    </div>

  </div>
  <!--End .m-modal-dialog -->
</div>
<!--End .m-modal -->


<?php get_footer(); ?>
