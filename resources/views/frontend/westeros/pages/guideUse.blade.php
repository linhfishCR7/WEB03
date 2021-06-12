<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('themes/westeros/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/westeros/css/vendor/xmcountdown.css') }}">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>eCommerce | Coming Soon</title>
</head>
<body>
	<!-- COMING SOON HEADER -->
	<div id="coming-soon-header-wrap">
		<section id="coming-soon-header">
			<!-- LOGO -->
			<a href="{{ route('frontend.index') }}">
				<figure class="logo">
					<img src="{{ asset('themes/westeros/images/logo.png')}}" alt="logo">
					<figcaption>eCommerce</figcaption>
				</figure>
			</a>
			<!-- /LOGO -->
		</section>
	</div>
	<!-- /COMING SOON HEADER -->

	<!-- WESTEROS SEPARATOR -->
	<ul class="westeros-separator">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<!-- /WESTEROS SEPARATOR -->

	<!-- COMING SOON -->
	<div id="coming-soon-wrap">
		<section id="coming-soon">
			<div class="coming-soon-msg">
				<h3>eCommerce Custom products</h3>
				<h2>Coming Soon!</h2>
			</div>
			<div id="countdown"></div>
		</section>
	</div>
	<!-- /COMING SOON -->

	<!-- COMING SOON FOOTER -->
	<div id="coming-soon-footer-wrap">
		<section id="coming-soon-footer">
			<!-- SOCIAL LINKS -->
			<ul class="social-links">
				<li class="fb"><a href="#"></a></li>
				<li class="twt"><a href="#"></a></li>
				<li class="gplus"><a href="#"></a></li>
				<li class="db"><a href="#"></a></li>
				<li class="rss"><a href="#"></a></li>
				<li class="vm"><a href="#"></a></li>
				<li class="fk"><a href="#"></a></li>
			</ul>
			<!-- /SOCIAL LINKS -->
			<p><a href="index.html">Westeros Custom Clothing</a> Template <br> <span>|</span> All Rights Reserved 2014</p>
		</section>
	</div>
	<!-- /COMING SOON FOOTER -->

<!-- jQuery -->
<script src="{{ asset('themes/westeros/js/vendor/jquery-1.11.1.min.js') }}"></script>
<!-- Countdown -->
<script src="{{ asset('themes/westeros/js/vendor/jquery.xmcountdown-s.min.js') }}"></script>
<!-- Coming Soon -->
<script src="{{ asset('themes/westeros/js/coming-soon.js') }}"></script>
</body>
</html>