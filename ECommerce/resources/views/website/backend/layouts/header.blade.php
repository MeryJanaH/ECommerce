	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
								   <a title="french"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-en"></span>Français<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <a href="{{url('/login/logout')}}">Déconnecter</a>
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

						<div class="wrap-search center-section">

                        </div>
                        
						<div class="wrap-icon right-section">
							<div class="wrap-icon-section minicart">
								<a href="{{route('cart')}}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">Panier</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{route('index')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{route('about-us')}}" class="link-term mercado-item-title">Â propos de Nous</a>
								</li>
								<li class="menu-item">
                                <a href="{{route('boutique')}}" class="link-term mercado-item-title">Boutique</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cart')}}" class="link-term mercado-item-title">Panier</a>
								</li>
								<li class="menu-item">
									<a href="{{route('contact')}}" class="link-term mercado-item-title">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
