<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Как накопить</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tenor+Sans" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="поиск">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li class="active"><a href="index.php">Главная</a></li>
							<li><a href="blog.php">Статьи</a></li>
							<li><a href="contact.php">Контакты</a></li>
							<li><a href="policy.php">Политика конфиденциальности</a></li>
							<li><a href="terms.php">Условия и положения</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div id="colorlib-page">
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.php">Моё дело</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<div id="colorlib-featured-flex">
			<div class="one-forth">
				<div class="text-inner">
					<div class="desc">
						<h1>Спасибо за вашу заявку!</h1>
					</div>
				</div>
			</div>
			<div class="three-forth">
				<div class="three-forth">
					<div class="intro-img" style="background-image:url(./images/image00035.jpg);"></div>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-pb-sm"></div>
						<div class="col-md-4 col-pb-sm"></div>
						<div class="col-md-4 col-pb-sm"></div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<span class="block">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<br></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<div class='cookie-banner'>
		<p>
			Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Политикой cookie</a>
		</p>
		<button class='close-cookie'>&times;</button>
	</div>
	<script>
		window.onload = function () {
			$('.close-cookie').click(function () {
				$('.cookie-banner').fadeOut();
			})
		}
	</script>
	<script>
		let elems = document.querySelectorAll('.server-name');
		elems.forEach((elem) => {
			elem.innerHTML = window.location.hostname
		})
	</script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>