<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.head')
<body class="home-page home-01 ">
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    @include('website.backend.layouts.header')


	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="{{asset('assets/images/main-slider-1-1.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Montres intelligentes pour enfants</h2>
							<span class="subtitle">Achetez tous vos produits Smart en ligne.</span>
							<p class="sale-info">À basse prix <span class="price"></span></p>
							<a href="/boutique" class="btn-link">Achetez maintenant</a>
						</div>
                    </div>

					<div class="item-slide">
						<img src="{{asset('assets/images/main-slider-1-2.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">25% de réduction sur tous nos produits</h2>

							<p class="discount-code">Des prix incroyables</p>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{asset('assets/images/main-slider-1-3.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Grande gamme de <b>Ensembles de meubles exclusifs</b></h2>
							<span class="f-subtitle">Ensembles de meubles exclusifs pour répondre à tous les besoins.</span>
							<a href="/boutique" class="btn-link">Achetez maintenant</a>
						</div>
					</div>
				</div>
			</div>



			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">derniers produits</h3>
				<div class="wrap-top-banner">
					<a class="link-banner banner-effect-2">
						<figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @foreach ($new as $product)
                                        @if($product['cat_id'] == 1)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
                                                <figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt=""></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{$product->getPriceAttribute($product->prix)}}</span></div>
                                            </div>
                                        </div>
                                        @endif
                                     @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
					<figure><img src="{{Storage::disk('local')->url('/fashion-accesories-banner.jpg')}}" width="1170" height="240" alt=""></figure>

					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="#fashion_1a" class="tab-control-item active">Numérique</a>
							<a href="#fashion_1b" class="tab-control-item">Mode</a>
							<a href="#fashion_1c" class="tab-control-item">Meubles</a>
                            <a href="#fashion_1d" class="tab-control-item">Kidtoy</a>
                            <a href="#fashion_1e" class="tab-control-item">Organiques</a>
                            <a href="#fashion_1f" class="tab-control-item">Équipement d'outils</a>
						</div>
						<div class="tab-contents">
							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @foreach ($data as $product)
                                        @if($product['cat_id'] == 1)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
                                                <figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt=""></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">À vendre</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{$product->getPriceAttribute($product->prix)}}</span></div>
                                            </div>
                                        </div>
                                        @endif
                                     @endforeach
								</div>
							</div>
                            @if(isset($data))
							<div class="tab-content-item" id="fashion_1b">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($data as $product)
                                    @if($product['cat_id'] == 2)
                                    <div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
												<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->prix}}</span></div>
										</div>
                                    </div>
                                    @endif
                                    @endforeach
								</div>
							</div>

							<div class="tab-content-item" id="fashion_1c">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @foreach ($data as $product)
                                    @if($product['cat_id'] == 3)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
												<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">À vendre</span>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->prix}}</span></div>
										</div>
                                    </div>
                                    @endif
                                    @endforeach
								</div>
							</div>

							<div class="tab-content-item" id="fashion_1d">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($data as $product)
                                    @if($product['cat_id'] == 4)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
												<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->prix}}</span></div>
										</div>
                                    </div>
                                    @endif
                                    @endforeach
								</div>
                            </div>


							<div class="tab-content-item" id="fashion_1e">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($data as $product)
                                    @if($product['cat_id'] == 5)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
												<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">À vendre</span>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->prix}}</span></div>
										</div>
                                    </div>
                                    @endif
                                    @endforeach
								</div>
                            </div>


							<div class="tab-content-item" id="fashion_1f">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($data as $product)
                                    @if($product['cat_id'] == 6)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="/boutique/detail/{{$product->id}}" title={{$product->nom_prod}}>
												<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">À vendre</span>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->prix}}</span></div>
										</div>
                                    </div>
                                @endif
                                @endforeach
                                @endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')

</body>
</html>
