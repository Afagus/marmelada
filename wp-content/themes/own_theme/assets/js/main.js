(function ($) {
	$(document).ready(function () {
		if ($(window).width() <= 768) {
			$('.top-section .container').prepend($('.search-wrapper'))
		}
		$('body').append('<div class="overlay"></div>');

		$('.menu-mobile').click(function () {
			$('.side-section ul').slideToggle();
			$('body').toggleClass('has-overlay');
		})
		$('.overlay').click(function () {
			$('.side-section ul').slideUp();
			$('body').removeClass('has-overlay');
		})
	});

	$(window).resize(function () {
		if ($(window).width() <= 768) {
			$('.top-section .container').prepend($('.search-wrapper'))

		} else {
			$('.search-wrapper').insertAfter($('.logo'))
		}
	})
})(jQuery);