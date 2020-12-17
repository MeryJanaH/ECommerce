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
				<div class="wrap-address-billing">
					<h3 class="box-title">ADRESSE DE FACTURATION</h3>
                    <form action="/createNewOrder" method="POST" name="frm-billing">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<p class="row-in-form">
							<label for="fname">Nom<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Votre nom" required>
						</p>
						<p class="row-in-form">
							<label for="email">Adresse email:<span>*</span></label>
							<input id="email" type="email" name="email" value="" placeholder="Tapez votre email" required>
						</p>
						<p class="row-in-form">
							<label for="phone">numero de téléphone<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="Format à 10 chiffres" required>
						</p>
						<p class="row-in-form">
							<label for="add">Addresse:</label>
							<input id="add" type="text" name="add" value="" placeholder="Rue et numéro de l'appartement" required>
						</p>
						<p class="row-in-form">
							<label for="country">Pays<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="maroc" required>
						</p>
						<p class="row-in-form">
							<label for="zip-code">Code postal / ZIP:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Votre code postal" required>
						</p>
						<p class="row-in-form">
							<label for="city">Ville <span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="Nom de ville" required>
                        </p>

                     <button class="btn btn-medium" style="color:red;" type="submit" name="submit">Payer Maintenant</button>
					</form>
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
