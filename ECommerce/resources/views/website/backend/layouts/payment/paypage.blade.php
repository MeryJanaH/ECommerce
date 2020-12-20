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
                    </br></br></br>
                            <script
                                src="https://www.paypal.com/sdk/js?client-id=AfGKpUUXTx91JusgwTm0v099gUjXWcWhaGvQukjql8hZxjh4AcKGFW7Pn5Nmkn1VIOL6ZvFw_zRdVKiV"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
                            </script>

                            <div id="paypal-button-container"></div>
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

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: "{{$pay_info['price']}}",
            currency: 'USD'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction complété par ' + details.payer.name.given_name);
        //console.log(data);
        window.location = 'paymentreceipt/'+data.paymentID+'/'+data.payerID;
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

</html>
