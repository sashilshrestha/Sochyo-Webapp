// Add your JS customizations here
// Hamburger Togggler

(function ($) {
	$(".fr-burger").click(function () {
		$("body").toggleClass("menu_shown");
	});

	function resize() {
		if ($(window).width() >= 991) {
			$(window).on("scroll", function () {
				if ($(window).scrollTop() > 50) {
					$("#header").addClass("header-sticky");
				} else {
					//remove the background property so it comes transparent again (defined in your css)
					$("#header").removeClass("header-sticky");
				}
			});
		}
	}
	$(window).resize(resize).trigger("resize");
})(jQuery);
