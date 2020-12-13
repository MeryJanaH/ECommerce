<!DOCTYPE html>
<html lang="en">
@include('website.backend.layouts.head')
<body class=" checkout page ">

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
					<li class="item-link"><span>Caisse</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
                <div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">MODE DE PAIEMENT</h4>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Virement bancaire direct</span>
								<span class="payment-desc">Mais la majorité a subi une altération sous une forme ou une autre, par de l'humour injecté ou des mots aléatoires qui ne semblent même pas légèrement crédibles</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
								<span class="payment-desc">Il existe de nombreuses variantes de passages du Lorem Ipsum disponibles</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">Vous pouvez payer avec votre carte à crédit</span>
								<span class="payment-desc">si vous n'avez pas de compte paypal</span>
							</label>
                        </div>
                    </br></br></br>
                        <p class="summary-info grand-total"><span>Totale</span> <span class="grand-total-price">${{$pay_info['price']}}</span></p>
                        @if($pay_info['status'] == "on_hold")
                        <p class="summary-info grand-total"><span>Status</span> <span class="grand-total-price">En attendant le paiement</span></p>
                        @else
                        <p class="summary-info grand-total"><span>Status</span> <span class="grand-total-price">Paiement accomplis</span></p>
                        @endif
                        <a href="thankyou.html" class="btn btn-medium">Payer</a>
                </div>
            </br></br></br>
			</div><!--end main content area-->
		</div><!--end container-->
   </div>
	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')
	<!--footer area-->

</body>
</html>

