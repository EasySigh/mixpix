<div id="order" class="tab order-tab inner-tab unscrollable-tab">
	<div class="tab-header">
		<a href="#main-tab" class="tab-link back-link"><img src="/mobile/img/icons/small_arrow.svg" alt=""></a>
		<h4 class="logo"><span class="regular">Mix</span>Pix</h4>
	</div>
	<div class="content-block">
		<div class="products">
			<?php
			$i = 1;
			while($i <= 8){
				echo "
					<div class='product'>
						<figure>
							<img src='desktop/img/pic/icon".$i.".png' alt='Your Picture'>
							<figcaption>
								<p class='bold'>Tile 20x20cm</p>
								<a href='' class='remove-item x-small text-muted'><span>&#xd7</span> Remove item</a>
							</figcaption>
						</figure>

						<h5 class='price'>15.00€</h5>
					</div>";
				$i++;
			}
		?>			
	</div>
	<table class="w-100 costs mt-auto">
		<thead>
			<tr><th>Subtotal</th><th>75€</th></tr>
			<tr><th>Shipping Cost</th><th>5€</th></tr>
		</thead>
		<tbody>
			<tr><td>Total</td><td>80€</td></tr>
		</tbody>
	</table>

	<a href="#shipping" class="btn btn-success continue-btn tab-link">Continue</a>
	</div>
</div>
