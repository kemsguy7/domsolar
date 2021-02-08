
<?php/* 
global $connection;

                    
                    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
                    confirm($query); 

                      while($row = fetch_array($query)) {

                            //Assigning the sessions in the variables to be used in the payment processing page (pay.php)
                                $_SESSION['display_name'] = $row["product_title"];
                                $_SESSION['item_number'] = $row["product_id"];
                                $_SESSION['quantity'] = $value;
                                $_SESSION['amount'] = $row["product_price"];


                                $sub  = $row['product_price'] * $value; //calculating the subtotal
                                $item_quantity +=$value; // this line inside the code block prevents the session(item_quantity) from incrementing on refresh

                                //Assign the display image function to a variable
                                $product_image = display_image($row['product_image']);
}
          */                     

?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/camp.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/camp.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/camp.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/camp.jpg" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Solar Fan</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3><strike>N</strike>29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Solar Fan perfect for hot weather as convert solar energy to electrical energy It can be white or purple and also green.</p>
                                    </div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="../resources/cart.php?add={$row['product_id']}" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
