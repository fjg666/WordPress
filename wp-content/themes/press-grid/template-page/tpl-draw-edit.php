<?php
/*
Template Name: Video-list Page
*/
// echo WP_CONTENT_DIR;

// pagination
get_template_part('template-parts/paged');
get_header();
$_get_post = get_query_var('post');

$post_id = !empty($_get_post) && abs($_get_post)>0 ? abs($_get_post) : 0;
$post_title = '';
$post_excerpt = '';
$post_content = '[{}]';
$post_image = '';
$post_image_src = '';
// $post_tag = array();
$post_tag_id = '';
$post_cats = array();
$post_bq= array();
if( $post_id>0 ) {
    $the_post = get_post($post_id);
    // print_r($the_post);
    if( !empty($the_post) && isset($the_post->post_content) ){
        $post_title = $the_post->post_title;
        $post_excerpt = $the_post->post_excerpt;
        $post_content = $the_post->post_content;


        if( has_post_thumbnail($post_id) ){
            $post_image = get_post_thumbnail_id($post_id);
            wp_get_attachment_image_url($post_image, 'full');
            $post_image_src = sprintf( '<img src="%s">', esc_attr(wp_get_attachment_image_url($post_image, 'full')) );

        }

        $categories = wp_get_post_terms($post_id, 'category');

        if( !empty($categories) ){
            foreach( $categories as $category ){
                $post_cats[] = $category->term_id;
            }
        }

        $post_tag = wp_get_post_tags($post_id);
        $post_tag_id = $post_tag[0]->term_id;
        // echo $post_tag[0]->term_id;
        // echo '---';
        // print_r($post_tag);
        // print_r( get_the_category( $post_id) );
    }
}
global $current_user;
$user_id = $current_user->ID;

$biaoqian = get_article_terms($post_id);
foreach($biaoqian as $k=>$v){
  $post_bq[] = $v->term_id;
}


/*$res = get_all_videopost($user_id);*/
?>

<!-- 文件上传按钮样式 -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.fileupload.css">

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
                        <?php get_template_part('template-page/tpl-draw-nav'); ?>

                       <!--  <div class="widget">
                            <button type="button" id="post_save" class="btn btn-primary"><?php //esc_html_e('保 存', 'press-grid'); ?></button>
                            &nbsp;
                            <a href="<?php //echo esc_url(get_author_posts_url(get_current_user_id())); ?>" class="btn btn-secondary"><?php //esc_html_e('取消', 'press-grid'); ?></a>
                        </div> -->
                        <div class="widget">
                            <h5><?php esc_html_e('栏目', 'press-grid'); ?></h5>
                            <div class="elm-categories">
                                <div class="elm-cat-item">
                                    <?php
                                    $categories = get_categories( array(
                                        'type' => 'post',
                                        'child_of' => 0,
                                        'parent' => '0',
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                        'hide_empty' => false,
                                        'hierarchical' => 1,
                                        'number' => '',
                                        'taxonomy' => 'category',
                                        'pad_counts' => false

                                    ));
                                    // echo '-------';
                                    // print_r($categories);
                                    foreach ($categories as $item):
                                    ?>
                                    <label>
                                    <!-- checkbox -->
                                        <input type="radio" name="post_cat[]" value="<?php echo esc_attr($item->term_id); ?>" <?php printf('%s', in_array($item->term_id, $post_cats) ? 'checked' : ''); ?>>
                                        <?php printf('%s', $item->name); ?>
                                    </label>
                                    <?php
                                    endforeach; ?>
                                </div>
                            </div>
                        </div> 
                        <!-- .widget -->
                        <div class="widget">
                          <h5><?php esc_html_e('标签', 'press-grid'); ?></h5>
                          <div class="elm-categories">
                              <div class="elm-cat-item">
                                  <?php
                                  $tags = get_tags(array( 'get' => 'all' ));
                                  foreach ($tags as $item):
                                    // print_r($tags);
                                  ?>
                                  <label>
                                  <!-- term_id -->
                                      <input type="radio" name="post_tag[]" 
                                      value="<?php echo esc_attr($item->name); ?>" 
                                      <?php //printf('%s', in_array($item->item, $post_tag[0]->term_id) ? 'checked' : ''); ?>
                                      <?php printf('%s', $item->term_id == $post_tag_id
                                        ? 'checked' : '');?>
                                      >
                                      <?php printf('%s', $item->name); ?>
                                  </label>
                                  <?php
                                  endforeach; ?>
                              </div>
                          </div>
                      </div><!-- .widget -->
                    </div> <!-- end .theiaStickySidebar_video-->
                </div><!--End .entry-sidebar-->
            </div><!--End .sidebar .video .col-md-3 -->
            <div class="col-md-9">
              <div class="post-entry-content post-entry-content-video">
                <div class="theiaStickySidebar_video">

                  

                  <div class="page-content">
                      <div class="entry-content">
                          <input type="hidden" name="wpnoce" id="wpnoce" value="<?php echo wp_create_nonce( 'media-form' ); ?>" >

                          <input type="hidden" id="post_id" name="post_id" value="<?php echo esc_attr($post_id); ?>">

                          <input type="hidden" id="edit_video" value="<?php echo esc_html_e($post_content);?>">

                          <input type="hidden" id="uid" name="uid" value="<?php echo get_current_user_id();?>" />
                          <?php
                          // if($_get_post){
                          //   echo '当前视频： '.$post_content;
                          // }
                          ?>
                          <div class="form-group">
                              <input type="text" id="post_title" name="post_title"
                                value="<?php echo esc_attr($post_title); ?>"
                                placeholder="<?php esc_html_e("输入标题", 'press-grid'); ?>"
                                class="form-control">
                          </div>

                          <div class="form-group">
                              <textarea type="text" id="post_excerpt" name="post_excerpt"
                              placeholder="<?php esc_html_e('讲讲这个绘本的简介，让更多的人了解', 'press-grid'); ?>"
                              class="form-control"><?php printf('%s', $post_excerpt); ?></textarea>
                          </div>

                          
                      </div><!--End .entry-content-->
                  </div><!--End .page-content-->

                  <div class="page-content page-content-video">
                    <div class="entry-content">
                      <!-- The fileinput-button span is used to style the file input field as button -->
                      <span class="btn btn-warning fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <!-- <span>选择视频 将视频拖放至此处</span> -->
                          <dl class="file_select">
                              <!--
                              .icon-cloud-upload
                              .icon-cloud-download
                              -->
                            <dt><i class="icon-cloud-upload"></i></dt>
                            <dd>
                              <h3>选择绘本描述图片</h3>
                              <p>或将图片拖放到此处(最多100张)</p>
                            </dd>
                          </dl>
                          <!-- The file input field used as target for the file upload widget -->
                          <!-- <input id="fileupload" type="file" name="files[]" multiple> -->
                          <input id="upload-draw-images" type="file" name="async-upload" multiple>
                      </span>

                      <br/>
                      <br/>

                      <!-- The global progress bar -->
                      <div id="progress-apk-images" class="progress">
                          <div class="progress-bar progress-bar-success"></div>
                      </div>
                      <script type="text/template" id="bookblock_json_edit">
                        <?php echo $post_content; ?>
                      </script>
                      <!-- The container for the uploaded files -->
                      <div id="files-draw-images" class="files">

                      <!-- 
                        <div class="draw-img-item">
                          <p>
                            <img src="http://localhost/wp-content/uploads/2017/10/10-1.jpg" alt="">
                            <a href="" class="btn btn-success fileinput-button">
                              <i class="icon-cloud-upload"></i> 添加音频
                              <input class="draw-audio-add" id="id1" type="file" name="async-upload">
                            </a>
                            <span class="draw-audio-add-msg">http://localhost/?pagename=draw-edit</span>
                          </p>
                        </div>
                        -->
                        
                      </div>
                    </div><!--End .entry-content -->
                  </div><!--End .page-content .page-content-video -->
                  
                  <div class="entry-content">
                    <div class="page-content">
                      <!-- <div class="widget"> -->
                          <div class="form-group">
                                <h5><?php esc_html_e('添加封面图片', 'press-grid'); ?></h5>
                                <div class="elm-featured-image">
                                    <div class="elm-image-preview"><?php printf('%s', $post_image_src); ?></div>

                                    <input type="hidden" id="post_featured_image" name="post_featured_image" value="<?php echo esc_attr($post_image); ?>" class="elm-image">

                                    <a href="javascript:;" class="elm-image-handler btn btn-info" data-add="<?php esc_attr_e('单击上传图片', 'press-grid'); ?>" data-remove="<?php esc_attr_e('移除封面图片', 'press-grid'); ?>">
                                        <?php esc_html_e('选择封面图片', 'press-grid'); ?>
                                    </a>
                                    <input type="hidden" id="post_fileLength" name="post_fileLength" value="">
                                </div>
                          </div>

                          <div class="form-group">
                            <!-- <div class="widget"> -->
                                <button type="button" id="post_save_draw" class="btn btn-primary"><?php esc_html_e('保 存', 'press-grid'); ?></button>
                                &nbsp;
                                <a href="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>" class="btn btn-secondary"><?php esc_html_e('取消', 'press-grid'); ?></a>
                          </div>

                          <div class="alert alert-success" role="alert" style="display:none;">
                              <strong><?php esc_html_e('绘本已上传', 'press-grid'); ?></strong> 
                              <span data-text="<?php esc_attr_e('显示上传内容', 'press-grid'); ?>"></span>
                          </div>

                          <div class="alert alert-danger" role="alert" style="display:none;">
                              <strong><?php esc_html_e('警告!', 'press-grid'); ?></strong> 
                              <?php esc_html_e('请再次尝试!', 'press-grid'); ?>
                          </div>
                    </div>
                  </div><!--End .entry-content -->

                </div>
              </div>
            </div><!--End 9.col-md-9 -->
          </div><!-- .End .row sticky-content-sidebar -->
      </div><!-- End .icontainer -->
  </form><!-- End #frontend_editor -->
</section><!-- End .content-area -->



<?php get_footer(); ?>

