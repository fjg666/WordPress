(function($){
	'use strict';

	var tmce_getContent = function(editor_id) {
		if ( typeof editor_id == 'undefined' ) editor_id = wpActiveEditor;

		if ( $('#wp-'+editor_id+'-wrap').hasClass('tmce-active') && tinyMCE.get(editor_id) ) {
			return tinyMCE.get(editor_id).getContent();
		}else{
			return jQuery('#'+editor_id).val();
		}
	}

	var validateEmail = function(email){
		if( /^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(email) ){
			return true;
		}
		return false;
	};


	$(document).ready(function(){


		// post save
		$('#post_save').on('click', function(){
			var _id = $('#post_id').val() + '';
			var _title = $('#post_title').val() + '';
			var _cats = [];
			var _excerpt = $('#post_excerpt').val();
			var _content = tmce_getContent('post_content');
			var _featured_img = $('#post_featured_image').val();

			$('input[name="post_cat[]"]:checked').each(function(){
				_cats.push( this.value );
			});

			if( _title.replace(/ /g, '')=='' ){
				alert('Please enter title!');
				return;
			}

			if( _cats.length < 1 ){
				alert('Please check category!');
				return;
			}

			if( _content.length < 20 ){
				alert('Please post content!');
				return;
			}

			$('#the_loader').fadeIn('fast');
			$.post(theme_options.ajax_url, { action: 'themeton_frontend_publish', id: _id, title: _title, excerpt: _excerpt, content: _content, cats: _cats, image: _featured_img }, function(response){

				$('.alert').hide();

				if( response=='' ){
					$('.alert-danger').show();
				}
				else{
					var _json = $.parseJSON(response);
					if( typeof _json.result !== 'undefined' ){
						$('.alert-success').find('span').html( '<a href="'+_json.result+'">'+$('.alert-success').find('span').data('text')+'</a>' );
						$('.alert-success').fadeIn('fast');
					}
					else{
						$('.alert-danger').show();
					}
				}

				$('#the_loader').fadeOut('fast');
			});

		});
	

		// featured image handler
		var file_frame;
		$('.elm-featured-image').each(function(){
			var _this = $(this);

			if( _this.find('.elm-image-preview img').length ){
				_this.find('a.elm-image-handler').text( _this.find('a.elm-image-handler').data('remove') );
			}
			else{
				_this.find('a.elm-image-handler').text( _this.find('a.elm-image-handler').data('add') );
			}
			_this.find('a.elm-image-handler').on('click', function(){
				var _btn = $(this);

				if( _btn.text() == _btn.data('add') ){
					if ( file_frame ) {
						file_frame.open();
						return;
					}

					file_frame = wp.media.frames.file_frame = wp.media({
						title: 'Select featured image',
						button: {
							text: 'Select Image',
						},
						multiple: false,
						library: { type : 'image' }
					});

					file_frame.on( 'select', function() {
						var attachment = file_frame.state().get('selection').first().toJSON();
						_this.find('input.elm-image').eq(0).val( attachment.id );
						_this.find('.elm-image-preview').html( '<img src="'+attachment.url+'">' );
						_btn.text( _btn.data('remove') );
					});

					file_frame.open();
				}
				else{
					_this.find('input.elm-image').eq(0).val('');
					_this.find('.elm-image-preview').html('');
					_btn.text( _btn.data('add') );
				}
				
			});
		});
		
		

		// profile save
		$('#profile_save').on('click', function(){
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

			
			if( !validateEmail(_profile.email) ){
				alert('Please check email!');
				return;
			}

			if( _profile.pass1!='' && _profile.pass1!=_profile.pass2 ){
				alert('Please check password!');
				return;
			}

			$('#the_loader').fadeIn('fast');
			$.post(theme_options.ajax_url, _profile, function(response){

				$('.alert').hide()

				if( response=='' ){
					$('.alert-danger').show();
				}				
				else{
					var _json = $.parseJSON(response);
					if( typeof _json.result !== 'undefined' ){
						$('.alert-success').fadeIn('fast');
					}
					else{
						$('.alert-danger').show();
					}
				}

				$('#the_loader').fadeOut('fast');
			});

		});


	});

	$(window).load(function(){

	});

})(jQuery);