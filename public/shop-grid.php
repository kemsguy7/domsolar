	
	<!-- Configuration files -->
	<?php require_once("../resources/config.php"); ?>
		<!-- Header -->
		
       <?php include(TEMPLATE_FRONT .  "/header.php"); ?>
      
		<!--/ End Header -->
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="shop_grid.php">Shop Grid</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
							<?php 
								$query = query("SELECT * FROM categories");
								confirm($query);
								while($row = fetch_array($query)) :

								$category.=	'<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list">
										<li><a href="#">Fans</a></li>
										<li><a href="#">Lamps</a></li>
										<li><a href="#">Camera</a></li>
										<li><a href="#">Controller</a></li>
									</ul>
								</div>';

							?>
							echo $ategory
								<!-- Single Widget -->
							
							<?php endwhile; ?>
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
									<div class="single-widget range">
										<h3 class="title">Shop by Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
											</div>
										</div>
										<ul class="check-box-list">
											<li>
												<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox"><strike>N</strike>20 - <strike>N</strike>50<span class="count">(3)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"><strike>N</strike>50 - <strike>N</strike>100<span class="count">(5)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"><strike>N</strike>100 - <strike>N</strike>250<span class="count">(8)</span></label>
											</li>
										</ul>
									</div>
								<div class="single-widget category">
									<h3 class="title">Manufacturers</h3>
									<ul class="categor-list">
										<li><a href="#">Forever</a></li>
										<li><a href="#">giordano</a></li>
										<li><a href="#">abercrombie</a></li>
										<li><a href="#">electt</a></li>
										<li><a href="#">zara</a></li>
									</ul>
								</div>
								<!--/ End Single Widget -->
						</div>
					</div>




					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">

								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>18</option>
												<option>27</option>
												<option>36</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Date Manufactured</option>
											</select>
										</div>
									</div>
								</div>
								<!--/ End Shop Top -->


							</div> <!-- End  div class="row"> -->
						</div> <!--End div class="col-lg-9 col-md-8 col-12" -->


						<div class="row">
							<!-- The line of code below dsplays the products from the database  it is defined in the function.php page-->
							<?php get_products_in_shop_page(); ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
	<!-- Start Shop Newsletter  -->
	<?php include(TEMPLATE_FRONT .  "/newsletter.php"); ?>
	<!-- End Shop Newsletter -->
		
		
		
		
	<!-- Modal -->
    <?php include(TEMPLATE_FRONT .  "/modal.php"); ?>
    <!-- Modal end -->
		
		<!-- Start Footer Area -->
	 <?php include(TEMPLATE_FRONT .  "/footer.php"); ?>
		<!-- /End Footer Area -->
	