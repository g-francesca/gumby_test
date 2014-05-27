<footer>
	<div class="row">
	<nav id="footer_nav" class="twelve columns">
		<ul>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Download</a></li>
			<li><a href="#">Press</a></li>
			<li><a href="#">Email</a></li>
			<li><a href="#">Support</a></li>
			<li><a href="#">Privacy Policy</a></li>
		</ul>
	</nav>
</div>
</footer>

</div> <!--END WRAPPER-->

<!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.0.beta.6.js"></script>
	<script type="text/javascript" src="js/handlebar.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="js\/1.7.2.jquery.min"><\/script>')</script>

<script>
	$('.mobile_nav').hide();
	
	$( "#hamburger > span" ).click(function() {
		  $( ".mobile_nav" ).slideToggle();
	});

</script>
</body>
</html>