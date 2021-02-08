		
	<!-- Configuration files -->
	<?php require_once("../resources/config.php"); ?>
		<!-- Header -->
		
       <?php include("header.php"); ?>

    <!-- Cart function.php page has been required already in the config.php file -->
      
		<!--/ End Header -->

<?php
 if(isset($_GET['add'])) { 

    $query = query("SELECT * FROM products WHERE product_id =" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)) { 


      if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) { //if the number of items in the database is not equal to that of the product session, 
        // increase the products

        $_SESSION['product_' . $_GET['add']] +=1;
        redirect("cart.php");  

      } else {
        //if the number of items available has been exxceeded and the user keeps on incrementing, 
        //print an error message telling the user the number of products in the database
        set_message("We only have " . $row['product_quantity'] . " " . $row['product_title'] . " available");
        redirect("cart.php");
      }

    }

  //  $_SESSION['product_' . $_GET['add']] +=1; incrementing the quantity on every click
  }  

  if(isset($_GET['remove'])) { //remove functionality

    $_SESSION['product_' . $_GET['remove']]--; // if the remove button is clicked, remove 1 product at a time on every click
    set_message("Product(s) removed");

    if($_SESSION['product_' . $_GET['remove']] < 1) {

      //if the number of items is less than 1, unset the shopping cart an all
      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      //end of unset shopping cart
      set_message("Shopping Cart is Empty"); //show a message
      redirect("cart.php");
      //exit();
    } else {
      redirect("cart.php");
    }

  }


  if(isset($_GET['delete'])) { //delete functionality
    $_SESSION['product_' . $_GET['delete']] = '0'; //if the delete button is clicked, empty the shopping cart by setting it to 0, unset the subtotal and item_quantity
    //unset the sessions
    unset($_SESSION['item_total']);
	unset($_SESSION['item_quantity']);
	//exit();

    redirect("cart.php");

  }

?>
	<!--/ End Header -->
		
		<!--/ End Header -->
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="cart.php">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- This container displays messages -->
	<div class="container"> 
		<div class="row"> 
			<div class="col-xs-6 col-md-12 col-12"> 
				<p class="bg-warning text-center"> 
					<?php display_message();?>
				</p>
			</div>
		</div>
	</div>		
	<!-- end of display message container -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summary">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						

								<?php cart(); //defined in the functions.php page ?>
								
							
						
					</table> 
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12 ">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
								
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span><strike>N</strike><?php  echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?></span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span><strike>N</strike>20.00</span></li>
										<li class="last">You Pay<span><strike>N</strike>310.00</span></li>
									</ul>
									<div class="button5">
										 <a href="../public/checkout.php"><button type="submit" class="btn">Proceed to Checkout</button> </a>
										<a href="../public/shop-grid.php" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	
	
	<!-- Modal -->
   <?php include(TEMPLATE_FRONT .  "/footer.php"); ?>
    
        <!-- Modal end -->
	
	