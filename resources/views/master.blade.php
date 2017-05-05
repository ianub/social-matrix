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
{{-- 	<style type="text/css">
		.navbar-fixed-bottom, .navbar-fixed-top {
		    position: fixed;
		    right: 0 !important; 
		    /*left: 0;  */
		    z-index: 1030;
		}
	</style> --}}

</head>
<body>

	{{-- <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars fa-2x"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{ url('/home') }}"><img src="/images/smlogow.png"></a>
            </div>

            Collect the nav links, forms, and other content for toggling
            <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/home') }}">HOME</a></li>
					<li><a href="{{ url('/team') }}">TEAM</a></li>
					<li><a href="{{ url('/services') }}">SERVICES</a></li>
					<li><a href="{{ url('/prices') }}">PRICES</a></li>
					<li><a href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav> --}}


	<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">

            <ul class="nav sidebar-nav">

                <li><a href="{{ url('/home') }}">HOME</a></li>
                <li><a href="{{ url('/team') }}">TEAM</a></li>
				<li><a href="{{ url('/services') }}">SERVICES</a></li>
				<li><a href="{{ url('/prices') }}">PRICES</a></li>
				<li><a href="{{ url('/contact') }}">CONTACT</a></li>
			</ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        	<div id="page-content-wrapper">

        		<a class="logo" href="{{ url('/home') }}"><img src="/images/smlogow.png" height="70px"></a>

	            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
	                <span class="hamb-top"></span>
	    			<span class="hamb-middle"></span>
					<span class="hamb-bottom"></span>
	            </button>
            </div>




	@yield('content')

	<footer>
		<div class="footer-box container-fluid">
			<div class="text-center">
				<div class="fbox">
					<p>GET IN TOUCH</p>
					<p><small>CONTACT@SOCIALMATRIX.NZ<p>
					<p>2/130 ORIENTAL PARADE, ORIENTAL BAY, <br>WELLINGTON, NEW ZEALAND 6011<br>+64 4 801 9022</small></p>
					<div class="flogreg">
						<i class="fa fa-user-circle fa-1x" aria-hidden="true"></i>
						<a href="{{ url('/login') }}"><small>LOG IN AS ADMIN</small></a>
						<a href="{{ url('/register') }}"><small>REGISTER</small></a>
					</div>
				</div>
				<div class="footer-box2">
					<div class="social-logo">
						<a href="https://www.facebook.com/Socialmatrix.nz/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/socialmatrixnz/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
						<a href="https://twitter.com/socialmatrix0"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
					</div>
					<div class="copyright">
						<small><p>&copy; 2017 SOCIAL MATRIX ALL RIGHTS RESERVED</p></small>
					</div>
				</div>
				
		</div>
	</footer>

	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/script.js"  type="text/javascript"></script>
    
    
    <script type="text/javascript">
	            $(document).ready(function(){
              // Add smooth scrolling to all links
              $(".page-scroll").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
	</script>
    
</body>
</html>