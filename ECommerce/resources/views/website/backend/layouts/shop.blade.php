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

    <div class="container">
        @include('website.backend.layouts.alert')
    </div>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    @if(isset($nom_cat))
                    <li class="item-link"><span>{{$nom_cat}}</span></li>
                    @endif
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="wrap-shop-control">
                        @if(isset($nom_cat))
                        <h1 class="shop-title">{{$nom_cat}}</h1>
                        @else
                        <h1 class="shop-title">Tous Les Produits</h1>
                        @endif
						<div class="wrap-right">

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" >
									<option value="9" selected="selected">9 par page</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							</div>

						</div>

					</div><!--end wrap shop control-->

					<div class="row">
						<ul class="product-list grid-products equal-container">
                        @if(isset($prod_cat))
                            @foreach ($prod_cat as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="/boutique/detail/{{$product->id}}" title="{{$product->nom_prod}}">
											<figure><img src="{{Storage::disk('local')->url('products/'.$product->photo)}}" alt="{{$product->nom_prod}}"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{$product->nom_prod}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$product->getPriceAttribute($product->prix)}}</span></div>
										<a href="{{route('AddToCart',['id'=>$product->id])}}" class="btn add-to-cart">Ajouter au Panier</a>
									</div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>

                        <div class="wrap-pagination-info">
                            <ul class="page-numbers">
                            {{$prod_cat->links()}}
                            </ul>
                        </div>

				</div><!--end main products area-->
                </br></br></br>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Toutes Les Catégories</h2>
						<div class="widget-content">
							<ul class="list-category">
                                @if(isset($data_cat))
                                @foreach ($data_cat as $cat)
								<li class="category-item has-child-cate">
                                    <a href="/boutique/{{$cat['nom']}}" class="cate-link">{{$cat['nom']}}</a>
                                </li>
                                @endforeach
                                @endif
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')

</body>
</html>
