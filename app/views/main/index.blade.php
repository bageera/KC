
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="all things awesome">
	<meta name="author"      content="Kareem Carter">

	<title>Kareem Carter | Design + Illustration + Photography + Awesomeness</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href='css/lightbox.css' type="text/css" media="screen, projection" />
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
	<div class="container">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="#head" class="active">Home</a></li>
				<li><a href="#about">About me</a></li>
				<li><a href="#themes">Portfolio</a></li>
				<li><a href="#contact">Contact Me</a></li>
			</ul>
		</div>
	</div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="head">
	<div class="container">

		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">

				<!-- Site Title, your name, HELLO msg, etc. -->
				<img src="{{ asset('img/main/logo.png') }}" width="20%" height="20%" />
				<h1 class="title">KareemCarter.Net</h1>
				<h2 class="subtitle">Welcome to the land of Awesome!!</h2>

				<!-- Short introductory (optional) -->
				<h3 class="tagline">
					Welcome to Kareem Carter Creations. I am your host, the one the only Kareem Carter.
						<br>
						<br>
						I love to dabble in a little bit of everything from Web and Graphic Design to Videography and Photography to Animation and Drawing.
						<br>
						<br>
						I offer several services including Company Branding, Consulting and Video Editing.
						<br>
						<br>
						Sit back, take a load off and stay a while.
						<br>
						<br>
						<br>
						-Kareem L. Carter
				</h3>

				<!-- Nice place to describe your site in a sentence or two
				<p><a href="/download/" class="btn btn-default btn-lg">Download template now</a></p>-->

			</div> <!-- /col -->
		</div> <!-- /row -->

	</div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
	<div class="container">

		<h2 class="text-center title">About me</h2>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h5><strong>Kareem Carter<br></strong></h5>
				<p>I am a simple man with simple ideas. I love my family, my friends, life and most of all creating something out of nothing. I have been a freelance Graphic/Web Designer since 2002. I try to dabble in as many areas of Multimedia that I can. I am currently in my final year at Devry University for a B.A. in Multimedia Design and Development. I am currently working on various projects the one I love the most is a 3D animation film based on my 3 year old son.</p>
			</div>
		</div>
	</div>
</section>

<!-- Third (Works) section -->
<section class="section" id="themes">

	<h2 class="text-center title">Portfolio</h2>
		<div id="page">
			<div id="images">
						<ul class="gallery">

						    <a href="{{ asset('img/large/1.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/1.jpg') }}" alt="5 Fifths" /></li>
				    </a>
				    <a href="{{ asset('img/large/2.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/2.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/3.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/3.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/4.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/4.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/5.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/5.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/6.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/6.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/7.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/7.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/8.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/8.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/9.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/9.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/10.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/10.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/11.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/11.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/12.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/12.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/13.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/13.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/14.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/14.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/15.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/15.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/16.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/16.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/17.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/17.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/18.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/18.jpg') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/19.png') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/19.png') }}" alt="description" /></li>
				    </a>
				    <a href="{{ asset('img/large/20.jpg') }}" rel="lightbox[gallery]">
				     <li><img src="{{ asset('img/large/20.jpg') }}" alt="description" /></li>
				    </a>

		  </ul>
			</div>
				</div>
		</section>

<!-- Fourth (Contact) section -->
<section class="section" id="contact">
	<div class="container">

		<h2 class="text-center title">Contact Me</h2>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<p class="lead">Have a question? Want to be awesome too?</p>
				<p>Feel free to email me, or add me to Linkedin</p>
				<p><b><a href="mailto:kareemlcarter@gmail.com">KareemLCarter@Gmail.com</a></b><br><br></p>
				<ul class="list-inline list-social">
					<!--<li><a href="https://twitter.com/serggg" class="btn btn-link"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>-->
					<li><a href="https://www.facebook.com/kcartercreations" class="btn btn-link"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
					<li><a href="http://linkedin/in/kareemcarter" class="btn btn-link"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
				</ul>
			</div>
		</div>

	</div>
</section>


<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="{{ asset('js/magister.js') }}"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
</body>
</html>