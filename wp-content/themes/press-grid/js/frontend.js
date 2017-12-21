(function($, Arfunboy) {
  'use strict';

  var api = {
    // draw_add: '/api/post.php'
    draw_add: '/wordpress/api/post.php'
  }

  var tmce_getContent = function(editor_id) {
    if (typeof editor_id == 'undefined') editor_id = wpActiveEditor;

    if ($('#wp-' + editor_id + '-wrap').hasClass('tmce-active') && tinyMCE.get(editor_id)) {
      return tinyMCE.get(editor_id).getContent();
    } else {
      return jQuery('#' + editor_id).val();
    }
  }

  var validateEmail = function(email) {
    if (/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(email)) {
      return true;
    }
    return false;
  };

  var get_video_target = function(src, width, height) {

    return '[video width="' + width +
    '" height="' + height +
    '" mp4="' + src + '"][/video]'
  }
  var get_audio_target = function(src) {
    return '[audio mp3="' + src + '"][/audio]'
  }

  var get_apk_target = function (link, name){
    return '<a href="'+ link +'">'+ name +'</a>'
  }

  var draw_audio_add = function (event){
    console.log('draw_audio_add');
  }


  $(document).ready(function() {

    // wpnoce
    Arfunboy.wpnoce = $('#wpnoce').val();
    // 如果有修改？
    Arfunboy.video_page_id = $('#post_id').val();
    // video target, 存放视频标签字符
    Arfunboy.video_target = '';
    Arfunboy.useridd = $('#useridd').val();

    // 播单中添加视频
    Arfunboy.item_add_video = {
      video_ids : [], // 添加的id 数组
      // 播单id
      parent_id :  null
    };
    // Arfunboy.item_add_video.video_ids = [];
    // Arfunboy.item_add_video.parent_id = null;
    // console.log(Arfunboy);

    // apk
    Arfunboy.apk = {
      apk_file: [],
      img_ids: [],
      img_arr: [],
      page: 0
    };




    ////////////////////////////////////
    // Video upload
    //
    // dependencies: [jquery, jquery-file-upload]
    // js/vendor/jquery.ui.widget.js ： jQuery UI Widget
    // js/vendor/jquery.iframe-transport.js ： 扩展 iframe 数据传输
    // js/vendor/jquery.fileupload.js ： jQuery File Upload核心类
    //
    // 2017-10-30

    // 'use strict';
    // Change this to the location of your server-side upload handler:
    // var url = window.location.hostname === 'blueimp.github.io' ?
    //     '//jquery-file-upload.appspot.com/' : 'server/php/';
    var url = 'wp-admin/async-upload.php',
    post_id = 0;

    ////////////////////////////////////
    // 绘本音频上传,
    var upload_draw_video = function (){

      console.log('upload_draw_video');
      var img_id = '';
      $('.draw-audio-add').fileupload({

        url: url,
        dataType: 'json',
        // 服务器请求参数
        formData: {
          action: 'upload-attachment',  // 必传,server 回调php方法
          _wpnonce: Arfunboy.wpnoce,    // 必传,每次登陆时wp生成字符(临时验证)
          // post_id: post_id,
        },
        add: function (e, data) {
          console.log(e);
          console.log(e.target.defaultValue);

          // img_id = e.target.defaultValue
          // if(img_id === ''){
          //   console.log('图片id未获取');
          // }else{
          //   data.submit();
          // }
          data.submit();

          console.log('file add video');
        },

        done: function (e, data) {
          console.log(e);

          // 添加音频按钮元素节点
          var target = e.target;

          // 语音文件成功上传执行:
          if (data.result.success === true){

            // 服务器返回文件上传信息
            var data = data.result.data,
              // 语音对应图片索引
              index = target.id - 1;

              console.log(data);
              console.log(target.parentElement.parentElement.lastElementChild.innerText);

            // 是否 音频文件
            if(data.mime === 'audio/mpeg'){
              // 添加id, url
              Arfunboy.apk.img_ids[index].arm_id = data.id;
              Arfunboy.apk.img_ids[index].arm_url = data.url;

              // 输出音频url到页面
              target.parentElement.parentElement.lastElementChild.innerText = data.url

              // 获取预插入对象
              console.log(Arfunboy.apk.img_ids[ index ]);
              console.log(data.mime);
            }
            else{
              console.log('上传的文件类型不支持!');
            }

          }
        },
        // progressall: function (e, data) {
        //     var progress = parseInt(data.loaded / data.total * 100, 10);
        //     $('#progress .progress-bar').css(
        //         'width',
        //         progress + '%'
        //     );
        // }
      })
      .prop('disabled', !$.support.fileInput)
      .parent().addClass($.support.fileInput ? undefined : 'disabled');
    };



    ////////////////////////////////////
    // 绘本多张图片上传,
    $('#upload-draw-images').fileupload({
      url: url,
      dataType: 'json',
      maxNumberOfFile: 5,
      // 服务器请求参数
      formData: {
        action: 'upload-attachment',  // 必传,server 回调php方法
        _wpnonce: Arfunboy.wpnoce,    // 必传,每次登陆时wp生成字符(临时验证)
        // post_id: post_id,
      },
      // autoUpload: false,
      acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,

      add: function (e, data) {
        // if( data.originalFiles[0].type === 'image/png' 
        //   || data.originalFiles[0].type === 'image/jpeg'
        //   || data.originalFiles[0].type === 'image/gif' ){
        //   console.log(' images upload ');
        // }

        if( data.originalFiles.length > 50){
          console.log('最多选择50张图片');
          return;
        } 
        else if( (Arfunboy.item_add_video.video_ids.length + data.originalFiles.length) > 50){
          console.log('最多选择50张图片');
          return;
        }
        else if( data.originalFiles[0].type !== 'image/png' 
          && data.originalFiles[0].type !== 'image/jpeg'
          && data.originalFiles[0].type !== 'image/gif'){
          console.log('上传类型不正确');
        return;
      }
      else {
        data.submit();
      }
    },

    done: function(e, data) {
        // $.each(data.result.files, function(index, file) {
        //   $('<p/>').text(file.name).appendTo('#files');
        // });

        // Arfunboy.apk.page = Arfunboy.apk.page + 1;

        // 如果上传状态反回 success
        if (data.result.success === true
          && Arfunboy.apk.img_arr.length < 50) {

          /*
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
          */
          var data = data.result.data,

            // img_str = '<p><img class="draw-audio-add" src="'+ data.url +'" alt=""/></p>';
            img_str = '<div class="draw-img-item"> \
            <p> <img src="'+ data.url 
            +'" alt=""> <a href="" class="btn btn-success fileinput-button"> <i class="icon-cloud-upload"></i> 添加音频(mp3) <input class="draw-audio-add" id="'
            + (Arfunboy.apk.img_ids.length + 1) +'" value="'+ data.id 
            +'" type="file" name="async-upload"> </a> <span class="draw-audio-add-msg">还未添加音频</span> </p> </div>',

            // 绘本每篇数据
            draw_data_item = {
             page : Arfunboy.apk.img_ids.length + 1, 
             img_id: data.id, 
             img_url: data.url,
             arm_id: 0,
             arm_url: ''
           }

           Arfunboy.apk.img_ids.push(draw_data_item);

           console.log(data);            
           console.log(Arfunboy.apk);

           if(data.url) {
            $('#files-draw-images').append(img_str);
            // 添加上传后的事件
            upload_draw_video();
          }

          // images , image/jpeg, image/png, image/gif
          if(data.mime === 'image/jpeg' 
            || data.mime === 'image/png' || data.mime === 'image/gif'){
            Arfunboy.apk.img_arr.push(img_str);
        }
        else{
          console.log('上传的文件类型不支持!');
        }
      }
      else{
        console.log('图片不能超出限制');
      }
    },
    progressall: function(e, data) {
      var progress = parseInt(data.loaded / data.total * 100, 10);
      $('#progress-apk-images .progress-bar').css(
        'width',
        progress + '%'
        );
      $('#progress-apk-images .progress-bar').text(progress + '%');
        // console.log(e.files);
      }
    }).prop('disabled', !$.support.fileInput)
    .parent().addClass($.support.fileInput ? undefined : 'disabled');

    ////////////////////////////////////
    // draw book edit => init data
    // if has edit data 
    var draw_edit_data = $('#bookblock_json_edit').html();
    // console.log($('#bookblock_json_edit'));
    // console.log(draw_edit_data !== undefined)
    if (draw_edit_data !== undefined) {

      var draw_edit_json = $.parseJSON(draw_edit_data);
      var draw_edit_json_len = draw_edit_json.length;
console.log(draw_edit_json[0].img);
      if(draw_edit_json_len > 0 && draw_edit_json[0].img){

        for(var i = 0; i < draw_edit_json_len; i++ ) {
          console.log( draw_edit_json[i] );
          (function(data){
            console.log(data);

            var data = data,

            img_str = '<div class="draw-img-item"> \
            <p>\
            <img src="'+ data.img +'" alt="">\
            <a href="" class="btn btn-success fileinput-button">\
            <i class="icon-cloud-upload"></i>添加音频(mp3)\
            <input class="draw-audio-add" id="'+ (Arfunboy.apk.img_ids.length + 1) +'"\
            value="" type="file" name="async-upload">\
            </a>\
            <span class="draw-audio-add-msg">'+ data.amr +'</span>\
            </p>\
            </div>',

            draw_data_item = {
             page : Arfunboy.apk.img_ids.length + 1, 
             img_id: 0, 
             img_url: data.img,
             arm_id: 0,
             arm_url: data.amr
           };

           Arfunboy.apk.img_ids.push(draw_data_item);

           console.log(data);            
           console.log(Arfunboy.apk);

           if(data.img) {
            $('#files-draw-images').append(img_str);

          }
        }(draw_edit_json[i]));
        } 
        upload_draw_video();
      }

    }

    ///////////////////////////////////////////////
    // 绘本保存 save
    $('#post_save_draw').on('click', function() {

      var data_temp = {
        post_id: $('#post_id').val() + '',
        title: $('#post_title').val() + '',
        cats: [],
        tag: [],
        excerpt: $('#post_excerpt').val(),
        uid: $('#uid').val(),
        // fileLength: $('#post_fileLength').val(),
        // content: tmce_getContent('post_content'),
        // system: $('#post_system').val(),
        // developer: $('#post_developer').val(),
        // version: $('#post_version').val(),
        image: $('#post_featured_image').val(),
        draw_arr:  Arfunboy.apk.img_ids,
      }

      $('input[name="post_cat[]"]:checked').each(function() {
        data_temp.cats.push(this.value);
      });

      $('input[name="post_tag[]"]:checked').each(function() {
        data_temp.tag.push(this.value);
      });

      // $('input[name="post_format[]"]:checked').each(function() {
      //   data_temp.format = this.value;
      // });


      if (data_temp.title.replace(/ /g, '') == '') {
        alert('请输入标题!');
        return;
      }

      if (data_temp.cats.length < 1) {
        alert('请选择栏目');
        return;
      }

      if (data_temp.tag.length < 1) {
        alert('请选择标签');
        return;
      }

      console.log(Arfunboy.apk);

      if(Arfunboy.apk.img_ids.length === 0){
        alert('请上传绘本');
        return;
      }

      data_temp.format = 'draw';
      data_temp.ApiJson = 'json';
      data_temp.act = 'PcUploadBook';
      
      $('#the_loader').fadeIn('fast');

      $.post(api.draw_add, data_temp, function(response) {

        console.log(response);

        if(response){
          $('.alert').hide();
          var _json = $.parseJSON(response);

          if(_json.code && _json.code === '200' ){
            console.log('upload success !')

            $('.alert-success').find('span').html('<a href="' + _json.url + '">' +
            $('.alert-success').find('span').data('text') + '</a>');
            $('.alert-success').fadeIn('fast');
            $('#the_loader').fadeOut('fast');
          }
          else{
            console.log('error ');
            $('.alert-danger').show();
          }
        }
        

      });
    });


    ///////////////////////////////////////////////
    // post save => video 
    $('#post_save').on('click', function() {
      var _id = $('#post_id').val() + '';
      var _title = $('#post_title').val() + '';
      var _cats = [];
      var _tag = [];
      var _excerpt = $('#post_excerpt').val();
      var fileLength = $('#post_fileLength').val();
      // var _content = tmce_getContent('post_content');

      // 文章内容
      if (!Arfunboy.video_target) {
        Arfunboy.video_target = $('#edit_video').val();
      }
      // console.log(Arfunboy.video_target);

      var _content = Arfunboy.video_target;
      var _featured_img = $('#post_featured_image').val();
      var _format = 'video';

      $('input[name="post_cat[]"]:checked').each(function() {
        _cats.push(this.value);
      });

      $('input[name="post_tag[]"]:checked').each(function() {
        _tag.push(this.value);
        console.log(this.value);
      });

      $('input[name="post_format[]"]:checked').each(function() {
        _format = this.value;
      });


      if (_title.replace(/ /g, '') == '') {
        alert('请输入标题!');
        return;
      }

      if (_format.replace(/ /g, '') == '') {
        alert('请输入上传类型!');
        return;
      }

      if (_cats.length < 1) {
        alert('请选择栏目');
        return;
      }

      // if (_tag.length < 1) {
      //   alert('请选择标签');
      //   return;
      // }

      // if (_content.length < 20) {
      //     alert('请添加视频');
      //     return;
      // }

      // return;

      $('#the_loader').fadeIn('fast');
      $.post(theme_options.ajax_url, {
        action: 'themeton_frontend_publish',
        id: _id,
        title: _title,
        excerpt: _excerpt,
        content: _content,
        cats: _cats,
        image: _featured_img,
        format: _format,
        tag: _tag,
        fileLength: fileLength
      }, function(response) {

        $('.alert').hide();

        if (response == '') {
          $('.alert-danger').show();
        } else {
          console.log( response );
          var _json = $.parseJSON(response);
          if (typeof _json.result !== 'undefined') {

            $('.alert-success').find('span').html('<a href="' + _json.result + '">' +
              $('.alert-success').find('span').data('text') + '</a>');
            $('.alert-success').fadeIn('fast');

          } else {
            $('.alert-danger').show();
          }
        }

        $('#the_loader').fadeOut('fast');
      });
    });

    // featured image handler
    var file_frame;
    $('.elm-featured-image').each(function() {
      var _this = $(this);

      if (_this.find('.elm-image-preview img').length) {
        _this.find('a.elm-image-handler').text(_this.find('a.elm-image-handler').data('remove'));
      } else {
        _this.find('a.elm-image-handler').text(_this.find('a.elm-image-handler').data('add'));
      }
      _this.find('a.elm-image-handler').on('click', function() {
        var _btn = $(this);

        if (_btn.text() == _btn.data('add')) {
          if (file_frame) {
            file_frame.open();
            return;
          }

          file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select featured image',
            button: {
              text: 'Select Image',
            },
            multiple: false,
            library: {
              type: 'image'
            }
          });

          file_frame.on('select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            _this.find('input.elm-image').eq(0).val(attachment.id);
            _this.find('.elm-image-preview').html('<img src="' + attachment.url + '">');
            _btn.text(_btn.data('remove'));
          });

          file_frame.open();
        } else {
          _this.find('input.elm-image').eq(0).val('');
          _this.find('.elm-image-preview').html('');
          _btn.text(_btn.data('add'));
        }

      });
    });

    // 个人信息保存事件
    // deprecated
    // profile save
    $('#profile_save').on('click', function() {
      var _profile = {
        action: 'themeton_profile_update',
        first_name: $('#user_firstname').val(),
        last_name: $('#user_lastname').val(),
        email: $('#user_email').val(),
        website: $('#user_url').val(),
        facebook: $('#user_fb_url').val(),
        twitter: $('#user_tw_url').val(),
        desc: $('#user_description').val(),
        pass1: $('#new_password').val(),
        pass2: $('#confirm_password').val()
      };


      if (!validateEmail(_profile.email)) {
        alert('Please check email!');
        return;
      }

      if (_profile.pass1 != '' && _profile.pass1 != _profile.pass2) {
        alert('Please check password!');
        return;
      }

      $('#the_loader').fadeIn('fast');
      $.post(theme_options.ajax_url, _profile, function(response) {

        $('.alert').hide()

        if (response == '') {
          $('.alert-danger').show();
        } else {
          var _json = $.parseJSON(response);
          if (typeof _json.result !== 'undefined') {
            $('.alert-success').fadeIn('fast');
          } else {
            $('.alert-danger').show();
          }
        }

        $('#the_loader').fadeOut('fast');
      });

    });

    ///////////////////////////////////////////
    // Modal 对象
    // 2017-07-18
    var ArModal = (function() {

      // @param sureBtn 确定按钮选择器
      // @param cancel 取消按钮选择器
      var AddListen = function(sureBtn, cancelBtn) {

        // var that = obj;
        var that = this;
        // console.log(this);
        // console.log(sureBtn);
        // console.log(cancelBtn);

        // .find('*').
        $(".m-modal .btn").on("click", function(event) {
          // 阻止冒泡Event => 默认跳转事件 => For IE
          event.stopPropagation();
          // 阻止捕获Event => For standard
          event.preventDefault();
        });

        // 指定取消按钮上添加事件
        $(cancelBtn).on('click', function(e) {

          if (that.fn_cancel) {
            // 执行取消回调函数
            that.fn_cancel();
          } else {
            console.log('no fn_cancel');
          }

          that.hide();
        })

        // 指定提交按钮上添加事件
        $(sureBtn).on("click", function(event) {

          // console.log(that);
          var is_hide = that.fn_sure();

          if (is_hide) {
            that.hide();
          }
        });
      }

      //@param fn_sure callback method
      //@param fn_cancel callback method
      //@param sureBtn  <确认>按钮类名(.suer-btn)
      function modal(fn_sure, fn_cancel, sureBtn, cancelBtn) {

        var sureBtn,
        cancelBtn;

        this.fn_sure = fn_sure;
        this.fn_cancel = fn_cancel;
        sureBtn = sureBtn || '.m-btn-sure';
        cancelBtn = cancelBtn || ".m-modal-close, .m-btn-cancel";

        // console.log(sureBtn);
        // console.log(cancelBtn);

        // this._addClickListen();

        // 在当前作用域构造此方法
        AddListen.apply(this, [sureBtn, cancelBtn]);
        // 点击确定后的回调函数
      }

      // 添加公共方法
      modal.prototype = {

        // @param width dialog
        // @param 上边距
        // @param id : 窗口id
        setSize: function(width, marginTop, wrappId) {
          this.width = width; // 窗口宽度
          this.marginTop = marginTop; // 窗口外边距(上)
          this.wrappId = wrappId; // 窗口id
        },

        setAction: function(action) {
          this.action = action;
        },

        // setSureBtn : function(btn){
        //     this.sureBtn = btn;
        // },

        setId: function(id) {
          this.data_id = id;
        },

        setData: function(data) {
          $(this.wrappId + ' #video_item_title').val(data.title);
          $(this.wrappId + ' #video_item_excerpt').val(data.excerpt);
        },

        // 显示窗口
        show: function() {
          $(this.wrappId).fadeIn(100);
          // $(this.wrappId).css('display: block');
          $(this.wrappId).children('.m-modal-dialog').animate({
            "margin-top": this.marginTop,
            "width": this.width
          }, 250);
        },

        // 隐藏窗口
        hide: function() {
          var $modal = $(this.wrappId);
          $modal.children('.m-modal-dialog').animate({
            "margin-top": "-100%"
          }, 500);
          $modal.fadeOut(100);
        }
      };

      return {
        modal: modal
      }
    })();
    // End ArModal
    ///////////////////////////////////////////


    // 视频加载完成后选中事件
    // item selection
    var list_item_func = function(event) {
      // 获取选中视频的id
      var id = $(this).attr('data-vid');

      // 添加选中效果样式
      $(this).toggleClass('selected');

      var selected = $(this).hasClass('selected');

      // 添加id
      if ($(this).hasClass('selected')) {

        Arfunboy.item_add_video.video_ids.push(id);
      }
      // 在数组集合中删除这个 id
      else {
        // 获取数组中索引
        var id_index = Arfunboy.item_add_video.video_ids.indexOf(id);
        // 已经删除
        if (id_index < 0) {
          return;
        }
        // 移除id
        Arfunboy.item_add_video.video_ids.splice(id_index, 1);
      }

      console.log(Arfunboy.item_add_video.video_ids)


      // 全选按钮
      // if ( $('.m-middle-figures li.selected').length == 0 ){

      //     $('.select').removeClass('selected');
      //     console.log('remove');
      // }
      // else{
      //     $('.select').addClass('selected');
      //     console.log('add');
      // }

      // counter();
    }

    ///////////////////////////////
    // 全选事件
    $("._check_all").click(function() {
      if (this.checked) {
        $("input[name='selectFlag']:checkbox").each(function() { //遍历所有的name为selectFlag的 checkbox
          $(this).attr("checked", true);
        })
      } else { //反之取消全选
        $("input[name='selectFlag']:checkbox").each(function() { //遍历所有的name为selectFlag的 checkbox
          $(this).attr("checked", false);
          //alert("f");
        })
      }
    });

    $('#che')


    ///////////////////////////////
    // 是否继续删除窗口
    // @param fn_sure 确认后回调
    // @param fn_calcel 取消回调
    // @param 确认按钮
    // @param 取消按钮 [待添加]
    var modal_video_del_win = new ArModal.modal(function(e) {
        // 点击确定按钮后执行...
        // 添空上次添加数组
        Arfunboy.item_add_video.parent_id = null;

        if (Arfunboy.video_ids) {
          var send_action = 'themeton_del_booklist';

          console.log(Arfunboy.video_ids);

          $.post(theme_options.ajax_url, {
            action: send_action,
            id: Arfunboy.video_ids,
          }, function(response) {
            if (response == '') {

            } else {
              alert('删除成功');
              window.location.reload();
              console.log('delete success');
            }
          });

        }
      }, function(e) {
        // 点击[取消/关闭]按钮后执行...
        // console.log('cancel click => m-btn-cancel-video-del');
      },
      '.m-btn-sure-video-del-single',
      '.m-btn-cancel-video-del, .m-modal-close-video-del');


    ///////////////////////////////
    //  删除视频事件[单选删除]
    // tpl-video-list.php
    $('.del_video').click(function(e) {

      // 阻止冒泡Event => 默认跳转事件 => For IE
      e.stopPropagation();
      // 阻止捕获Event => For standard
      e.preventDefault();

      // 获取到当前视频id
      Arfunboy.video_ids = [];
      Arfunboy.video_ids.push($(this).attr("data-vid"));

      // 设置窗口大小信息
      // @param 窗口宽度
      // @param 上边距
      // @param Dialog ID
      modal_video_del_win.setSize('300px', '40px', '#modal-video-del');
      // 显示窗口
      modal_video_del_win.show();
    });

    ///////////////////////////////
    //  删除绘本事件[多选删除]
    // tpl-video-list.php
    $('#del_draw_all').click(function(e) {
      // 阻止冒泡Event => 默认跳转事件 => For IE
      e.stopPropagation();
      // 阻止捕获Event => For standard
      e.preventDefault();

      console.log('del_draw_all click');

      var checkbox = $('#draw_list input[name="selectFlag"]:checked');

      Arfunboy.video_ids = [];

      if (checkbox.length === 0) {
        console.log('请选择要删除的绘本');
        alert('请选择要删除的绘本');
        return;
      }

      for (var i = 0, len = checkbox.length; i < len; i++) {
        // console.log( checkbox[i].value );
        Arfunboy.video_ids.push(checkbox[i].value);
      }

      if (Arfunboy.video_ids) {
        // 设置窗口大小信息
        // @param 窗口宽度
        // @param 上边距
        // @param Dialog ID
        modal_video_del_win.setSize('300px', '40px', '#modal-video-del');
        // 显示窗口
        modal_video_del_win.show();
      }
    });
  });

window.Arfunboy = Arfunboy;

})(jQuery, window.Arfunboy || {});
