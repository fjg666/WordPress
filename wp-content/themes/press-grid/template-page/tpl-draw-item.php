<?php
/*
Template Name: draw-list Page
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
$res = get_playlist($user_id,$start*5);
$playlistcount = count(get_playlist_count($user_id));
$ssum = count(get_all_videopost_count($user_id));
$sum = count(get_playlist_count($user_id));
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

                <div class="alert alert-success" role="alert" style="display:none;">
                  <strong><?php esc_html_e('视频已上传', 'press-grid'); ?></strong> <span data-text="<?php esc_attr_e('显示上传内容', 'press-grid'); ?>"></span>
                </div>

                <div class="alert alert-danger" role="alert" style="display:none;">
                  <strong><?php esc_html_e('警告!', 'press-grid'); ?></strong>
                  <?php esc_html_e('请再次尝试!', 'press-grid'); ?>
                </div>

                <?php get_template_part('template-page/tpl-draw-nav'); ?>

              </div>
              <!-- end .theiaStickySidebar_video-->
            </div>
            <!--End .entry-sidebar-->
          </div>
          <!--End .sidebar .video .col-md-3 -->

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
                            <li class="item">
                              <a href="?pagename=video-list" class="link">视频
                                <i class="nums"><?php echo $ssum;?></i>
                              </a>
                            </li>
                            <li class="item current">
                              <a href="?pagename=video-item" class="link">播单
                                <i class="nums"><?php echo $playlistcount;?></i>
                              </a>
                            </li>

                          </ul>

                        </div>
                        <!-- End .mod_nav_related -->

                        <div class="filter_bar btn-group-xs">
                          <button type="button" id="video-item-create" class="btn btn-info btn-sm">
                                新建播单
                          </button>
                          <button class="btn btn-danger" id="del_videos_list_btn">删除</button>
                          <input type="hidden" id="lxtype" value="video">

                          <div class="m-modal" id="modal-video-item-create">
                            <div class="m-modal-dialog">
                              <div class="m-top">
                                <h4 class="m-modal-title">编辑播单</h4>
                                <span class="m-modal-close">&times;</span>
                              </div>

                              <div class="m-middle">
                                <div class="form-group">
                                  <label>标题*</label>
                                  <input type="text" id="video_item_title" name="video_item_title"
                                  value="" placeholder="输入标题" class="form-control">
                                </div>

                                <div class="form-group">
                                  <label>简介*</label>
                                  <textarea type="text" id="video_item_excerpt" name="video_item_excerpt"
                                    placeholder="讲讲这个播单"
                                    class="form-control"><?php //printf('%s', $post_excerpt); ?></textarea>
                                </div>
                              </div>
                              <div class="m-bottom btn-group-xs">
                                <button class="m-btn-sure-item-add btn btn-primary" id="m-btn-sure">
                                    保 存</button>
                                <button class="m-btn-cancel btn btn-cancel" id="m-btn-cancel">
                                    取 消</button>
                              </div>
                            </div>
                            <!--End .m-modal-dialog -->
                          </div>
                          <!--End .m-modal -->

                          <!-- <button class="btn btn-secondary">全选</button> -->
                          <!-- <button class="btn btn-warning">添加到播单</button>
                          <button class="btn btn-danger">删除</button> -->
                        </div>
                        <!-- End .filter_bar btn-group-xs -->

                        <ul class="video_list" id="video_list">
                          <li class="item_title">
                            <div class="item_a">
                              <input type="checkbox" class="_check_all" id="check_all">
                            </div>
                            <div class="item_b"><span class="text">播单截图</span></div>
                            <div class="item_c">指数</div>
                            <div class="item_d">操作</div>
                          </li>

                          <?php
foreach ($res as $item):
?>
                            <li class="item_list">
                              <div class="item_a">
                                <input type="checkbox" name="selectFlag" class="_check_all" data-vid="" value="<?php echo $item->id; ?>">
                              </div>
                              <div class="item_b">
                                <a href="./?pagename=video-item-detail&c=<?php echo $item->id?>"
                                target="_blank" class="img">

<?php if( !isset($item->backgroundurl) ){ ?>
    <img  src="wp-content/uploads/video_img/no_photo.png" >
<?php }else{ ?>
    <img  src="<?php echo WP_CONTENT_URL."/uploads/".$item->backgroundurl?>" >
<?php } ?>
                                </a>



                                <div class="video_detail">
                                  <h3 class="title">
    <a hot="uc.manage.li.title" href="./?pagename=video-item-detail&c=<?php echo $item->id?>" >
      <?php echo $item->playlistname;?>
    </a>
  </h3>
                                  <h6 class="desc">
    创建于：<?php echo date("Y-m-d H:i:s",$item->addtime); ?>
    <span class="album_info _covers" title="">  </span>
  </h6>
                                </div>
                              </div>
                              <div class="item_c">
                                <ol class="trend_list">
                                  <li class="item">
                                    <i class="icon-eye"></i>
                                    <span class="nums"><?php echo $item->post_read;?></span>
                                  </li>

                                  <li class="item">
                                    <i class="icon-bubbles"></i>
                                    <span class="nums _comment_num">
                                    <?php echo $item->comment_count;?>
                                    </span>
                                  </li>
                                </ol>

                              </div>
                              <div class="item_d">

                                <ol class="option_list" style="width: 115px;">

                                  <li class="item">
                                    <a href="javascript:"
                                      class="btn_normal _edit_video_item"
                                      data-vid="<?php echo $item->id; ?>" >
                                      <i class="icon_edited"></i>
                                      <span class="inner">编辑</span>
                                    </a>

                                    <a href="javascript:"
                                    class="btn_normal _del_video_item"
                                    data-vid="<?php echo $item->id; ?>" >
                                      <i class="icon_delete"></i>
                                      <span class="inner">删除</span>
                                    </a>
                                  </li>

                                  <li class="item">
                                    <a href="javascript:" class="btn_normal _item_video_add"
                                      data-vid="<?php echo $item->id; ?>"
                                      _hot="uc.manage.li.cover">
                                      <i class="icon_add"></i>
                                      <span class="inner">添加视频</span>
                                    </a>
                                  </li>

                                </ol>
                              </div>
                              <!-- end .item_d -->
                            </li>
                            <!-- end .item_list -->
                            <?php endforeach; ?>
                            <!-- <div class="" id="video_list_view"></div> -->

                        </ul>

                        <div class="mo_pages ">
                          <ul class="pagination">

<?php
  $s = round($sum/5);
  for($i = 1; $i<=$s; $i++){

    if($i-1 == $start){
      $active = ' active';
    }
    else{
      $active = ' ';
    }
?>

                            <li class="page-item <?php echo $active;?>">
                              <a href="?pagename=video-item&t=<?php echo $i-1;?>"
                                class="page-link"><?php echo $i;?>
                              </a>
                            </li>
<?php
  }
?>

                            <li class="page-item">
<?php

// next page or previous page
$page_next_str = '<a class="page-link" href="?pagename=video-item&t=';

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

                      </div>
                      <!-- End .video_content -->

                    </div>
                  </div>
                  <!--End .entry-content -->
                </div>
                <!--End .page-content -->



            </div>
            <!--End . -->
          </div>
          <!--End . -->
        </div>
        <!--End 9.col-md-9 -->
      </div>
      <!-- .End .row sticky-content-sidebar -->
      </div>
      <!-- End .icontainer -->
    </form>
    <!-- End #frontend_editor -->
  </section>
  <!-- End .content-area -->





<!--
============================================
播单 => 添加视频
-->

<!--
style="display: block"
style="margin-top: 40px; width: 700px;"
-->

<div class="m-modal " id="modal-item-video-add" >
  <div class="m-modal-dialog" >
    <div class="m-top">
      <h4 class="m-modal-title">添加视频</h4>
      <span class="m-modal-close m-modal-close-item-add-video">&times;</span>
    </div>

    <div class="m-middle" style="padding-right:0; margin-right:0;">
      <div class="m-middle-figures">

        <div class="m-middle-loading">
          <p>
          <img src="wp-content/themes/press-grid/img/loading01.gif" alt="">
          数据加载中，请等待...
          </p>
        </div>

        <!-- <button class="send " data-counter="0">&#10004;</button> -->
        <ul class="mod_figure _vlist" id="m-middle-figure-ul">


          <!-- <li class="list_item" data-vid="1">
            <a class="figure">
              <img src="wp-content/uploads/2017/07/10-2.jpg" alt=""
              class="video_img">
              <span class="figure_mask"><em class="mask_txt">09:26</em></span>

              <span class="figure_status figure_add"><i class="ico_add_func"></i></span>
            </a>
            <strong class="figure_title"><a href="javascript:;">201707视频标题</a></strong>
            <div class="figure_vias">
              <span class="rein_play">
                <i class="icon-control-play"></i> <b class="num">90</b>
              </span>
              <span class="rein_via">
                <b class="num">2016-09-18</b>
              </span>
            </div>
          </li> -->
          <!-- end .list_item -->
        </ul>

      </div><!-- end .m-middle-figures-->
    </div><!-- end .m-middle-figures-->
    <div class="m-bottom btn-group-xs">

    <!-- <button class="send " >&#10004;</button> -->

      <button class="m-btn-sure-item-add-video btn btn-primary send"
      data-counter="0"  >
         &#10004; 添 加 </button>
      <button class="m-btn-cancel-item-add-video btn btn-cancel">
          取 消</button>
    </div>

  </div>
  <!--End .m-modal-dialog -->
</div>
<!--End .m-modal -->

<!--
============================================
-->







  <?php get_footer(); ?>
