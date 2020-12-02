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
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Contact us</span></li>
				</ul>
			</div>
		</div>

		<div class="container">
			<!-- <div class="main-content-area"> -->
				<div class="aboutus-info style-center">
					<b class="box-title">Nos Occupations </b>
					<p class="txt-content">
nous sommes une équipe très passionnée par la ventre de plusieurs catégories de produits, donc nous sommes là pour vous faciliter la vie en mettant à votre disposition tout sorte de produits</p>
				</div>

				<div class="row equal-container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">10000</b>
							<span class="sub-title">produits disponible </span>
							<p class="desc">
des produits de très bonne qualité, On vous propose des centaines de millions de produits dans plus de 40 grandes catégories différentes, y compris l'électronique grand public, les machines et les vêtements.</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">90%</b>
							<span class="sub-title">Our Customers comeback</span>
							<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">2 million</b>
							<span class="sub-title">User of the site</span>
							<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title">Notre mission?</b>
							<p class="txt-content">
En tant que membre du groupe <b>AMWA </b>, notre mission est de faciliter les affaires partout.</br>
Nous faisons cela en donnant aux fournisseurs les outils nécessaires pour atteindre un public mondial pour leurs produits, et en aidant les acheteurs à trouver des produits et des fournisseurs rapidement et efficacement.
							</div>
						<div class="aboutus-info style-small-left">
							<b class="box-title">Nos Proposition!</b>
							<p class="txt-content">
<b>AMWA</b> vous propose des centaines de millions de produits dans plus de 40 grandes catégories différentes, y compris l'électronique grand public, les machines et les vêtements.

Les acheteurs de ces produits sont situés dans plus de 190 pays et régions et échangent chaque jour des centaines de milliers de messages avec les fournisseurs de la plateforme.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title">N'importe quand,n'importe où</b>
							<p class="txt-content">
En tant que plateforme, nous continuons à développer des services pour aider les entreprises à en faire plus et à découvrir de nouvelles opportunités.</div>

						<div class="aboutus-info style-small-left">
							<b class="box-title">Notre histoire</b>
							<p class="txt-content">
Lancé en 2005, AMWA est la principale plate-forme pour le commerce de gros mondial. Nous servons des millions d'acheteurs et de fournisseurs à travers le monde.</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-info style-small-left">
							<b class="box-title">Cooperate with Us!</b>
							<div class="list-showups">
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
									<span class="check-box"></span>
									<span class='function-name'>Support 24/7</span>
									<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
									<span class="check-box"></span>
									<span class='function-name'>Best Quanlity</span>
									<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
									<span class="check-box"></span>
									<span class='function-name'>Fastest Delivery</span>
									<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
								</label>
								<label>
									<input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
									<span class="check-box"></span>
									<span class='function-name'>Customer Care</span>
									<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="our-team-info">
					<h4 class="title-box">Our teams</h4>
					<div class="our-staff">
						<div
							class="slide-carousel owl-carousel style-nav-1 equal-container"
							data-items="5"
							data-loop="false"
							data-nav="true"
							data-dots="false"
							data-margin="30"
							data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

							<div class="team-member equal-elem">
								<div class="media">
									<a title="Meryem ANNOUAR">
									<figure><img src="{{Storage::disk('local')->url('/mery_pic.jpeg')}}" alt="Meryem ANNOUAR"></figure>
									</a>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="LUCIA">
										<figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">WISSAL AARAB</b>
									<span class="title">Manager</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="NANA">
										<figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">YOUNES KHAMLICHI</b>
									<span class="title">Marketer</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="BRAUM">
										<figure><img src="assets/images/member-braum.jpg" alt="BRAUM"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">LAYLA MALAK</b>
									<span class="title">Member</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="LUCIA">
										<figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">WISSAL AARAB</b>
									<span class="title">Manager</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="NANA">
										<figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">NANA</b>
									<span class="title">Marketer</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

						</div>

					</div>

				</div>
			<!-- </div> -->


		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    @include('website.backend.layouts.footer')

    @include('website.backend.layouts.foot')
	<!--footer area-->
</body>
</html>
