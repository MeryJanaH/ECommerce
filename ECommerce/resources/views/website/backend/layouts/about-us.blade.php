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
</br>
	<main id="main" class="main-site">
		<div class="container">
			<!-- <div class="main-content-area"> -->
				<div class="aboutus-info style-center">
					<b class="box-title">Nos Occupations </b>
					<p class="txt-content">
Nous sommes une équipe très passionnée par la ventre de plusieurs catégories de produits, donc nous sommes là pour vous faciliter la vie en mettant à votre disposition tout sorte de produits</p>
				</div>

				<div class="row equal-container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">Nos produits</b>
							<span class="sub-title">produits disponible </span>
							<p class="desc">
Des produits de très bonne qualité, On vous propose des centaines de millions de produits dans plus de 40 grandes catégories différentes, y compris l'électronique grand public, les machines et les vêtements.</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title"> distribution</b>
							<span class="sub-title">un client satisfait</span>
							<p class="desc">Nous appelons nos entrepôts des centres de distribution car dès que vous cliquez sur ‘acheter’, c'est là que se déroule en intégralité le processus de traitement de la commande, de l'arrivée du Produit via nos fournisseurs à l'envoi direct aux clients.</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">Entepreneurs</b>
							<span class="sub-title">créateurs</span>
							<p class="desc">Nos inventions les plus révolutionnaires sont souvent celles qui poussent les autres à libérer leur propre créativité - afin de poursuivre leurs rêves. Voici les histoires des inventeurs, auteurs et entrepreneurs qui voient leur vie transformée grâce à AMWA.</p>
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
							<b class="box-title">Service</b>
							<div class="list-showups">
								<label>
									<span class="check-box"></span>
									<span class='function-name'>Support 7/24</span>
								</label>
								<label>
									<span class="check-box"></span>
									<span class='function-name'>Excellent qualité</span>
								</label>
								<label>
									<span class="check-box"></span>
									<span class='function-name'>Livraison vite</span>
								</label>
								<label>
									<span class="check-box"></span>
									<span class='function-name'>Service client</span>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="our-team-info">
					<h4 class="title-box">Notre Groupe</h4>
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
									<a href="#" title="Younes Khamlichi">
									<figure><img src="{{Storage::disk('local')->url('/youness_pic.jpeg')}}"width="270px",height="300px", alt="youness khamlichi"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">YOUNES KHAMLICHI</b>
									<span class="title">Encadrant</span>
								</div>
                            </div>
                        <pre></pre>
                            <div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="Wissal Aarab">
									<figure><img src="{{Storage::disk('local')->url('/wissal_pic.jpeg')}}" alt="Wissal Aarab"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">WISSAL AARAB</b>
									<span class="title">Créateur</span>
								</div>
                            </div>
                                                        <div class="team-member equal-elem">
					 			<div class="media">
									<a title="Meryem Annouar">
									<figure><img src="{{Storage::disk('local')->url('/mery_pic.jpeg')}}" alt="Meryem ANNOUAR"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">Meryem Annouar</b>
									<span class="title">Créateur</span>
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
