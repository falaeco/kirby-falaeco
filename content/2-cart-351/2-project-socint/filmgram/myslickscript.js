// JavaScript Document
$('.film').slick({
	dots: false,
	infinite: false,
	slidesToShow: 3,
	slidesToScroll: 1,
	centerMode: true,
	variableWidth: true,
	respondTo: "min",
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				centerPadding: '5%',
				initialSlide: 1,
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		}
	]
});
