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
		// console.log(item);
		if (item !== "0") {
			$(".cartcontents").css({
				visibility: "visible",
				"font-size": ".8rem",
				background: "linear-gradient(270deg,#ffa000 10%,#f3cf06 90%)",
				"font-weight": "700",
			});
		}
	});
})(jQuery);
