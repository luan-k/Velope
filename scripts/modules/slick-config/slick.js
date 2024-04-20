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
$(".testimonials__carousel").slick({
	autoplay: true,
	autoplaySpeed: 2000,
	dots: false,
	infinite: true,
	speed: 500,
	arrows: true,
	prevArrow: `<button class="arrow-button left-arrow" style="background-image: url('../../wp-content/themes/Wkode-cursos-pec-git/images/carousel-left.svg')"></button>`,
	nextArrow: `<button class="arrow-button right-arrow" style="background-image: url('../../wp-content/themes/Wkode-cursos-pec-git/images/carousel-right.svg')"></button>`,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 800,
			settings: {
				slidesToShow: 1,
			},
		},
	],
});
$(".instrutores-carousel").slick({
	autoplay: false,
	autoplaySpeed: 2000,
	dots: true,
	infinite: true,
	speed: 500,
	arrows: true,
	prevArrow: `<button class="arrow-button left-arrow" style="background-image: url('../../wp-content/themes/Wkode-cursos-pec-git/images/carousel-left.svg')"></button>`,
	nextArrow: `<button class="arrow-button right-arrow" style="background-image: url('../../wp-content/themes/Wkode-cursos-pec-git/images/carousel-right.svg')"></button>`,
	slidesToShow: 1,
	slidesToScroll: 1,
});
