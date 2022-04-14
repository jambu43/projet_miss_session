$(function (){
$('a').click(function () {
with($(this)) {
button('loading');
setTimeout(function () {
button('reset');
}, 4000);
}
})
});
$(function (){
	$('.carousel').carousel({ interval: 2000});

	$('#pause').click(function() {
		$('.carousel').carousel('pause');
	});
	$('#first').click(function() { $('.carousel').carousel(0); });
	$('#previous').click(function() {
		$('.carousel').carousel('prev');
	});
	$('#play').click(function() { $('.carousel').carousel('cycle');
	});
	$('#next').click(function() {
		$('.carousel').carousel('next');
	});
	$('#last').click(function() { $('.carousel').carousel(2); });
	
	$('.carousel').on('slid.bs.carousel', function () {
	var total = $('.item').length;
	var current = $('.item.active').index() + 1;
	$('.label').text(current + ' / '+ total);
	});
});
$(function (){
$('a').tooltip();
});
$(function (){
$("#pop").popover();
});