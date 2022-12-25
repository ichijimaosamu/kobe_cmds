$(function() {
	$(".news__tab__item:first").addClass("-is-active");
	$(".news__tab__item").click(function() {
		$(".news__tab__item").removeClass("-is-active");
		$(this).addClass("-is-active");
	});

	$(".news__tab__item.-notices").click(function() {
		$(".news__item").show();
		$(".news__item:not(.-notices)").hide();
	});

	$(".news__tab__item.-events").click(function() {
		$(".news__item").show();
		$(".news__item:not(.-events)").hide();
	});

	$(".news__tab__item.-all").click(function() {
		$(".news__item").show();
	});
});

$(document).ready(function(){
	$('.program__list').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: false,
			arrows: true, //前後ボタンの表示
			responsive: [{
				breakpoint: 768,  //ブレイクポイントを指定
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
		}]
	});

	$('.topics__list').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: false,
			arrows: true, //前後ボタンの表示
			responsive: [{
				breakpoint: 768,  //ブレイクポイントを指定
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
		}]
	});
});