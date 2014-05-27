// HandPhone

$(document).ready(function () {

	var container = $('#handphone');
	container.css('marginTop', '507px').fadeOut(0);

	setTimeout(function() {
      container
        	.animate({"marginTop": "0"}, 'slow'})
        	.fadeIn(0);
	}, 1000);

});
