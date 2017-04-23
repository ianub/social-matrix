<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<!-- font awesome -->
	<script src="https://use.fontawesome.com/8f9516a9ab.js"></script>

</head>
<body>

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars fa-2x"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="/images/smlogo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/home') }}">HOME</a></li>
					<li><a href="{{ url('/team') }}">TEAM</a></li>
					<li><a href="{{ url('/services') }}">SERVICES</a></li>
					<li><a href="{{ url('/prices') }}">PRICES</a></li>
					<li><a href="{{ url('/contact') }}">CONTACT</a></li>
					<!-- <li><a href="{{ url('/login') }}">LOGIN</a></li>
					<li><a href="{{ url('/register') }}">REGISTER</a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    

	@yield('content')

	<footer>
		<div class="footer-box container-fluid">
			<div class="col-xs-12">
				<div>
					<p>GET IN TOUCH</p>
					<small><p>CONTACT@SOCIALMATRIX.NZ<p>
					<p>2/130 ORIENTAL PARADE, ORIENTAL BAY, <br>WELLINGTON, NEW ZEALAND 6011<br>+64 4 801 9022</p></small>
				</div>
				<div class="footer-box2">
					<div class="social-logo">
						<a href="https://www.facebook.com/Socialmatrix.nz/"><img src="images/facebook.png"></a>
						<a href="https://www.instagram.com/socialmatrixnz/"><img src="images/instagram.png"></a>
						<a href="https://twitter.com/socialmatrix0"><img src="images/twitter.png"></a>
						<a href="https://www.linkedin.com/start/join?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fsocial-matrix&source=gf&trk=login_reg_redirect"><img src="images/linkedin.png"></a>
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
	<script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/script.js"  type="text/javascript"></script>
    <script src="js/socialMatrix-map.js" type="text/javascript"></script>
    
</body>
</html>