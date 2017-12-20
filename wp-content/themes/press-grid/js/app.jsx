(function($){
	"use strict";

	const posts =[];
	var img_4x3 = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADCAYAAAC09K7GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjBGMzVEOTkxOTg1MTFFNThBOUNFRjI4MTEzOEUzRkMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjBGMzVEOUExOTg1MTFFNThBOUNFRjI4MTEzOEUzRkMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MEYzNUQ5NzE5ODUxMUU1OEE5Q0VGMjgxMTM4RTNGQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2MEYzNUQ5ODE5ODUxMUU1OEE5Q0VGMjgxMTM4RTNGQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlJ5GZYAAAAXSURBVHjaYvz//z8DMmBiQAMYAgABBgCTOQMDDFkqKwAAAABJRU5ErkJggg==';

	// Press Grid Item Object
	class PressgridItem extends React.Component{
		constructor(props){
			super(props);

			const { post } = this.props;
			this.state = {
				the_post: post
			};
		}

		render(){
			const post = this.state.the_post;

			const { format, media, author } = post;
			const { type, src, lazyload } = media;

			const item_class = [
				'pressgrid-item'
			];

			for(var k=0; k<post.post_classes.length; k++){
				item_class.push(post.post_classes[k]);
			}

			item_class.push(themeton_content_col);

			// Author and date
			let el_author_date = (
				<div className="entry-author">
					<img src={author.avatar} alt="avatar"/>
					<a href={author.link}>{author.name}</a>
					<span>|</span>
					<a href={post.link}>{post.date}</a>
					{this.renderEditLink(post)}
				</div>
			);

			if( post.emotions.length < 1 ){
				el_author_date = (
					<div className="entry-author">
						<img src={author.avatar} alt="avatar"/>
						<a href={author.link}>{author.name}</a>
						{this.renderEditLink(post)}
					</div>
				);
			}

			// Post Categories
			let el_categories = (
				<div className="entry-cats">
					{post.categories.map(cat => (
						<a href={cat.link} style={{ "background-color":cat.color }}>{cat.name}</a>
			        ))}
		        </div>
			);

			// Post Format Media
			let el_media = false;
			if( type=='image' ){
				el_media = (
					<div className="entry-image">
						<img src={lazyload} data-src={src} alt="post image" />
						{el_categories}
					</div>
				);
				el_categories = false;
				item_class.push('layout-image');
			}
			else if( type=='gallery' ){
				el_media = (
					<div className="entry-image">
						<div className="swiper-container">
							<div className="swiper-wrapper">
								{src.map(img_item => (
									<div className="swiper-slide">
										<div className="entry-gallery-item" style={{ "background-image": 'url('+img_item+')' }}>
											<img src={img_4x3} alt="dimensions" />
										</div>
									</div>
						        ))}
							</div>
							<div className="swiper-pagination"></div>
						</div>
						{el_categories}
					</div>
				);
				el_categories = false;
				item_class.push('layout-image');
				item_class.push('layout-gallery');
			}
			else if( type=='audio' ){
				el_media = (
					<div className="entry-audio">
						<div className="entry-audio-player"></div>
						{el_categories}
					</div>
				);
				el_categories = false;
				item_class.push('layout-audio');
			}

			// Post Title
			let el_title = (
				<h3 className="entry-title"><a href={post.link}>{post.title}</a></h3>
			);

			// Post Excerpt
			let el_excerpt_text = $('<span></span>').html(post.excerpt).text();
			let el_excerpt = (el_excerpt_text=='') ? '' : (
				<div className="entry-excerpt">{el_excerpt_text}</div>
			);

			// Meta Section
			let el_bottom = (
				<div className="entry-meta">
					<div className="left-content">
						{this.renderReactions(post)}
					</div>
					<div className="right-content">
						<span><i className="icon-eye"></i>{post.post_views}</span>
						<span><i className="icon-bubbles"></i>{post.comments}</span>
					</div>
					<div className="clearfix"></div>
				</div>
			);

			return (
				<div className={item_class.join(' ')}>
					<div className="pg-item">
						{el_media}
						{el_author_date}
						{el_categories}
						{el_title}
						{el_excerpt}
						{el_bottom}
					</div>
				</div>
			);
		}

		renderEditLink(post){
			if( post.edit_url=='' ){
				return '';
			}

			return (
				<a href={post.edit_url} className="post-edit-url">Edit</a>
			);
		}

		renderGallery(){
			return (
				<div>gallery</div>
			);
		}

		renderAudio(){
			return (
				<div>audio</div>
			);
		}

		renderReactions(post){
			const { emotions } = post;

			if( emotions.length < 1 ){
				return (
					<div className="post-reactions not-reaction">
						<em>{post.date}</em>
					</div>
				);
			}
			
			let total_reactions = 0;
			$.each(emotions, function(i, item){
				if( parseInt(item.count, 10) > 0 ){
					total_reactions += item.count;
				}
				else{
					total_reactions = item.count;
				}
			});
			
			return (
				<div className="post-reactions">
					{emotions.map(item => (
						<span>
							{this.renderReactionItem(item.emoji)}
						</span>
			        ))}
			        <em>{total_reactions}</em>
			        {this.renderActionReact(post)}
				</div>
			);
		}

		renderReactionItem(reaction){
			return (
				<svg className={`emotion-icon emoji-icon-${reaction}`} aria-hidden="true">
					<use xlinkHref={`#emoji-icon-${reaction}`}/>
				</svg>
			);
		}

		renderActionReact(post){
			if( themeton_reaction_of_posts.indexOf(post.id) > -1 ){
				return '';
			}
			return (
				<div className="post-action-react">
					{pressgrid_reactions.map(item => (
						<a href="javascript:;" onClick={this.onReactionPost.bind(this, item.emoji)}>
							{this.renderReactionItem(item.emoji)}
							<span>{item.label}</span>
						</a>
			        ))}
				</div>
			);
		}

		onReactionPost(reaction) {
			const post = this.state.the_post;
			let _this = this;
			let el_this = ReactDOM.findDOMNode(_this);
			$(el_this).find('.post-action-react').hide();

        	$.post(theme_options.ajax_url, { action: 'themeton_post_reaction', post_id:post.id, reaction:reaction }, function(data){
        		if( data!='' ){
        			var _response = false;
        			try{
        				_response = $.parseJSON(data);
        			}catch(e){}

        			if( _response ){
        				post.emotions = _response;
        				_this.setState({ the_post: post });
        			}
        		}
        	});
    	}

    	componentDidUpdate() {
    		
    	}

    	componentDidMount() {
    		const post = this.state.the_post;
			const { format, media, author } = post;
			const { type, src, lazyload } = media;
			let _this = this;
			var el_this = ReactDOM.findDOMNode(_this);

			if( type=='image' ){
				$('<img src="'+src+'">').on('load', function(){
					post.media.lazyload = src;
					_this.setState({ the_post: post });
				});
			}
			else if( type=='gallery' ){
    			let current_gallery = $(el_this).find('.swiper-container').swiper({
					slidesPerView: 1,
					spaceBetween: 0,
				    pagination: $(el_this).find('.swiper-pagination'),
	        		paginationClickable: true
				});

	    		$(window).resize(function(){
	    			setTimeout(function(){
	    				current_gallery.update();
	    			}, 600);
	    		});
    		}
    		else if( type=='audio' ){
    			$(el_this).find('.entry-audio-player').html(src);
    			$(el_this).find('.wp-audio-shortcode, .wp-video-shortcode').mediaelementplayer({ autosizeProgress: true });
    			$(el_this).find('.wp-playlist').each( function() {
					return new WPPlaylistView({ el: this });
				});
    		}

    		_this.props.onItemdAddedBind(el_this, _this.props.index);
    	}
	}



	// Press Grid Object
	class Pressgrid extends React.Component{
		getInitialState() {
	        return {
	            masonry: false
	        }
	    }
		constructor(props) {
			super(props);

			const { data } = props;
			const { count=0, current=1, pagination=[], items=[], pager_label='Load more', pager_label_empty='No more posts' } = data;
			this.state = {
				posts: items,
				current: current,
				pagination: pagination,
				pager_label: pager_label,
				pager_label_empty: pager_label_empty,
				posts_length: items.length,
				postsElements: []
			};
		}
		render() {
			return (
				<div className="items-container">
					{this.state.posts.map((post, index) => (
						<PressgridItem post={post} index={index} onItemdAddedBind={this.onItemdAddedBind.bind(this)} />
			        ))}
				</div>
			);
		}

		renderPagination() {
			if( this.state.current==-1 && this.state.pagination.length ){
				if( $('#pressgrid_pager_standard').length<1 ){
					$('#pressgrid_content').after('<div id="pressgrid_pager_standard"></div>');
				}
				$('#pressgrid_pager_standard').html( $(this.state.pagination[0]) );
				return;
			}
			if( $('#pressgrid_pagination').length ){
				ReactDOM.render(
					(
						<div className="pressgrid-pager">
							<a href="javascript:;" onClick={this.onPaginationBind.bind(this)}>
								<svg className="pagination-loader" aria-hidden="true">
									<use xmlnsXlink="http://www.w3.org/1999/xlink" xlinkHref="#svg-icon-loader"></use>
								</svg>
								<span>{this.state.pager_label}</span>
							</a>
						</div>
					),
					document.getElementById('pressgrid_pagination')
				);
			}
		}

		onPaginationBind(event){
			if( !$('#pressgrid_pagination').hasClass('onloading') ){
				if( this.state.pagination.length > 1 && this.state.current < this.state.pagination.length ){
					let pager = this.state.current +1;
					let _this = this;
					let _pagination = this.state.pagination;
					if( _pagination[this.state.current]!='' ){
						$('#pressgrid_pagination').addClass('onloading');
						$.post(_pagination[this.state.current], { paged:pager }, function(response){
							if( response!='' ){
								var _json = $.parseJSON(response);
								if( typeof _json.items!=='undefined' && _json.items && _json.items.length>0 ){
									let _state_posts = _this.state.posts;
									let _the_posts = _state_posts.concat(_json.items);
									_this.setState({ current: pager });
									_this.setState({ postsElements: [] });
									_this.setState({ posts_length: _this.state.posts_length + _json.items.length });
									_this.setState({ posts: _the_posts });
								}

								$('#pressgrid_pagination').removeClass('onloading');
							}
						});
						return;
					}
				}
				$('#pressgrid_pagination').find('a span').text( this.state.pager_label_empty );
			}
		}
		

		onItemdAddedBind(newElement, index) {
			var _this = this;
			var _elements = this.state.postsElements;
			var _ne = $(newElement).clone();
			_elements.push( _ne );
			this.setState({ postsElements: _elements });

			if( index+1 >= _this.state.posts_length ){

				let _elements_container = $('<div></div>');
				$.each(_this.state.postsElements, function(index, item){
					_elements_container.append( item );
				});

				_elements_container.imagesLoaded(function(){
					if( !_this.state.masonry ){
						// initial options
						$('#pressgrid_content').find('.items-container').isotope({
		        			itemSelector: '.pressgrid-item',
		        			layoutMode: 'masonry',
		        			initLayout: false,
		        			transitionDuration: 0
		    			});
		    			// bind event
		    			$('#pressgrid_content').find('.items-container').isotope( 'on', 'layoutComplete', function(_event) {
		    				
							$('#pressgrid_content').find('.items-container').find('.pressgrid-item:not(.elm-animate)').each(function(_index){
								var _el = $(this);
				    			_el.css({
				    				'-webkit-transition-delay': (_index*0.1)+"s",
				    				   '-moz-transition-delay': (_index*0.1)+"s",
				    					'-ms-transition-delay': (_index*0.1)+"s",
				    					 '-o-transition-delay': (_index*0.1)+"s",
				    						'transition-delay': (_index*0.1)+"s"
				    			});
				    			_el.addClass('elm-animate');
							});
							
						});
						// initialize
						$('#pressgrid_content').find('.items-container').isotope();

						$(window).resize(function(){
							setTimeout(function(){
								$('#pressgrid_content').find('.items-container').isotope('reloadItems').isotope({ sortBy: '*' });
							}, 800);
						});

		    			_this.setState({ masonry: true });
					}
					else{
						// $('#pressgrid_content').find('.items-container').isotope({ sortBy: '*' });
						$('#pressgrid_content').find('.items-container').isotope('reloadItems').isotope({ sortBy: '*' });
					}
				});
			}
		}

		componentDidUpdate() {
			
		}

		componentDidMount() {
			let _this = this;
			this.renderPagination();
		}

	}

	// Build Press Grid
	if( $('#pressgrid_json').length ){
		var json_data = $('#pressgrid_json').html();
		if( json_data!='' ){
			var _json = $.parseJSON(json_data);
			if( typeof _json.items!=='undefined' && _json.items ){
				ReactDOM.render(
					<Pressgrid data={_json} />, document.getElementById('pressgrid_content')
				);
			}
		}
	}
	

})(jQuery);