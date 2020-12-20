<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.head')
<body class="inner-page about-us ">

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
					<li class="item-link"><a class="link">home</a></li>
					<li class="item-link"><span>Merci de nos choisir</span></li>
				</ul>
			</div>
		</div>

		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul>
                        <li  class="category-item has-child-cate">Order ID  : <span>{{$payment_receipt['order_id']}}</span></li>
                        <li  class="category-item has-child-cate">Payer ID  : <span>{{$payment_receipt['paypal_payer_id']}}</span></li>
                        <li  class="category-item has-child-cate">Totale ID : <span>{{$payment_receipt['price']}}$</span></li>
                    </ul>

                    <a href="{{route('boutique')}}" class="btn btn-submit btn-submitx">Continue Shopping</a>
				</div>
			</div>
		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')
	<!--footer area-->
</body>
</html>
