(function($, Membership) {

	var GroupsList = function($tabContainer, listType) {
		this.$el = $tabContainer;
		this.listType = listType;
		this.limit = 10;
		this.offsetId = null;
		this.$loader = $tabContainer.find('.list-loader');
		this.$list = $tabContainer.find('.groups-list');
		this.$notFoundMessage = $tabContainer.find('.no-groups');
		this.$searchInput = $tabContainer.find('.group-search-input input');
		this.fetchGroupsRequest = false;
	};

	GroupsList.prototype.init = function() {
		var self = this;

		this.$groups = this.$list.find('.mp-group-card');
		this.offsetId = this.$groups.last().attr('data-id');
		this.hasMoreGroups = this.$groups.length == this.limit;

		this.$searchInput.on('keyup', Membership.helpers.debounce(function() {
			if (this.value.length > 2 || this.value.length === 0) {
				self.$list.empty();
				self.offsetId = null;
				self.$loader.show();
				self.hasMoreGroups = true;
				self.fetchGroups();
			}
		}, 1000));

		this.$list.mpVisibility({
			once: false,
			observeChanges: true,
			onBottomVisible: function() {
				if (self.hasMoreGroups && !self.fetchGroupsRequest) {
					self.fetchGroups();
				}
			}
		});
	};

	GroupsList.prototype.fetchGroups = function() {

		this.$loader.show();
		this.fetchGroupsRequest = true;
		this.$notFoundMessage.hide();

		var self = this,
			request;

		switch (this.listType) {
			case 'all':
				request = Membership.api.groups.get({
					limit: this.limit,
					offsetId: this.offsetId,
					search: this.$searchInput.val()
				});
				break;
			case 'joined':
			case 'managed':
			case 'invited':
				request = Membership.api.groups.getUserGroups({
					userId: Membership.get('requestedUser.id') || Membership.get('currentUser.id'),
					type: this.listType,
					limit: this.limit,
					offsetId: this.offsetId,
					search: this.$searchInput.val()
				});
				break;
		}

		request.then(function(response) {
			if (response.success) {

				var $groups = $(response.html).filter('.mp-group-card');
				self.offsetId = $groups.last().attr('data-id');
				self.$list.append($groups);

				if (!self.$list.find('.mp-group-card').length) {
					self.$notFoundMessage.show();
				}

				if ($groups.length !== self.limit) {
					self.hasMoreGroups = false;
				}
			}

			self.fetchGroupsRequest = false;
			self.$loader.hide();
		});
	};

	var firstItemInit = true;

	$.each(['all', 'joined', 'managed', 'invited'], function(index, value) {
		var $tabItem = $('.groups-tab-items .item[data-tab="' + value + '"]'),
			$tabContainer = $('.groups-tabs .tab[data-tab="' + value + '"]');

		if ($tabItem.length && $tabContainer.length) {
			var groupsList = new GroupsList($tabContainer, value);
			$tabItem.mpTab({
				ignoreFirstLoad: true,
				onFirstLoad: function() {
					groupsList.init();
				},
				onLoad: function() {
					if ($tabItem.hasClass('need-refresh')) {
						groupsList.$list.empty();
						groupsList.offsetId = null;
						groupsList.$loader.show();
						groupsList.hasMoreGroups = true;
						groupsList.fetchGroups();
						$tabItem.removeClass('need-refresh');
					}
				}
			});

			if (firstItemInit) {
				$tabItem.trigger('click');
				firstItemInit = false;
			}
		}

	});



	$(document).on('click', '.group-action-buttons button', function() {
		var $button = $(this),
			action = $button.attr('data-action'),
			$group = $button.closest('.mp-group-card'),
			$joinedTabItem = $('.groups-tab-items [data-tab="joined"]'),
			$joinedTabLabel = $joinedTabItem.find('.label'),
			$invitedTabItem = $('.groups-tab-items [data-tab="invited"]'),
			$invitedTabLabel = $invitedTabItem.find('.label');

		switch (action) {
			case 'accept-invitation':
				$invitedTabLabel.text(parseInt($invitedTabLabel.text(), 10) - 1);
				$joinedTabLabel.text(parseInt($joinedTabLabel.text(), 10) + 1);
				$joinedTabItem.addClass('need-refresh');
				break;
			case 'decline-invitation':
				$invitedTabLabel.text(parseInt($invitedTabLabel.text(), 10) - 1);
				break;
		}
	});

})(jQuery, Membership);