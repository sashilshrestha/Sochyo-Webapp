// Add your JS customizations here
// Hamburger Togggler

(function ($) {
	$(".fr-burger").click(function () {
		$("body").toggleClass("menu_shown");
	});

	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 50) {
			$("#header").addClass("header-sticky");
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$("#header").removeClass("header-sticky");
		}
	});

	function resize() {
		if ($(window).width() >= 991) {
		}
	}
	$(window).resize(resize).trigger("resize");

	$(document).ready(function () {
		let item = $(".cartcontents").text();
		if (item !== "0 items") {
			$(".cartcontents").css({
				visibility: "visible",
				"font-size": "0.5rem",
				background: "#ffa000",
			});
		}
	});
})(jQuery);
