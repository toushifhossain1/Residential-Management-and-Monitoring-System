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
		event.preventDefault();

		var href = $(this).attr('href');
		var content = $('#content');

		if (href === '#') {
			jQuery.ajax({
				url: 'html/home.php',
				type: 'Get',
				success: function (response) {
					content.html(response);
				},
				error: function (xhr, status, error) {
					console.error(status + ': ' + error);
				}
			})
		} else if (href === '#add-user') {
			jQuery.ajax({
				url: 'html/AddData.html',
				type: 'GET',
				success: function (response) {
					content.html(response);
				},
				error: function (xhr, status, error) {
					console.error(status + ': ' + error);
				}
			});
		} else if (href === '#alter-user') {
			content.html('<p>Alter User Data content goes here</p>');
		} else if (href === '#remove-user') {
			content.html('<p>Remove User Data content goes ere</p>');
		} else if (href === '#view-user') {
			jQuery.ajax({
				url: 'html/ViewuserData.php',
				type: 'GET',
				success: function (response) {
					content.html(response);
				},
				error: function (xhr, status, error) {
					console.error(status + ': ' + error);
				}
			});
		} else if (href === '#contact') {
			jQuery.ajax({
				url: 'html/Form/FilledUpForms.php',
				type: 'GET',
				success: function (response) {
					content.html(response);
				},
				error: function (xhr, status, error) {
					console.error(status + ': ' + error);
				}
			});

		} else if (href === '#sign-out') {
			window.location.href = '../logIn.html';

		}
	});


})(jQuery);
