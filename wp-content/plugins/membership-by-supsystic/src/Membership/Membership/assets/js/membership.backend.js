(function($, Membership) {

	var maxFileSizeElement = $('#max-file-size-mb input');

	if (maxFileSizeElement.length > 0) {
		var value = parseFloat(maxFileSizeElement.val().replace(/\,/g, '')).toFixed(2),
            maxValue = parseFloat(maxFileSizeElement.attr('max'));

		if (value > maxValue) {
			value = maxValue;
		}

		maxFileSizeElement.val(value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
	}

	maxFileSizeElement.on('change', function(event) {
		event.preventDefault();
		var value = $(this).val().replace(/\,/g, '');

		$(this).val(parseFloat(value).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
	});

	$('.mp-option-select select').on('change', function(event) {
		event.preventDefault();
		$(this).closest('.mp-option')
			.find('input[type="radio"]')
			.attr('checked', false);
	});

	$('.mp-option input[type="radio"]').on('change', function(event) {
		event.preventDefault();
		$(this).closest('.mp-option')
			.find('.mp-option-select select')
			.prop('selectedIndex', 0);
	});

	$('.save-settings').on('click', function(event) {
		event.preventDefault();

        var uploadsMaxFileSize = $('.mp-options :input[name="uploads[max-file-size-mb]"]');

        if (uploadsMaxFileSize.length > 0) {
            $('.mp-options :input[name="uploads[max-file-size]"]').val(uploadsMaxFileSize.val().replace(/\,/g, '') * 1024 * 1024);
        }

        Membership.ajax({
			'route': 'membership.saveSettings',
			'settings': $('.mp-options :input[name!="uploads[max-file-size-mb]"]').serializeJSON({
				checkboxUncheckedValue: false,
			})
		}, {'method': 'post'})
		.error(function(response) {
			console.error(response.responseJSON.message);
		});
	});

	/*$('.uninstall').on('click', function(event) {
		event.preventDefault();
		if (confirm('The Supsystic Membership plugin and all data, associated with it will be removed! Are you sure you want to uninstall plugin?')) {
			Membership.ajax({
				'route': 'membership.uninstall'
			}, {'method': 'post'})
				.error(function(response) {
					console.error(response.responseJSON.message);
				});
		}
	});*/

	// $('.recreate-pages').on('click', function(event) {
	// 	event.preventDefault();
	// 	if (confirm('Are you sure you want to recreate pages? Existing pages will be replaced.')) {
	// 		Membership.ajax({
	// 			'route': 'membership.recreatePages'
	// 		}, {'method': 'post'})
	// 			.error(function(response) {
	// 				console.error(response.responseJSON.message);
	// 			});
	// 	}
	// });

    $('#protect-all-pages').hide();

    $('input[name="security[global-site-access]"]').on('change', function() {
    	if ($(this).is(':checked') && $(this).val() == 'logged-in-users') {
    		$('#protect-all-pages').fadeIn();
		} else {
            $('#protect-all-pages').fadeOut();
    	}
	}).trigger('change');

	var availablePages = [];

	$('.mp-page-option:not(.mp-page-contact-form)').each(function() {
		var $this = $(this),
			$wpPagesSelect = $this.find('.wp-pages-list'),
			$createPageButtonContainer = $this.find('.mp-option-button'),
			$createPageButton = $createPageButtonContainer.find('button');

		$wpPagesSelect.on('change', function() {
			if (this.value === '__none') {
				$createPageButtonContainer.fadeIn();
			} else {
				$createPageButtonContainer.fadeOut();
			}
		}).trigger('change');

		$createPageButton.on('click', function() {
			$wpPagesSelect.attr('disabled', true);
			$createPageButton.attr('disabled', true);
			Membership.ajax({
				route: 'membership.createPage',
				slug: $createPageButton.data('page-slug')
			}, {'method': 'post'}).done(function(response) {
				if (response.success) {

					$('.mp-page-option').find('.wp-pages-list').append(
						$('<option value="' + response.page.id + '">' + response.page.title + '</option>')
					);

					$wpPagesSelect.val(response.page.id);
					$wpPagesSelect.attr('disabled', false);
					$wpPagesSelect.trigger('change');
					$createPageButton.attr('disabled', false);
				}
			})
		})
	});

	$('.save-pages').on('click', function() {
		var $this = $(this),
			$icon = $this.find('i'),
			iconDefaultClass = $icon.attr('class'),
			iconLoadingClass = 'fa fa-circle-o-notch fa-spin',
			pagesData = $('.mp-page-option').find(':input').serializeJSON(),
			pages = [],
			notify = $.sNotify({
				'icon': 'fa fa-circle-o-notch fa-spin fa-lg',
				'content': '<span>Saving ...</span>',
			});

		for (var i in pagesData) {
			if (pagesData[i] !== '__none') {
				if (pages.indexOf(pagesData[i]) === -1) {
					pages.push(pagesData[i]);
				} else {
					notify.update('<span>Error! Page must be different</span>', 'fa fa-exclamation').close(5000);
					return false;
				}
			}
		}
		$this.prop('disabled', true);
		$icon.removeClass(iconDefaultClass).addClass(iconLoadingClass);

		Membership.ajax({
			route: 'membership.savePages',
			pages: pagesData
		}, {'method': 'post'}).done(function(response) {
			// save all settings Changes
			$('[data-save-settings]').trigger('click');

			$this.prop('disabled', false);
			$icon.removeClass(iconLoadingClass).addClass(iconDefaultClass);

			if (response.success) {
				notify.update('<span>Saved</span>', 'fa fa-check').close(4000);
			}
		});

	});

	$('.create-pages').on('click', function() {
		var $this = $(this),
			$icon = $this.find('i'),
			iconDefaultClass = $icon.attr('class'),
			iconLoadingClass = 'fa fa-circle-o-notch fa-spin',
			pages = [],
			notify = $.sNotify({
				'icon': 'fa fa-circle-o-notch fa-spin fa-lg',
				'content': '<span>Creating ...</span>',
			});

		$this.prop('disabled', true);
		$icon.removeClass(iconDefaultClass).addClass(iconLoadingClass);

		Membership.ajax({
			route: 'membership.createUnassignedPages',
		}, {'method': 'post'}).done(function(response) {

			$this.prop('disabled', false);
			$icon.removeClass(iconLoadingClass).addClass(iconDefaultClass);

			if (response.success && response.pages) {
				notify.update('<span>Created</span>', 'fa fa-check').close(4000);
				var options = [];

				for (var page in response.pages) {
					options.push($('<option value="' + response.pages[page].id + '">' + response.pages[page].title + '</option>'));
				}

				$('.mp-page-option').find('.wp-pages-list').append(options);

				for (var page in response.pages) {
					$('.mp-page-option[data-page-slug="' + page + '"]')
						.find('.wp-pages-list')
						.val(response.pages[page].id)
						.trigger('change');
				}

			}
		});

	});



	$(document).on('click', '#admin-email button', function(event) {
		event.preventDefault();

		var $this = $(this),
			notify = $.sNotify({
			'icon': 'fa fa-circle-o-notch fa-spin fa-lg',
			'content': '<span>Sending ...</span>',
		});

		$this.attr('disabled', 'true');

		Membership.ajax({
			'route': 'mail.sendTestMail'
		}, {'method': 'post'})
		.done(function() {
			notify.update('<span>Sended</span>', 'fa fa-check').close(3000);
		})
		.fail(function(response) {
			notify.update('<span>Error ' + response.statusText + '</span>', 'fa fa-exclamation').close(3000);

		})
		.always(function(response) {
			//console.log('sets');
			//console.log(response);
			$this.removeAttr('disabled');
		});

	});

	$('input[name="main[after-registartion-redirect-url]"],' +
		' input[name="main[after-login-action-redirect-url]"],' +
		' input[name="main[after-logout-action-redirect-url]"],' +
		' input[name="main[after-delete-account-action-redirect-url]"]').hide();

	$('input[type="radio"]').on('click', function(event) {

		if (
			$(this).attr('name') == 'main[after-registartion-action]'
			|| $(this).attr('name') == 'main[after-login-action]'
			|| $(this).attr('name') == 'main[after-logout-action]'
			|| $(this).attr('name') == 'main[after-delete-account-action]'
		) {
			var urlField = $(this).closest('.mp-option-controls').next().find('input');

			if ($(this).val() == 'redirect-to-url') {
				urlField.show();
			} else {
				urlField.hide();
			}
		}

		if ($(this).val() == 'true') {
			event.preventDefault();

			var $document = $(document),
				self = $(this),
				page = $(this).closest('.mp-option').attr('id'),
				notify = $.sNotify({
					'icon': 'fa fa-circle-o-notch fa-spin fa-lg',
					'content': '<span>Checking page ...</span>',
				});

				Membership.ajax({
					'route': 'membership.savePages',
					'page': page
				}, {'method': 'post'})
					.done(function(response) {
						if (response.pageExists == 'false') {
							if (confirm('For the using this option it is need to create page "'+ page +'"')) {
								notify.update('<span>Creating page ...</span>', 'fa fa-check').close(3000);
								$document.attr('disabled', 'true');

								Membership.ajax({
									'route': 'membership.createPage',
									'page': page
								}, {'method': 'post'})
									.done(function() {
										notify.update('<span>The page was successfully created.</span>', 'fa fa-check').close(3000);
									})
									.fail(function() {
										notify.update('<span>Page creating error.</span>', 'fa fa-exclamation').close(3000);

									})
									.always(function(response) {
										//console.log('sets');
										//console.log(response);
										$document.removeAttr('disabled');
									});
							}
						} else {
							notify.update('<span>The page "'+ page +'" is enabled.</span>', 'fa fa-check').close(3000);
						}

						self.attr('checked', 'checked');
					})
					.fail(function() {
						notify.update('<span>Page check error.</span>', 'fa fa-exclamation').close(3000);

					})
					.always(function(response) {
						//console.log('sets');
						//console.log(response);
						$document.removeAttr('disabled');
					});
		}

	});


	$('.import-buddy-press-data').on('click', function() {
		var $button = $(this),
			notify = $.sNotify({
				icon: 'fa fa-circle-o-notch fa-spin fa-lg',
				content: '<span>Importing data this may take a while...</span>',
			});

		$button.attr('disabled', true);

		Membership.ajax({
			fields: $('#bp-fields').is(':checked'),
			groups: $('#bp-groups').is(':checked'),
			activity: $('#bp-activity').is(':checked'),
			friends: $('#bp-friends').is(':checked'),
			route: 'membership.importBuddyPressData'
		}, {method: 'POST'}).then(function(response) {
			if (response.success) {
				notify.update('<span>Buddy Press data successfully imported.</span>', 'fa fa-check').close(3000);
			} else {
				notify.update('<span>Import error.</span>', 'fa fa-exclamation').close(3000);
			}

			$button.removeAttr('disabled');
		})
	});

	$('.import-ultimate-member-data').on('click', function() {
		var $button = $(this),
			notify = $.sNotify({
				icon: 'fa fa-circle-o-notch fa-spin fa-lg',
				content: '<span>Importing data this may take a while...</span>',
			});

		$button.attr('disabled', true);

		Membership.ajax({
			fields: $('#um-fields').is(':checked'),
			route: 'membership.importUltimateMemberData'
		}, {method: 'POST'}).then(function(response) {
			if (response.success) {
				notify.update('<span>Ultimate member data successfully imported.</span>', 'fa fa-check').close(3000);
			} else {
				notify.update('<span>Import error.</span>', 'fa fa-exclamation').close(3000);
			}

			$button.removeAttr('disabled');
		})
	})

}(jQuery, Membership));