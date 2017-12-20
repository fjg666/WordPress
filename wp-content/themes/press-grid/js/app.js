'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

(function ($) {
	"use strict";

	var posts = [];
	var img_4x3 = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAYAAAC09K7GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjBGMzVEOTkxOTg1MTFFNThBOUNFRjI4MTEzOEUzRkMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjBGMzVEOUExOTg1MTFFNThBOUNFRjI4MTEzOEUzRkMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MEYzNUQ5NzE5ODUxMUU1OEE5Q0VGMjgxMTM4RTNGQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2MEYzNUQ5ODE5ODUxMUU1OEE5Q0VGMjgxMTM4RTNGQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlJ5GZYAAAAXSURBVHjaYvz//z8DMmBiQAMYAgABBgCTOQMDDFkqKwAAAABJRU5ErkJggg==';

	// Press Grid Item Object

	var PressgridItem = function (_React$Component) {
		_inherits(PressgridItem, _React$Component);

		function PressgridItem(props) {
			_classCallCheck(this, PressgridItem);

			var _this2 = _possibleConstructorReturn(this, (PressgridItem.__proto__ || Object.getPrototypeOf(PressgridItem)).call(this, props));

			var post = _this2.props.post;

			_this2.state = {
				the_post: post
			};
			return _this2;
		}

		_createClass(PressgridItem, [{
			key: 'render',
			value: function render() {
				var post = this.state.the_post;

				var format = post.format,
				    media = post.media,
				    author = post.author;
				var type = media.type,
				    src = media.src,
				    lazyload = media.lazyload;


				var item_class = ['pressgrid-item'];

				for (var k = 0; k < post.post_classes.length; k++) {
					item_class.push(post.post_classes[k]);
				}

				item_class.push(themeton_content_col);

				// Author and date
				var el_author_date = React.createElement(
					'div',
					{ className: 'entry-author' },
					React.createElement('img', { src: author.avatar, alt: 'avatar' }),
					React.createElement(
						'a',
						{ href: author.link },
						author.name
					),
					React.createElement(
						'span',
						null,
						'|'
					),
					React.createElement(
						'a',
						{ href: post.link },
						post.date
					),
					this.renderEditLink(post)
				);

				if (post.emotions.length < 1) {
					el_author_date = React.createElement(
						'div',
						{ className: 'entry-author' },
						React.createElement('img', { src: author.avatar, alt: 'avatar' }),
						React.createElement(
							'a',
							{ href: author.link },
							author.name
						),
						this.renderEditLink(post)
					);
				}

				// Post Categories
				var el_categories = React.createElement(
					'div',
					{ className: 'entry-cats' },
					post.categories.map(function (cat) {
						return React.createElement(
							'a',
							{ href: cat.link, style: { "background-color": cat.color } },
							cat.name
						);
					})
				);

				// Post Format Media
				var el_media = false;
				if (type == 'image') {
					el_media = React.createElement(
						'div',
						{ className: 'entry-image' },
						React.createElement('img', { src: lazyload, 'data-src': src, alt: 'post image' }),
						el_categories
					);
					el_categories = false;
					item_class.push('layout-image');
				} else if (type == 'gallery') {
					el_media = React.createElement(
						'div',
						{ className: 'entry-image' },
						React.createElement(
							'div',
							{ className: 'swiper-container' },
							React.createElement(
								'div',
								{ className: 'swiper-wrapper' },
								src.map(function (img_item) {
									return React.createElement(
										'div',
										{ className: 'swiper-slide' },
										React.createElement(
											'div',
											{ className: 'entry-gallery-item', style: { "background-image": 'url(' + img_item + ')' } },
											React.createElement('img', { src: img_4x3, alt: 'dimensions' })
										)
									);
								})
							),
							React.createElement('div', { className: 'swiper-pagination' })
						),
						el_categories
					);
					el_categories = false;
					item_class.push('layout-image');
					item_class.push('layout-gallery');
				} else if (type == 'audio') {
					el_media = React.createElement(
						'div',
						{ className: 'entry-audio' },
						React.createElement('div', { className: 'entry-audio-player' }),
						el_categories
					);
					el_categories = false;
					item_class.push('layout-audio');
				}

				// Post Title
				var el_title = React.createElement(
					'h3',
					{ className: 'entry-title' },
					React.createElement(
						'a',
						{ href: post.link },
						post.title
					)
				);

				// Post Excerpt
				var el_excerpt_text = $('<span></span>').html(post.excerpt).text();
				var el_excerpt = el_excerpt_text == '' ? '' : React.createElement(
					'div',
					{ className: 'entry-excerpt' },
					el_excerpt_text
				);

				// Meta Section
				var el_bottom = React.createElement(
					'div',
					{ className: 'entry-meta' },
					React.createElement(
						'div',
						{ className: 'left-content' },
						this.renderReactions(post)
					),
					React.createElement(
						'div',
						{ className: 'right-content' },
						React.createElement(
							'span',
							null,
							React.createElement('i', { className: 'icon-eye' }),
							post.post_views
						),
						React.createElement(
							'span',
							null,
							React.createElement('i', { className: 'icon-bubbles' }),
							post.comments
						)
					),
					React.createElement('div', { className: 'clearfix' })
				);

				return React.createElement(
					'div',
					{ className: item_class.join(' ') },
					React.createElement(
						'div',
						{ className: 'pg-item' },
						el_media,
						el_author_date,
						el_categories,
						el_title,
						el_excerpt,
						el_bottom
					)
				);
			}
		}, {
			key: 'renderEditLink',
			value: function renderEditLink(post) {
				if (post.edit_url == '') {
					return '';
				}

				return React.createElement(
					'a',
					{ href: post.edit_url, className: 'post-edit-url' },
					'Edit'
				);
			}
		}, {
			key: 'renderGallery',
			value: function renderGallery() {
				return React.createElement(
					'div',
					null,
					'gallery'
				);
			}
		}, {
			key: 'renderAudio',
			value: function renderAudio() {
				return React.createElement(
					'div',
					null,
					'audio'
				);
			}
		}, {
			key: 'renderReactions',
			value: function renderReactions(post) {
				var _this3 = this;

				var emotions = post.emotions;


				if (emotions.length < 1) {
					return React.createElement(
						'div',
						{ className: 'post-reactions not-reaction' },
						React.createElement(
							'em',
							null,
							post.date
						)
					);
				}

				var total_reactions = 0;
				$.each(emotions, function (i, item) {
					if (parseInt(item.count, 10) > 0) {
						total_reactions += item.count;
					} else {
						total_reactions = item.count;
					}
				});

				return React.createElement(
					'div',
					{ className: 'post-reactions' },
					emotions.map(function (item) {
						return React.createElement(
							'span',
							null,
							_this3.renderReactionItem(item.emoji)
						);
					}),
					React.createElement(
						'em',
						null,
						total_reactions
					),
					this.renderActionReact(post)
				);
			}
		}, {
			key: 'renderReactionItem',
			value: function renderReactionItem(reaction) {
				return React.createElement(
					'svg',
					{ className: 'emotion-icon emoji-icon-' + reaction, 'aria-hidden': 'true' },
					React.createElement('use', { xlinkHref: '#emoji-icon-' + reaction })
				);
			}
		}, {
			key: 'renderActionReact',
			value: function renderActionReact(post) {
				var _this4 = this;

				if (themeton_reaction_of_posts.indexOf(post.id) > -1) {
					return '';
				}
				return React.createElement(
					'div',
					{ className: 'post-action-react' },
					pressgrid_reactions.map(function (item) {
						return React.createElement(
							'a',
							{ href: 'javascript:;', onClick: _this4.onReactionPost.bind(_this4, item.emoji) },
							_this4.renderReactionItem(item.emoji),
							React.createElement(
								'span',
								null,
								item.label
							)
						);
					})
				);
			}
		}, {
			key: 'onReactionPost',
			value: function onReactionPost(reaction) {
				var post = this.state.the_post;
				var _this = this;
				var el_this = ReactDOM.findDOMNode(_this);
				$(el_this).find('.post-action-react').hide();

				$.post(theme_options.ajax_url, { action: 'themeton_post_reaction', post_id: post.id, reaction: reaction }, function (data) {
					if (data != '') {
						var _response = false;
						try {
							_response = $.parseJSON(data);
						} catch (e) {}

						if (_response) {
							post.emotions = _response;
							_this.setState({ the_post: post });
						}
					}
				});
			}
		}, {
			key: 'componentDidUpdate',
			value: function componentDidUpdate() {}
		}, {
			key: 'componentDidMount',
			value: function componentDidMount() {
				var post = this.state.the_post;
				var format = post.format,
				    media = post.media,
				    author = post.author;
				var type = media.type,
				    src = media.src,
				    lazyload = media.lazyload;

				var _this = this;
				var el_this = ReactDOM.findDOMNode(_this);

				if (type == 'image') {
					$('<img src="' + src + '">').on('load', function () {
						post.media.lazyload = src;
						_this.setState({ the_post: post });
					});
				} else if (type == 'gallery') {
					(function () {
						var current_gallery = $(el_this).find('.swiper-container').swiper({
							slidesPerView: 1,
							spaceBetween: 0,
							pagination: $(el_this).find('.swiper-pagination'),
							paginationClickable: true
						});

						$(window).resize(function () {
							setTimeout(function () {
								current_gallery.update();
							}, 600);
						});
					})();
				} else if (type == 'audio') {
					$(el_this).find('.entry-audio-player').html(src);
					$(el_this).find('.wp-audio-shortcode, .wp-video-shortcode').mediaelementplayer({ autosizeProgress: true });
					$(el_this).find('.wp-playlist').each(function () {
						return new WPPlaylistView({ el: this });
					});
				}

				_this.props.onItemdAddedBind(el_this, _this.props.index);
			}
		}]);

		return PressgridItem;
	}(React.Component);

	// Press Grid Object


	var Pressgrid = function (_React$Component2) {
		_inherits(Pressgrid, _React$Component2);

		_createClass(Pressgrid, [{
			key: 'getInitialState',
			value: function getInitialState() {
				return {
					masonry: false
				};
			}
		}]);

		function Pressgrid(props) {
			_classCallCheck(this, Pressgrid);

			var _this5 = _possibleConstructorReturn(this, (Pressgrid.__proto__ || Object.getPrototypeOf(Pressgrid)).call(this, props));

			var data = props.data;
			var _data$count = data.count,
			    count = _data$count === undefined ? 0 : _data$count,
			    _data$current = data.current,
			    current = _data$current === undefined ? 1 : _data$current,
			    _data$pagination = data.pagination,
			    pagination = _data$pagination === undefined ? [] : _data$pagination,
			    _data$items = data.items,
			    items = _data$items === undefined ? [] : _data$items,
			    _data$pager_label = data.pager_label,
			    pager_label = _data$pager_label === undefined ? 'Load more' : _data$pager_label,
			    _data$pager_label_emp = data.pager_label_empty,
			    pager_label_empty = _data$pager_label_emp === undefined ? 'No more posts' : _data$pager_label_emp;

			_this5.state = {
				posts: items,
				current: current,
				pagination: pagination,
				pager_label: pager_label,
				pager_label_empty: pager_label_empty,
				posts_length: items.length,
				postsElements: []
			};
			return _this5;
		}

		_createClass(Pressgrid, [{
			key: 'render',
			value: function render() {
				var _this6 = this;

				return React.createElement(
					'div',
					{ className: 'items-container' },
					this.state.posts.map(function (post, index) {
						return React.createElement(PressgridItem, { post: post, index: index, onItemdAddedBind: _this6.onItemdAddedBind.bind(_this6) });
					})
				);
			}
		}, {
			key: 'renderPagination',
			value: function renderPagination() {
				if (this.state.current == -1 && this.state.pagination.length) {
					if ($('#pressgrid_pager_standard').length < 1) {
						$('#pressgrid_content').after('<div id="pressgrid_pager_standard"></div>');
					}
					$('#pressgrid_pager_standard').html($(this.state.pagination[0]));
					return;
				}
				if ($('#pressgrid_pagination').length) {
					ReactDOM.render(React.createElement(
						'div',
						{ className: 'pressgrid-pager' },
						React.createElement(
							'a',
							{ href: 'javascript:;', onClick: this.onPaginationBind.bind(this) },
							React.createElement(
								'svg',
								{ className: 'pagination-loader', 'aria-hidden': 'true' },
								React.createElement('use', { xmlnsXlink: 'http://www.w3.org/1999/xlink', xlinkHref: '#svg-icon-loader' })
							),
							React.createElement(
								'span',
								null,
								this.state.pager_label
							)
						)
					), document.getElementById('pressgrid_pagination'));
				}
			}
		}, {
			key: 'onPaginationBind',
			value: function onPaginationBind(event) {
				var _this7 = this;

				if (!$('#pressgrid_pagination').hasClass('onloading')) {
					if (this.state.pagination.length > 1 && this.state.current < this.state.pagination.length) {
						var _ret2 = function () {
							var pager = _this7.state.current + 1;
							var _this = _this7;
							var _pagination = _this7.state.pagination;
							if (_pagination[_this7.state.current] != '') {
								$('#pressgrid_pagination').addClass('onloading');
								$.post(_pagination[_this7.state.current], { paged: pager }, function (response) {
									if (response != '') {
										var _json = $.parseJSON(response);
										if (typeof _json.items !== 'undefined' && _json.items && _json.items.length > 0) {
											var _state_posts = _this.state.posts;
											var _the_posts = _state_posts.concat(_json.items);
											_this.setState({ current: pager });
											_this.setState({ postsElements: [] });
											_this.setState({ posts_length: _this.state.posts_length + _json.items.length });
											_this.setState({ posts: _the_posts });
										}

										$('#pressgrid_pagination').removeClass('onloading');
									}
								});
								return {
									v: void 0
								};
							}
						}();

						if ((typeof _ret2 === 'undefined' ? 'undefined' : _typeof(_ret2)) === "object") return _ret2.v;
					}
					$('#pressgrid_pagination').find('a span').text(this.state.pager_label_empty);
				}
			}
		}, {
			key: 'onItemdAddedBind',
			value: function onItemdAddedBind(newElement, index) {
				var _this = this;
				var _elements = this.state.postsElements;
				var _ne = $(newElement).clone();
				_elements.push(_ne);
				this.setState({ postsElements: _elements });

				if (index + 1 >= _this.state.posts_length) {
					(function () {

						var _elements_container = $('<div></div>');
						$.each(_this.state.postsElements, function (index, item) {
							_elements_container.append(item);
						});

						_elements_container.imagesLoaded(function () {
							if (!_this.state.masonry) {
								// initial options
								$('#pressgrid_content').find('.items-container').isotope({
									itemSelector: '.pressgrid-item',
									layoutMode: 'masonry',
									initLayout: false,
									transitionDuration: 0
								});
								// bind event
								$('#pressgrid_content').find('.items-container').isotope('on', 'layoutComplete', function (_event) {

									$('#pressgrid_content').find('.items-container').find('.pressgrid-item:not(.elm-animate)').each(function (_index) {
										var _el = $(this);
										_el.css({
											'-webkit-transition-delay': _index * 0.1 + "s",
											'-moz-transition-delay': _index * 0.1 + "s",
											'-ms-transition-delay': _index * 0.1 + "s",
											'-o-transition-delay': _index * 0.1 + "s",
											'transition-delay': _index * 0.1 + "s"
										});
										_el.addClass('elm-animate');
									});
								});
								// initialize
								$('#pressgrid_content').find('.items-container').isotope();

								$(window).resize(function () {
									setTimeout(function () {
										$('#pressgrid_content').find('.items-container').isotope('reloadItems').isotope({ sortBy: '*' });
									}, 800);
								});

								_this.setState({ masonry: true });
							} else {
								// $('#pressgrid_content').find('.items-container').isotope({ sortBy: '*' });
								$('#pressgrid_content').find('.items-container').isotope('reloadItems').isotope({ sortBy: '*' });
							}
						});
					})();
				}
			}
		}, {
			key: 'componentDidUpdate',
			value: function componentDidUpdate() {}
		}, {
			key: 'componentDidMount',
			value: function componentDidMount() {
				var _this = this;
				this.renderPagination();
			}
		}]);

		return Pressgrid;
	}(React.Component);

	// Build Press Grid


	if ($('#pressgrid_json').length) {
		var json_data = $('#pressgrid_json').html();
		if (json_data != '') {
			var _json = $.parseJSON(json_data);
			if (typeof _json.items !== 'undefined' && _json.items) {
				ReactDOM.render(React.createElement(Pressgrid, { data: _json }), document.getElementById('pressgrid_content'));
			}
		}
	}
})(jQuery);
