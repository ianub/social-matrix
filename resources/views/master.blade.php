<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<!-- font awesome -->
	<script src="https://use.fontawesome.com/8f9516a9ab.js"></script>

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<a class="navbar-brand" href="#"><img src="/images/smlogo.png"></a>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ url('/home') }}">HOME</a></li>
			<li><a href="{{ url('/team') }}">TEAM</a></li>
			<li><a href="{{ url('/services') }}">SERVICES</a></li>
			<li><a href="{{ url('/prices') }}">PRICES</a></li>
			<li><a href="{{ url('/login') }}">LOGIN</a></li>
			<li><a href="{{ url('/register') }}">REGISTER</a></li>
		</ul>
	</nav>

	@yield('content')

	<footer>
		<div class="footer-box">
			<div>
				<p><strong>GET IN TOUCH</strong></p>
				<small><p>CONTACT@SOCIALMATRIX.NZ<p>
				<p>2/130 ORIENTAL PARADE, ORIENTAL BAY, <br>WELLINGTON, NEW ZEALAND 6011<br>+64 4 801 9022</p></small>
			</div>
			<div class="footer-box2">
				<div class="social-logo">
					<a href=""><img src="images/facebook.png"></a>
					<a href=""><img src="images/instagram.png"></a>
					<a href=""><img src="images/tumblr.png"></a>
					<a href=""><img src="images/youtube.png"></a>
				</div>
				<div class="copyright">
					<small><p>&copy; 2017 SOCIAL MATRIX ALL RIGHTS RESERVED</p></small>
				</div>
			</div>
		</div>
	</footer>

	<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAPk2cb6nhsAbWyEOi7hnHBjxDmDZflFs&callback=initMap">
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"  type="text/javascript"></script>
    <script src="js/socialMatrix-map.js" type="text/javascript"></script>
</body>
</html>