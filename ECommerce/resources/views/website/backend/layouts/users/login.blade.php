<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
   	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="register.html">S'enregistrer</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="french"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-en"></span>Français<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a class="link-to-home"><img src="{{Storage::disk('local')->url('logo-top-1.png')}}" alt="" mercado></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</header>


	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
								<form name="frm-login">
									<fieldset class="wrap-title">
										<h3 class="form-title">s'identifier à votre compte</h3>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Address Email:</label>
										<input type="text" id="frm-login-uname" name="email" placeholder="Taper votre adress email">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Mot de pass:</label>
										<input type="password" id="frm-login-pass" name="pass" placeholder="************">
									</fieldset>

									<fieldset class="wrap-input">
										<a class="link-function left-position" href="#" title="Forgotten password?">Mot de pass oublié ?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="S'identifier" name="submit">
								</form>
							</div>
						</div>
					</div><!--end main products area-->
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Livraison Gratuite</h4>
								<p class="fc-desc">Pour les Ordres au Dessus de $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Garantie</h4>
								<p class="fc-desc">30 jours => retourne d'argent</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Paiement Sécurisé</h4>
								<p class="fc-desc">Sécurisez votre paiement en ligne</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Support en ligne</h4>
								<p class="fc-desc">Notre support est disponible 7/24</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->
			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
    </footer>


	<!--footer area-->
</body>
</html>
