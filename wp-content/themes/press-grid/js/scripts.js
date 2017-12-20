(function($){
	"use strict";

	var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

	var isTouchDevice = function(){
	    return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
	}

	$('[data-bg-image]').each(function(){
		$(this).css({ 'background-image': 'url('+$(this).data('bg-image')+')' });
	});

	$('[data-bg-color]').each(function(){
		$(this).css({ 'background-color': $(this).data('bg-color') });
	});

	$('[data-width]').each(function(){
		$(this).css({ 'width': $(this).data('width') });
	});

	$('[data-height]').each(function(){
		$(this).css({ 'height': $(this).data('height') });
	});

	$('[data-alpha]').each(function(){
		$(this).css({ 'opacity': $(this).data('alpha') });
	});


	var validateEmail = function(email){
		if( /^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(email) ){
			return true;
		}
		return false;
	};


	$(document).ready(function(){

		// Topbar search handler
		$('.topbar-item .search-item a.search-handler').on('click', function(){
			$('body').addClass('opened-search');
			$(this).parent().find('.search-form-container').find('input').eq(0).focus();
			$('html').addClass('lock-scroll');
		});
		$('.topbar-item .search-item a.burger-handler').on('click', function(){
			$('body').removeClass('opened-search');
			$('body').removeClass('opened-menu');
			$('html').removeClass('lock-scroll');
		});
		

		if( $('body').hasClass('page') || $('body').hasClass('single') || $('.featured-post').length ){
			$('#the_loader').fadeOut('fast', function(){
				$('#the_loader').addClass('loaded');
			});
		}


		
		/* Sign in, Sign up Actions
		======================================*/

		$('.login-detail').find('a.act-sign-in-up').on('click', function(){
			var _btn = $(this);

			_btn.siblings().show();
			_btn.hide();

			$('.login-detail').find('form.dropdown-form').slideUp('fast');

			if( _btn.hasClass('register') ){
				$('.login-detail').find('form.dropdown-form-register').slideDown('fast');
			}
			else if( _btn.hasClass('recover') ){
				$('.login-detail').find('form.dropdown-form-recover').slideDown('fast');
			}
			else{
				$('.login-detail').find('form.dropdown-form-login').slideDown('fast');
			}

		});

		$('.login-detail').find('.sign-links a.sign-link-in').on('click', function(){
			$('.login-detail').find('a.act-sign-in-up.login').trigger('click');
		});

		$('.login-detail').find('.sign-links a.sign-link-up').on('click', function(){
			$('.login-detail').find('a.act-sign-in-up.register').trigger('click');
		});


		// sign in, sign up form actions
		$('.login-detail form.dropdown-form-login').on('submit', function(){
			var _form = $(this);
			if( _form.find('button.btn').hasClass('btn-loading') ){
				return false;
			}

			var _user = {
				action: 'themeton_user_signin',
				username: $('#login_username').val(),
				pass: $('#login_password').val(),
				nonce: $('#pg_user_login_nonce').val()
			};

			if( _user.username=='' || _user.pass=='' ){
				_form.find('.text-danger').text('Please check username or password!');
				_form.find('.text-danger').show();
				return false;
			}

			_form.find('button.btn').addClass('btn-loading');
			$.post(theme_options.ajax_url, _user, function(response){
				if( response!='' ){
					var _json = $.parseJSON(response);
					if( typeof _json.redirect !== 'undefined' ){
						window.location.href = _json.redirect;
					}
					else{
						_form.find('.text-danger').text('Please check your username!');
						_form.find('.text-danger').show();
					}
				}
				else{
					_form.find('.text-danger').text('Please check your username!');
					_form.find('.text-danger').show();
				}
				_form.find('button.btn').removeClass('btn-loading');
			});

			return false;
		});

		$('.login-detail form.dropdown-form-register').on('submit', function(){
			var _form = $(this);
			if( _form.find('button.btn').hasClass('btn-loading') ){
				return false;
			}

			var _user = {
				action: 'themeton_user_signup',
				username: $('#reg_username').val(),
				email: $('#reg_email').val(),
				nonce: $('#pg_user_login_nonce').val()
			};

			if( _user.username=='' || _user.email=='' || !validateEmail(_user.email) ){
				_form.find('.text-danger').text('Please check username or email!');
				_form.find('.text-danger').show();
				return false;
			}

			_form.find('button.btn').addClass('btn-loading');
			$.post(theme_options.ajax_url, _user, function(response){
				var _response = false;
    			try{
    				var _json = $.parseJSON(response);
    				_response = _json.user;
    			}catch(e){}

				if( _response ){
					_form.find('.text-danger').text('Success, A password has been sent to your e-mail address.');
					_form.find('.text-danger').show();
					_form.find('.text-danger').addClass('text-success').removeClass('text-danger');
				}
				else{
					_form.find('.text-danger').text('Please check your email!');
					_form.find('.text-danger').show();
				}
				_form.find('button.btn').removeClass('btn-loading');
			});

			return false;
		});

		$('.login-detail form.dropdown-form-recover').on('submit', function(){
			var _user = {
				action: 'themeton_user_lost_pass',
				username_email: $('#rec_name_email').val(),
				nonce: $('#pg_user_login_nonce').val()
			};

			if( _user.username_email=='' ){
				alert('Please check username or email!');
				return false;
			}

			$('#the_loader').fadeIn('fast');
			$.post(theme_options.ajax_url, _user, function(response){
				if( response!='' ){
					alert('Please check your email');
				}
				$('#the_loader').fadeOut('fast');
			});
			return false;
		});




		/* Preparing Menu
		======================================*/

		var preparing_menu = function(){
			var $gmc = $('.grid-menu-container');
			$gmc.find('.grid-menu').html("");

			// building menus
			$('#header nav.main-nav > ul > li').each(function(){
				var _level1 = $(this);
				var _a = _level1.find('> a').clone();
				var _menu = $('<div class="grid-menu-item"><span></span></div>');

				_menu.find('span').append(_a);
				if( _level1.find('>ul').length ){
					_menu.addClass('has-children');
				}

				$gmc.find('.grid-menu').append( _menu );
				setTimeout(function(){
					pm_showing();
				}, 100);
			});

			// setting menu items count
			$gmc.find('.grid-menu').attr('data-grid', $gmc.find('.grid-menu .grid-menu-item').length);

			// menu item click handler
			$gmc.find('.grid-menu').find('.grid-menu-item a').off('click').on('click', function(){
				var _link = $(this);

				// has child menu
				if( _link.parents('.grid-menu-item').hasClass('has-children') ){

					pm_closing();

					var _index = $gmc.find('.grid-menu').find('.grid-menu-item').index( _link.parents('.grid-menu-item') );
					setTimeout(function(){
						$gmc.find('.grid-menu').html("");

						// add back menu
						var _mback = $('<div class="grid-menu-item menu-back"><span></span></div>');
						_mback.find('span').append( $('<a href="javascript:;"></a>').html('...') );
						$gmc.find('.grid-menu').append( _mback );

						// add sub menu items
						$('#header nav.main-nav > ul > li').eq(_index).find('> ul > li').each(function(){
							var _level1 = $(this);
							var _a = _level1.find('> a').clone();
							var _menu = $('<div class="grid-menu-item"><span></span></div>');

							_menu.find('span').append(_a);
							if( _level1.find('>ul').length ){
								_menu.addClass('has-children');
							}

							$gmc.find('.grid-menu').append( _menu );
						});

						// setting menu items count
						setTimeout(function(){
							$gmc.find('.grid-menu').attr('data-grid', $gmc.find('.grid-menu .grid-menu-item').length);
							pm_showing();
						}, 100);

						// back menu button handler
						$gmc.find('.grid-menu').find('.grid-menu-item a').on('click', function(){
							var _sm = $(this);
							if( _sm.parents('.grid-menu-item').hasClass('menu-back') ){
								pm_closing();
								setTimeout(function(){
									preparing_menu();
								}, $gmc.find('.grid-menu').find('.grid-menu-item').length*100+200);
								return false;
							}
							else{
								pm_closing();
								setTimeout(function(){
									$('#menu-handler').trigger('click');
									window.location.href = _sm.attr('href');
								}, $gmc.find('.grid-menu').find('.grid-menu-item').length*100+200);
								return false;
							}
						});

					},800);

					return false;
				}
				else{
					pm_closing();
					setTimeout(function(){
						$('#menu-handler').trigger('click');
						window.location.href = _link.attr('href');
					}, $gmc.find('.grid-menu').find('.grid-menu-item').length*100+200);


					// <<< one page menu
					if( $('ul.one-page-menu').length ){
						var href = _link.attr('href') + '';
						href = href.replace('#', '');

						var $row_c = $('div[data-onepage-slug="'+href+'"]');
						if( $row_c.length ){
							var otop = $row_c.offset().top;
							otop = otop - $('header').height();
							if(otop<0){ otop = 0; }
							$("html, body").animate({ scrollTop: otop }, "slow");
						}
					}
					// one page menu >>>
					

					return false;
				}
			});
			
		};

		var pm_showing = function(){
			var $gmc = $('.grid-menu-container');
			var _duration = 0;
			$gmc.find('.grid-menu').find('.grid-menu-item').each(function(index){
				_duration = (index+1)/10+0.1;
				$(this).css({
					'-webkit-transition-delay': _duration+'s',
					'-moz-transition-delay': _duration+'s',
					'transition-delay': _duration+'s'
				});
				$(this).addClass('showing-item');
			});

			setTimeout(function(){
				$gmc.find('.grid-menu').find('.grid-menu-item').each(function(index){
					$(this).css({
						'-webkit-transition-delay': '0s',
						'-moz-transition-delay': '0s',
						'transition-delay': '0s'
					});
				});
			}, _duration*1000);
		};

		var pm_closing = function(){
			var $gmc = $('.grid-menu-container');
			var _i = $gmc.find('.grid-menu').find('.grid-menu-item').length-1;
			var _ani = 1;
			for( var _j=_i; _j>=0; _j-- ){
				$gmc.find('.grid-menu').find('.grid-menu-item').eq(_j).css({
					'-webkit-transition-delay': _ani/10+'s',
					'-moz-transition-delay': _ani/10+'s',
					'transition-delay': _ani/10+'s'
				});
				$gmc.find('.grid-menu').find('.grid-menu-item').eq(_j).addClass('hiding-item');
				_ani++;
			}
		};

		$('#menu-handler').on('click', function(){
			$('body').addClass('opened-menu');
			$('html').addClass('lock-scroll');
			preparing_menu();
		});
		



		/* Preparing Menu
		======================================*/
		$('.featured-post').each(function(){
			var el_this = $(this);
			$(el_this).find('.swiper-container').swiper({
				slidesPerView: 1,
				spaceBetween: 0,
				pagination: $(el_this).find('.swiper-pagination'),
				paginationClickable: true
			});
		});



		$(document).keyup(function(e) {
		     if (e.keyCode == 27) { // press ESC
		        if( $('html').hasClass('lock-scroll') ){
		        	$('.topbar-item .search-item a.burger-handler').trigger('click');
		        }
		    }
		});



		// sticky sidebar
		$('.sticky-content-sidebar').each(function(){
			var _this = $(this);
			_this.find('.sticky-content, .sidebar').theiaStickySidebar();
		});

	});



	$(window).load(function(){

		// page loaded
		$('body').addClass('page-loaded');
		$('#the_loader').fadeOut('fast', function(){
			$('#the_loader').addClass('loaded');
		});

	});


})(jQuery);
