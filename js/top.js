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