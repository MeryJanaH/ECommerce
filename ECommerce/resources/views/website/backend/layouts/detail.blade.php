<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.head')
<body class=" detail page ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
   @include('website.backend.layouts.header')

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							    	<img src="{{Storage::disk('local')->url('products/'.$info_prod[0]['photo'])}}" alt="product" />
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{$info_prod[0]['nom_prod']}}</h2>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                            </div>
                            @inject('Produit','\App\Models\Produit')
                            <div class="wrap-price"><span class="product-price">{{$Produit->getPriceAttribute($info_prod[0]['prix'])}}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Disponibilité: <b>{{$info_prod[0]['quantite']}} prouduit</b></p>
                                <p class="availability">Livraison: <b>${{$info_prod[0]['shipping']}}</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantité:</span>
								<div class="quantity-input">
									<input id="qty" type="text" name="product-quatity" value="1" data-max="{{$info_prod[0]['quantite']}}" pattern="[0-9]*" >
									<button class="btn btn-reduce" id="down"></button>
									<button class="btn btn-increase" id="up"></button>
								</div>
							</div>
							<div class="wrap-butons">
                            <a id="cart" href="{{route('AddToCart',['id'=>$info_prod[0]['id']])}}?qty=1" class="btn add-to-cart">Ajouter au Panier</a>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
                                <p>{{$info_prod[0]['description']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Livraison Gratuite</b>
											<span class="subtitle">Pour les Ordres au Dessus de $599</span>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Offre Special</b>
											<span class="subtitle">Un cadeau!</span>
											<p class="desc">Un cadeau est livré pour vous sur chaque commande</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Retour de l'ordre</b>
											<span class="subtitle">L'important est Votre Satisfaction</span>
											<p class="desc">Retourne dans les 7 jours après le reçus du commande</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->
				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
                        <h3 class="title-box">Produits en relation</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                                @foreach ($rel_prod as $prod)
                                <div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="/boutique/detail/{{$prod->id}}" title="{{$prod->nom_prod}}">
											<figure><img src="{{Storage::disk('local')->url('products/'.$prod->photo)}}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                    </div>
                                 <div class="product-info">
                                     <a class="product-name">${{$prod->nom_prod}}>
                                     <div class="wrap-price"><span class="product-price">***</span></div>
                                 </div>
                                </div>
                                @endforeach
                            </div>
                        </div><!--End wrap-products-->
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')
    <!--footer area-->
    <script>
        //unbind pour qu'on declare pas la fonction plusieurs fois
        $('#up').unbind('click').on('click', function(e){
            //prevent submit
            e.preventDefault();
            setTimeout(function(){
                var qty = $('#qty').val();
                //console.log(qty);
                document.getElementById("cart").href = "{{route('AddToCart',['id'=>$info_prod[0]['id']])}}?qty="+qty;
            },10);
        });
        $('#down').unbind('click').on('click', function(e){
            e.preventDefault();
            setTimeout(function(){
                var qty = $('#qty').val();
                //console.log(qty);
                document.getElementById("cart").href = "{{route('AddToCart',['id'=>$info_prod[0]['id']])}}?qty="+qty;
            },10);
        });
    </script>
</body>
</html>
