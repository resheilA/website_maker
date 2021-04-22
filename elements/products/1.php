<style>
.card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}
</style>
<div class="container">

<br>  <h2 class="text-center">Our Products</h2>
<hr>




<div class="row">

<?php 
				
				foreach($content_products as $product){
					echo '			
							<div class="col-md-4">
								<figure class="card card-product text-dark">
									<div class="img-wrap"><img src="'.$prefix_image.$product["image"].'"></div>
									<figcaption class="info-wrap">
											<h4 class="title"><b>'.$product["product_name"].'</b></h4>
											<p class="desc">'.$product["details"].'</p>
											<div class="rating-wrap">
												<div class="label-rating">'.$product["type"].'</div>
												<div class="label-rating">'.$product["color"].'</div>
											</div> <!-- rating-wrap.// -->
									</figcaption>
									<div class="bottom-wrap">
										<center><a href="products.php"><button class="btn btn-primary mt-5">View More Products</button></a></center>
									</div> <!-- bottom-wrap.// -->
								</figure>
							</div> <!-- col // -->					
							';
				}
				?>
		
</div> <!-- row.// -->



</div> 
<!--container.//-->

