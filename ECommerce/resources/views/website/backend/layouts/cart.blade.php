<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.head')
<body class=" shopping-cart page ">
   <!--salut-->
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

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Chariot</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Nom des produits</h3>
					<ul class="products-cart">
                      @foreach ($cartItems->items as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{Storage::disk('local')->url('products/'.$item['data']['photo'])}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a href="/boutique/detail/{{$item['data']['id']}}" class="link-to-product">{{$item['data']['nom_prod']}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">${{$item['data']['prix']}}</p></div>
							<div class="quantity" class="summary">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$item['quantity']}}" data-max="{{$item['data']['quantite']}}" pattern="[0-9]*">
                                    <button class="btn btn-increase" onclick="window.location.href='{{route('AddToCart_up',['id'=>$item['data']['id']])}}'"></button>
                                    <button class="btn btn-reduce" onclick="window.location.href='{{route('AddToCart_down',['id'=>$item['data']['id']])}}'"></button>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">${{$item['totalSinglePrice']}}</p></div>
								<div class="delete">
							    <button  onclick="window.location.href='{{route('deleteItemCart',['id'=>$item['data']['id']])}}'" class="btn btn-delete" title="">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</button>
								</div>
                        </li>
                        @endforeach
					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">RÉCAPITULATIF DE LA COMMANDE</h4>
                        @if($cartItems->totalPrice < 599)
                        <p class="summary-info"><span class="title">Sous total</span><b class="index">${{$cartItems->totalPrice}}</b></p>
                        <p class="summary-info"><span class="title">Livraison</span><b class="index">${{$cartItems->totalShipping}}</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">${{$cartItems->totalPrice + $cartItems->totalShipping}}</b></p>
                        @else
                        <p class="summary-info"><span class="title">Sous total</span><b class="index">${{$cartItems->totalPrice}}</b></p>
                        <p class="summary-info"><span class="title">Livraison</span><b class="index">Free Shipping</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">${{$cartItems->totalPrice}}</b></p>
                        @endif
                    </div>
                    &nbsp
					<div class="checkout-info">
						<a class="btn btn-checkout" href="checkout.html">Caisse</a>
						<a class="link-to-shop" href="boutique/">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
                </div>

            </br></br></br>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')
	<!--footer area-->
</body>
</html>
