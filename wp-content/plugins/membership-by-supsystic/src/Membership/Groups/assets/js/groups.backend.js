(function($, Membership) {
    var rolesField = $('.mp-option-select.roles-to-invite');

    rolesField.hide();

	$('input[name="groups[roles-to-invite-type]"]').on('click', function(event) {
        if ($(this).val() == 'specific_roles') {
            rolesField.show();
        } else {
            rolesField.hide();
        }
	});

	$('.save-settings').on('click', function(event) {
		event.preventDefault();
		Membership.ajax({
			'route': 'groups.saveSettings',
			'settings': $('.mp-options :input').serializeJSON({
				checkboxUncheckedValue: false,
			})
		}, {'method': 'post'})
		.error(function(response) {
			console.error(response.responseJSON.message);
		});
	});
})(jQuery, Membership);