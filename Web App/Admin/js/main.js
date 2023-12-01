jQuery.noConflict();

(function ($) {

	"use strict";

	var fullHeight = function () {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function () {
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});

	//button click view change


	$('.list-unstyled.components li a').on('click', function (event) {
		event.preventDefault(); // Prevent default link behavior

		var href = $(this).attr('href');
		var content = $('#content');

		if (href === '#') {
			content.html('<p>Welcome to the Homepage</p>');
		} else if (href === '#add-user') {
			content.html('<p>Add User Data content goes here</p>');
		} else if (href === '#alter-user') {
			content.html('<p>Alter User Data content goes here</p>');
		} else if (href === '#remove-user') {
			content.html('<p>Remove User Data content goes here</p>');
		} else if (href === '#view-user') {
			content.html('<p>View User Data content goes here</p>');
		} else if (href === '#contact') {
			jQuery.ajax({
				url: '../Form/FilledUpForms.php', // Path to your PHP file that retrieves and displays data
				type: 'GET',
				success: function (response) {
					content.html(response); // Load the retrieved data into #content
				},
				error: function (xhr, status, error) {
					console.error(status + ': ' + error);
				}
			});

		}
	});


})(jQuery);
