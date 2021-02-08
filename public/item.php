	
	<!-- Configuration files -->
	<?php require_once("../resources/config.php"); ?>
		<!-- Header -->
		
       <?php include(TEMPLATE_FRONT .  "/header.php"); ?>
      
		<!--/ End Header -->
		 <?php 

        $query = query("SELECT * FROM products WHERE product_id =" . escape_string($_GET['id']) . " " );
        confirm($query); 

        while($row = fetch_array($query)) :

       
         	$id = $row['product_id'];


        

    ?>
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list">
										<li><a href="#">Fans</a></li>
										<li><a href="#">Lamps</a></li>
										<li><a href="#">Camera</a></li>
										<li><a href="#">Controller</a></li>
									</ul>
								</div>
								
						</div>
					</div>




					<div class="col-md-9">
						<div class="row">

							<div class="col-md-7">

								 <img class="img-responsive" src="../resources/<?php echo display_image($row['product_image']);?>" alt="">

   							 </div>
									
							<div class="col-md-5"> 
								<div class="panel panel-default">
								  <div class="panel-heading">
								  	<h4><a href="#"><?php echo $row['product_title']; ?></a> </h4>
								  	<hr>
								  </div>
								  <div class="panel-body">
								  	 <h3><strike>N</strike><?php echo $row['product_price']; ?></h3>
								  	    <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
								         <p> 
							        <!--Short description -->
							         <?php echo $row['short_desc']; ?>
							          
							        </p>
								    </div>
								  </div>
								  <div class="panel-footer"> 
								  	 <div class="add-to-cart">
										<a href="../resources/cart.php?add=<?php echo $row['product_id']; ?>" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
								  </div>
								</div>
								
											        
							     

							      
							</div>
								<!--/ End Shop Top -->
								


							</div> <!-- End  div class="row"> -->
						</div> <!--End div class="col-md-9" -->


						
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	
		<?php endwhile; ?> <!--Ending the while loop -->

	

		
	<!-- Start Shop Newsletter  -->
	<?php include(TEMPLATE_FRONT .  "/newsletter.php"); ?>
	<!-- End Shop Newsletter -->
		
		
		
		
	<!-- Modal -->
    <?php include(TEMPLATE_FRONT .  "/modal.php"); ?>
    <!-- Modal end -->
		
		<!-- Start Footer Area -->
	 <?php include(TEMPLATE_FRONT .  "/footer.php"); ?>
		<!-- /End Footer Area -->
	