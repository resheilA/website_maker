<style>
body{
    background-color: #f2f2f2; 
}

#store-list img {
    width: 100%;
    height: 170px;
    border: 5px solid #ecf0f1;
    margin-bottom: 7px;
}

#store-list h4.title-store a:hover {
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -ms-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease;
    color: #f1c40f;
}

#store-list h4.title-store a {
    color: #f39c12;
}


.btn.btn-default {
    border-color: #bdc3c7;
    background-color: #bdc3c7;
    border: 1px solid #bdc3c7;
}


.btn.btn-warning {
    border-color: #f1c40f;
    background-color: #f1c40f;
    border: 1px solid #f1c40f;
}

</style>
<div class="container mt-5">

<br>  <h2 class="text-center">Our Products</h2>

<hr>
<?php include("product_sort.php"); ?>
<div class="row bootstrap snippets bootdeys" id="store-list">
   
				<?php 
					$product_count = 0;
					if(!isset($content_products["error"])){
					foreach($content_products as $product){
						
					echo '
										
						<div class="col-md-6 col-xs-12">
							<div class="panel">
								<div class="panel-body p-3">
									<div class="row">
										<div class="col-sm-5">
											<a data-toggle="modal" data-target="#productModal'.$product["pid"].'"><img src="../../graniemart/templates/'.$product['image'].'" class="img-responsive"></a>
										</div>
										<div class="col-sm-7">
											<h4 class="title-store">
												<strong><a data-toggle="modal" data-target="#productModal'.$product["pid"].'">'.$product['product_name'].'</a></strong>
											</h4>
											<hr>
											<p>'.substr_replace($product['details'], "...", 100).'</p>
											<p>												
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>									
					';
					$product_count++;
					}
					}
					else{
						echo "<h3 class='m-5'>Sorry ! There are no products for this type.</h3>";
					}
					?>
	
</div><br><br>
</div><?php include("product_modal.php"); ?>