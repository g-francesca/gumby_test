// HENDLEBAR for Testimonials

(function() {
	var context = [
		{ // array di contenuti
			name: 'Sam',
			id: '1',
			src: 'img/testimonial/1.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, iste, quibusdam, eaque natus dolor beatae libero tempore veritatis sit ex nihil consequatur sed id. Maxime illo quae aliquid animi temporibus!'
		},
		{
			name: 'Jon',
			id: '2',
			src: 'img/testimonial/2.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, itaque earum laborum harum quos fuga! Illo, dolor perspiciatis maiores dolorum molestiae iusto ea error similique exercitationem voluptatum quo ratione rem.'
		},
		{
			name: 'Mark',
			id: '3',
			src: 'img/testimonial/3.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, itaque earum laborum harum quos fuga! Illo, dolor perspiciatis maiores dolorum molestiae iusto ea error similique exercitationem voluptatum quo ratione rem.'
		},
		{
			name: 'Tom',
			id: '4',
			src: 'img/testimonial/4.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, itaque earum laborum harum quos fuga! Illo, dolor perspiciatis maiores dolorum molestiae iusto ea error similique exercitationem voluptatum quo ratione rem.'
		},
		{
			name: 'Samantha',
			id: '5',
			src: 'img/testimonial/5.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, itaque earum laborum harum quos fuga! Illo, dolor perspiciatis maiores dolorum molestiae iusto ea error similique exercitationem voluptatum quo ratione rem.'
		},
		{
			name: 'Greg',
			id: '6',
			src: 'img/testimonial/1.jpg',
			quote: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, itaque earum laborum harum quos fuga! Illo, dolor perspiciatis maiores dolorum molestiae iusto ea error similique exercitationem voluptatum quo ratione rem.'
		}
	],
	source = $('#template').html()
	template = Handlebars.compile(source);
	$('.testimonials').append( template(context) );
})();

// HandPhone

$(document).ready(function() {
	$('#handphone').css('height', '0');//.fadeOut(0);
     setTimeout(function() { 
     	$('#handphone')
        	.animate({height: '507px'}, 500)
        	//.fadeIn(0); 
	 }, 500); 
	});


	