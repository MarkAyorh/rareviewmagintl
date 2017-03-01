$('#text').html($('.active > .carousel-caption').html());
$('.carousel').on('slid.bs.carousel', function () {
  	$('#text').html($('.active > .carousel-caption').html());
	});