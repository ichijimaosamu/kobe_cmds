$(function(){
	$('.tab__content').hide();
	$('.tab__content:first').show();
	$('.tab__item:first').addClass('-is-active');

	$('.tab__item').click(function() {
		var index = $('.tab__item').index(this);
		$('.tab__content').css('display','none');
		$('.tab__content').eq(index).fadeIn();
		$('.tab__item').removeClass('-is-active');
		$(this).addClass('-is-active');
	});
});