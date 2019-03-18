<div id="payment" class="tab payment-tab inner-tab">
	<div class="tab-header">
		<a href="#shipping" class="tab-link back-link"><img src="/mobile/img/icons/small_arrow.svg" alt=""></a>
		<h4 class="logo"><span class="regular">Mix</span>Pix</h4>
	</div>
	<div class="content-block">
		<section class="order-info">
			<h5 class="marked d-inline-block">Deliver To</h5> 
			<a href="#shipping" class="tab-link edit">Edit</a>
			<h5>Name Surname</h5>
			<h5>str. Bul. Moscovei 15/4</h5>
			<h5>Chisinau, 2060</h5>
			<h5 class="marked mb-0">Moldova</h5>
		</section>

		<div class="payment-method">
			<h5 class="marked">Payment Details</h5>
			<ul class="cards">
				<li class="mastercard"></li>
				<li class="visa"></li>
				<li class="paypal"></li>
			</ul>
			<form action="" class="form">
				<input type="text" placeholder="Name on card">
				<input type="text" inputmode="numeric" id="cardNumber" placeholder="Card Number" maxlength="19">
			
				<div class="back-side">
					<input type="number" class="cvv" id="cvv" placeholder="CVC / CVV">
					<div class="date">
						<label for="mm">Expiration</label>
						<input type="number" id="mm" placeholder="MM">
						<span > / </span>
						<input type="number" id="yy" placeholder="YY">
					</div>
				</div>
			</form>
		</div>

		<table class="w-100 costs">
			<thead>
				<tr><th>Subtotal</th><th>75€</th></tr>
				<tr><th>Shipping Cost</th><th>5€</th></tr>
			</thead>
			<tbody>
				<tr><td>Total</td><td>80€</td></tr>
			</tbody>
		</table>

		<a href="#congrat" id="purchase" class="btn btn-success continue-btn tab-link">Purchase</a>
	</div>
</div>
