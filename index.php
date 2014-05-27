<?php
	include 'inc_header.php';
?>

	<!--BEGIN SLIDER SECTION-->
	<section id="slider" class="responsive-bg">
		<div class="container">
			<div class="row">
				<header id="main" class="six columns push-one">
				<h1>Notify Theme</h1>
				<p>A great new free psd theme to showcase your new application. </p>
				<div class="fa-wrap fa-effect-5 fa-effect-5d">
					<a href="#" class="fa fa-apple">Apple</a>
					<a href="#" class="fa fa-android">Android</a>
					<a href="#" class="fa fa-windows">Windows</a>
				</div>
				</header>

				<div class="five columns" id="handphone">
					<!-- <div class="slidebg"></div> -->
				</div>

			</div>
		</div>
	</section>

<!--SLIDER SECTION-->

	<section class="container" id="features">
		<div class="row">
			<h2 class="hidden">Features</h2> <!--si consiglia di aggiungere sempre un header per ogni section, è nasconderlo poi con hidden-->
			<article id="feature1" class="four columns alpha">
				<div class="circle"><span class="fa fa-pencil"></span></div>
				<h3>Editable Theme</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suspendisse fringilla fringilla.</p>
			</article>
			<article id="feature2" class="four columns">
				<div class="circle"><span class="fa fa-star"></span></div>
				<h3>Flat Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suspendisse fringilla fringilla.</p>
			</article>
			<article id="feature3" class="four columns">
				<div class="circle"><span class="fa fa-globe"></span></div>
				<h3>Reach Your Audience</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suspendisse fringilla fringilla.</p>
			</article>
		</div>
	</section>


<!--GET NOTIFIED section-->

	<section class="container" id="notified">
		<div class="row">
			<h2 class="hidden">Get Notified</h2>
			<article class="seven columns alpha push-one">
				<h4>Get Notified Of Any Updates!</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, sequi, voluptates, vero incidunt blanditiis odit numquam id nobis illo quidem eum officia quisquam cum suscipit accusamus in optio odio tempore!</p>
				<form action="#" method="post">	
					<input type="email" placeholder="Email Address" name="email">
					<input type="submit" name="submit" id="notify" value="Notify">
				</form>
			</article>
			<div class="vimeo five columns">
				<iframe src="//player.vimeo.com/video/87986583?title=0&amp;badge=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" 
				height="240px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</section>


<!--GET TESTIMONIAL section-->

	<section class="container" id="testimonial">
		<div class="row testimonials">
			<script id="template" type="text/x-handlebars-template">
				<section class="quote">
					{{#each this}}			
					<div class="twelve columns alpha" id="{{id}}">
						<q>{{quote}}</q>
						<h5>{{name}}</h5>
					</div>
					{{/each}}
				</section>
				<section class="avatar">
					{{#each this}}
						<span id="{{id}}"><img src="{{src}}" /></span>
					{{/each}}
				</section>
			</script>

			<div class="twelve columns">
				
			</div>
		</div>
	</section>


<!--CONTACT section-->
<section class="container" id="contact">
	<div class="row">
		<h2 class="hidden">Contacts</h2>
	<article class="twelve columns">
		<h3>Say Hi & Get in Touch</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ratione impedit velit doloribus.</p>
		<div class="fa-wrap fa-effect-5 fa-effect-5d">
					<a href="#" class="fa fa-twitter">Twitter</a>
					<a href="#" class="fa fa-facebook">Facebook</a>
					<a href="#" class="fa fa-pinterest">Pinterest</a>
					<a href="#" class="fa fa-google-plus">Google Plus</a>
					<a href="#" class="fa fa-linkedin">Linkedin</a>
					<a href="#" class="fa fa-youtube">You Tube</a>
				</div>
		<form action="#" method="post">
			
		</form>
	</article>
	</div>

</section>


	<?php
		include 'inc_footer.php';
	?>