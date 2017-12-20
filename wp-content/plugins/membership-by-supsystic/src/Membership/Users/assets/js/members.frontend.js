(function($, Membership) {

	var $usersList = $('.users-list'),
		$showMoreButtonContainer = $('#users-list-load-more'),
		$showMoreButton = $showMoreButtonContainer.find('button'),
		showMoreButtonIsEnabled = Membership.get('settings.design.members.show-load-more-button') === 'true',
		paginationIsEnabled = Membership.get('settings.design.members.show-pages') === 'true',
		$loader = $('.users-list-loader'),
		$usersSearchInput = $('#users-search-input'),
		limit = 10,
		searchQuery = $usersSearchInput.val(),
		hasMoreUsers = $usersList.find('.mp-user-card').length === limit,
		loadRequest = false,
		requestPromise;

	function loadUsers() {
		if (loadRequest || paginationIsEnabled) {
			return;
		}

		$showMoreButton.hide();
		$loader.fadeToggle();
		loadRequest = true;

		if (searchQuery) {
			requestPromise = Membership.api.users.search({
				query: searchQuery,
				limit: limit,
				offset: $usersList.children().length,
				template: 'users-list'
			});
		} else {
			requestPromise = Membership.api.users.get({
				limit: limit,
				offset: $usersList.children().length
			});
		}

		requestPromise.then(function(response) {
			if (response.success) {
				$loader.hide();
				$showMoreButton.show();
				var $users = $(response.html).filter('.mp-user-card');

				if ($users.length !== limit) {
					hasMoreUsers = false;
					$showMoreButton.hide();
				}

				$usersList.append($users);
				$usersList.children().slice(-$users.length).fadeTo(0, 0).fadeTo(250, 1);
			}

			loadRequest = false;
		})
	};

	function paginationSearch() {
		searchQuery = $.trim($usersSearchInput.val());
		if (searchQuery) {
			window.location.href = Membership.helpers.getRouteUrl('members', {search: searchQuery});
			$usersSearchInput.next().addClass('loading').attr('disabled', true);
		}
	}

	if (!paginationIsEnabled) {
		$usersSearchInput.on('input', Membership.helpers.debounce(function() {
			searchQuery = $.trim($usersSearchInput.val());
			hasMoreUsers = true;
			$usersList.empty();
			loadUsers();
		}, 500));
	}

	if (showMoreButtonIsEnabled) {

		if (hasMoreUsers) {
			$showMoreButton.show();
		}

		$showMoreButton.on('click', loadUsers);
	} else if (paginationIsEnabled) {
		$usersSearchInput.on('keyup', function (event) {
			if (event.keyCode == 13) {
				paginationSearch();
			}
		});
		$usersSearchInput.next().on('click', paginationSearch)
	} else {
		$usersList.mpVisibility({
			once: false,
			observeChanges: true,
			offset: $usersList.children(":first").height(),
			onBottomVisible: function() {
				if (hasMoreUsers) {
					loadUsers();
				}
			},
		});
	}

	$('.ui.pagination.menu').on('click', 'a.disabled', function(event) {
		event.preventDefault();
	});


})(jQuery, Membership);