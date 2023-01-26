$(document).ready(function(){
	$('.program__list').slick({
		infinite: false,
		arrows: true, //前後ボタンの表示
		slidesToScroll: 1,
		slidesToShow: 2,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					infinite: true,
					slidesToShow: 1,
					arrows: true,
					dots: true
				},
			},
		],
	});

	$('.topics__list').slick({
		infinite: false,
		arrows: true, //前後ボタンの表示
		slidesToScroll: 1,
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					infinite: true,
					slidesToShow: 1,
					arrows: true,
					dots: true
				},
			},
		],
	});
});