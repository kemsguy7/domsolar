  <?php include_once ("../resources/config.php"); ?>
 
 <?php require_once("../resources/cart_func.php"); ?>

  <?php 
   
	      // Values to be sent to paystack

	      //sanitize the form values
	      $sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	      $first_name = $sanitizer['first_name'];
	 	  $last_name = $sanitizer['last_name'];
	 	  $email = $sanitizer['email'];
	 	  $phone = $sanitizer['phone_number'];
	 	  $address = $sanitizer['address1'];  
	 	

	 	  // Make sure fields are all field in
	 	  if(empty('$first_name') || empty('$last_name') || empty('$email') || empty('email') || empty('$address1')){
 		   set_message("All fields are required");
 	} else {
		
		$product_name = '';
		$cart_total = ''; //Declaring an empty variable to be used  later to store the session cart total amount


 		$_SESSION['first_name'] = $first_name;
 		$_SESSION['last_name'] = $last_name;
 		$_SESSION['phone_number'] = $phone;
 		$_SESSION['email'] = $email;
 		$_SESSION['display_title'] = $product_name;
 	    $_SESSION['item_total'] =$cart_total;
 	//	$_SESSION['amount'] = $amount;
 	}

      ?>

 
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Paystack Payment Integration</title>
  	
  </head>
  <body>
  	<div class="container"> 
  		<h2> <?php echo 'Hello,'.$first_name; ?>  

  		<?php echo ($_SESSION['amount']);
  						 ?>
  		
  		<?php echo $cart_total;
  						 ?>		

  		<?php echo $_SESSION['display_name'];
  						 ?>
  		</h2>

  		<form>
  		<script src="https://js.paystack.co/v1/inline.js"> </script>
  		<button type="button" onclick="payWithPaystack()">Pay Now</button>
  	</form>
  	
  	<script>
	  	/*const paymentForm = document.getElementById('paymentForm');
		paymentForm.addEventListener("submit", payWithPaystack, false);*/
		function payWithPaystack() {
	    var api = "pk_test_136189608580fa22ca4a02bc495062a776f16c2b";
	    let handler = PaystackPop.setup({
	    key: api, // Replace with your public key
	    email: "<?php echo $email;  ?>",
	    amount: <?php echo $_SESSION['item_total']; ?>*100,
	    currency: "NGN",
	    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
	    // label: "Optional string that replaces customer email"
	   // item_name: "<?php// echo //'{$row["product_title"]}' ?>",
	    //: "<?php// echo {$row['product_title']} ?>",
	    metadata: {
	    	custom_fields: [
	    		{
	 	  			first_name:"<?php echo '$first_name' ?>", 
	 	  			last_name:"<?php echo '$last_name' ?>", 
	 	  			email:"<?php echo '$email' ?>", 
	 	  			phone_number:"<?php echo '$phone_number' ?>", 
	 	  			address1:"<?php echo '$address1' ?>",
	    			display_name: "<?php echo '$display_name' ?>",
	    			item_number: "<?php echo '$item_number' ?>",
	    			quantity: "<?php echo '$quantity' ?>", 

	    		}
	    	]
	    },
	    onClose: function(){
	      alert('Window closed.');
	    },
	    callback: function(response){
	      const referenced = response.reference;
	      window.location.href='thank_you.php?success='+referenced; //If the payment is succesfull, it redirect to the succes.php page
	    }
	  });
	  handler.openIframe();
	}
	  </script>
  </div>
  </body>
  </html>