import $ from "jquery";

$(".marcas__carrousel").slick({
	autoplay: true,
	autoplaySpeed: 2000,
	dots: false,
	infinite: true,
	speed: 500,
	arrows: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
			},
		},
	],
});
