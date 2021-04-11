<style>
.box
{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.19);
    border-radius: 10px;
}
.card
{
    margin-top: 30px;
    transition: 0.5s;
}
.card:hover
{
    border: 1px solid red;
    border-radius: 30px;
}
.card .cardImg
{
    height: 150px;
    width: 90%;
    position: relative;
    top: -15px;
    left: 5%;
}
.card .cardImg img
{
    width: 100%;
    height: 100%;
}

.card .info
{
    text-align: center;
}
.card .info h3
{
    color: rgb(70, 66, 66);
}
.card .info p
{
    color: rgb(41, 201, 49);
}

.ligne
{
    display: flex;
}

</style>    
    <div class="container"><br>
	<div class="text-center"><h1>Our Products</h1></div><hr>
        <div class="row">
		<?php 
				foreach($content_products as $product){
					echo '	
					 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="box card">
							<div class="box cardImg">
								<img src="'.$prefix_image.$product["image"].'" alt="...">
							</div>
							<div class="info">
								<h3>'.$product['product_name'].'</h3>
								<p><span>'.$product['color'].'</span></p>								
							</div>
						</div>
					</div>
						';
				}
		?>					           
        </div>
		
		<center><a href="products.php"><button class="btn btn-primary mt-5">View More Products</button></a></center>
    </div>
<bR><br>