(function ($) {
	
	$('header .mobile-menu').click(function () {
		$('header nav').toggleClass('open');
	});
	$('header nav .close').click(function () {
		$('header nav').toggleClass('open');
	});
	$(document).keyup(function (e) {
		if (e.key === "Escape") {
			if ($('header nav').hasClass('open')) {
				$('header nav').toggleClass('open');
			}
		}
	});

	$('nav ul li a').click(function (e) {
		if ($(this).attr('href') == '#') {
			e.preventDefault();
		}
	});
})(jQuery);