<div class="modal fade bd-example-modal-lg" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="CheckoutModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			
			<!-- Modal Header - Title and Tabs -->
			<div class="modal-header d-flex justify-content-between align-items-center">
				<h5 class="modal-title">Your Order:</h5>
				<ul class="nav nav-tabs border-0" id="modalTabs" role="tablist">
					<li class="nav-item"><a href="#order" class="nav-link active" data-toggle="tab" role="tab" aria-controls="order" aria-selected="true">Order</a></li>
					<li class="nav-item"><a href="#shipping" class="nav-link" data-toggle="tab" role="tab" aria-controls="shipping" aria-selected="false">Shipping</a></li>
					<li class="nav-item"><a href="#payment" class="nav-link" data-toggle="tab" role="tab" aria-controls="payment" aria-selected="false">Payment</a></li>
				</ul>
			</div>
			
			<!-- Tab Content -->
			<div class="modal-body tab-content">
				<!-- First Tab - Order -->
				<div id="order" class="tab-pane fade show active order" role="tabpanel">
					<div class="products">
						<?php
							$i = 1;
							while($i <= 5){
								echo "
									<div class='product'>
										<figure>
											<img src='desktop/img/pic/icon".$i.".png' alt='Your Picture'>
											<figcaption>
												<p>Tile 20x20cm</p>
												<small>Quantity 1</small>
											</figcaption>
										</figure>

										<a href='#' class='remove-item'><span>&#xd7</span> Remove item</a>
										<p class='price'>15.00€</p>
									</div>";
								$i++;
							}
						?>

					</div>
					
					<div class="order-footer">
						<div>
							<span class="text-success bold pointer" id="addMore">+ add more</span>
							<button class="btn text-muted promo">Promo Code</button>
						</div>
						<table class="ml-auto w-50 costs">
							<thead>
								<tr><th>Subtotal</th><th>0€</th></tr>
								<tr><th>Shipping Cost</th><th>5€</th></tr>
							</thead>
							<tbody>
								<tr><td>Total</td><td>5€</td></tr>
							</tbody>
						</table>
						<button class="btn btn-success text-white bold ml-auto w-50 py-2 continue-btn">Continue</button>
					</div>
				</div>

				<!-- Second Tab - Shipping -->
				<div id="shipping" class="tab-pane fade shipping" role="tabpanel">
					<div class="row no-gutters justify-content-between">
						<div class="col-5">
							<div class="products">
								<?php
									$i = 1;
									while($i <= 5){
										echo "
										<div class='product d-flex align-items-center'>
											<img src='desktop/img/pic/icon".$i.".png' alt=''>
											<div>
												<p>Tile 20x20cm</p>
												<small>Edit</small>
											</div>
										</div>
										";
										$i++;
									}?>
							</div>
						</div>

						<div class="col-6 form-block">
							<p class="title bold mb-2">Shipping Detail</p>
							<p class="text small mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>

							<form action="">
								<div class="form-row">
										<div class="form-group col-6">
											<input type="text" class="form-control form-control-sm" placeholder="First name">
										</div>
										<div class="form-group col-6">
											<input type="text" class="form-control form-control-sm" placeholder="Last name">
										</div>
										
										<div class="form-group col-12">
											<input type="email" class="form-control form-control-sm" placeholder="Email">
										</div>

										<div class="form-group col-12">
											<input type="text" class="form-control form-control-sm" placeholder="State / Region">
										</div>

										<div class="form-group col-6">
											<input type="text" class="form-control form-control-sm" placeholder="Country">
										</div>
										<div class="form-group col-6">
											<input type="text" class="form-control form-control-sm" placeholder="City">
										</div>

										<div class="form-group col-6">
											<input type="text" class="form-control form-control-sm" placeholder="Zip / Postal Code">
										</div>
										<div class="form-group col-6">
											<input type="number" class="form-control form-control-sm" placeholder="Phone">
										</div>

										<div class="form-group col-12">
											<input type="text" class="form-control form-control-sm" placeholder="Address 1">
										</div>

										<div class="form-group col-12">
											<input type="text" class="form-control form-control-sm" placeholder="Address 2">
										</div>
								</div>
							</form>
						</div>

						<div class="col-5 table-wrapper">
							<table class="w-100 costs">
								<thead>
									<tr><th>Subtotal</th><th>0€</th></tr>
									<tr><th>Shipping Cost</th><th>5€</th></tr>
								</thead>
								<tbody>
									<tr><td>Total</td><td>5€</td></tr>
								</tbody>
							</table>
						</div>
						
						<div class="col-6 d-flex">
							<button class="btn btn-success text-white bold mt-auto py-2 w-100 continue-btn">Continue</button>
						</div>
					</div>
				</div>

				<!-- Third Tab - Payment -->
				<div id="payment" class="tab-pane fade payment" role="tabpanel">
					<div class="row no-gutters justify-content-between">
						<div class="col-5">
							<div class="products">
								<?php
									$i = 1;
									while($i <= 5){
										echo "
										<div class='product d-flex align-items-center'>
											<img src='desktop/img/pic/icon".$i.".png' alt=''>
											<div>
												<p>Tile 20x20cm</p>
												<a href='#'><small>Edit</small></a>
											</div>
										</div>
										";
										$i++;
									}?>
							</div>
						</div>
						
						<div class="col-6 form-block">
							<p class="title d-flex justify-content-between align-items-center mb-1">Deliver To <a href="#"><small class="edit">Edit</small></a></p>
							<div class="text">
								<p>Name Surname</p>
								<p>str. Bul. Moscovei 15/4</p>
								<p>Chisinau, 2060</p>
							</div>
							<p class="title">Moldova</p>
							
							<p class="title mt-4">Payment Details</p>
							

							<ul class="nav nav-tabs d-flex justify-content-between">
								<li class="nav-item"><a href="" title="MasterCard"><img src="" alt=""></a></li>
								<li class="nav-item"><a href="" title="Visa"><img src="" alt=""></a></li>
								<li class="nav-item"><a href="" title="PayPal"><img src="" alt=""></a></li>
							</ul>

							<form action="">
								<div class="form-row">
										<div class="form-group col-12">
											<input type="text" class="form-control form-control-sm" placeholder="Name on card">
										</div>
										<div class="form-group col-12">
											<input type="number" class="form-control form-control-sm" placeholder="Card Number">
										</div>

										<div class="form-group col-4">
											<input type="number" class="form-control form-control-sm" placeholder="CVC / CVV">
										</div>

										<div class="form-group col-8 d-flex justify-content-end align-items-center cvv">
											<label for="" class="mb-0 mr-2">Expiration</label>
											<input type="text" class="form-control form-control-sm mx-2" placeholder="MM" maxlength="2">
											<span> / </span>
											<input type="text" class="form-control form-control-sm mx-2" placeholder="YY" maxlength="4">
										</div>

								</div>
							</form>

							<p class="total mt-auto mb-4">Total Price <span>5€</span></p>
							<button class="btn btn-success text-white bold py-2 w-100 continue-btn">Continue</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>