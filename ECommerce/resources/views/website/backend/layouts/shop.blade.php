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

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Digital & Electronics</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="wrap-shop-control">

						<h1 class="shop-title">Digital & Electronics</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" >
									<option value="menu_order" selected="selected">Default sorting</option>
									<option value="popularity">Sort by popularity</option>
									<option value="rating">Sort by average rating</option>
									<option value="date">Sort by newness</option>
									<option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" >
									<option value="12" selected="selected">12 per page</option>
									<option value="16">16 per page</option>
									<option value="18">18 per page</option>
									<option value="21">21 per page</option>
									<option value="24">24 per page</option>
									<option value="30">30 per page</option>
									<option value="32">32 per page</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
								<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
							</div>

						</div>

					</div><!--end wrap shop control-->

					<div class="row">

						<ul class="product-list grid-products equal-container">

							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_20.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_22.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_10.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_01.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_21.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_15.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_17.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_05.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_07.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_02.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_09.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="assets/images/products/digital_06.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>

						</ul>

					</div>

					<div class="wrap-pagination-info">
						<ul class="page-numbers">
							<li><span class="page-number-item current" >1</span></li>
							<li><a class="page-number-item" href="#" >2</a></li>
							<li><a class="page-number-item" href="#" >3</a></li>
							<li><a class="page-number-item next-link" href="#" >Next</a></li>
						</ul>
						<p class="result-count">Showing 1-8 of 12 result</p>
					</div>
				</div><!--end main products area-->
                </br></br></br>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Toutes Catégories</h2>
						<div class="widget-content">
							<ul class="list-category">
                                @foreach ($data_cat as $cat)
								<li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">{{$cat['nom']}}</a>
                                </li>
                                @endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->
                </br></br></br></br></br></br></br></br></br>
					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_17.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_18.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

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
