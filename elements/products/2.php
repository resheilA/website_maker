<style>


<!--CSS-->/*text family*/
div{
    font-family:open sans;
}
.block{
    border:1px solid black;
    border-radius: 5px;
    font-size:17px;
}
/* hover on blocks*/
.block:hover{
    background-color:#337ab7;
    color:white;
}
img:hover{
    border:1px solid white;
}
/*background color*/
.block2{
    background-color:#084035;
}
/*texy size and color*/
h4{
    color:white;
}
</style>

<div class="container-fluid">
	<h1 class="text-center">Our Product</h1><hr>
    <div class="row">
        <div class="col-lg-12 col- md-12 col-sm-12">
            <div class="row">
			
			<?php 
				
				foreach($content_products as $product){
					echo '			
					<!--1 card-->
						<div class="col=lg-4 col-md-4 col-sm-12 order-md-1">
							<div class="container block rounded-lg rounded-sm ">
														<!--1st row--->
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<a href=""><img style="max-width: 100%;" src="'.$prefix_image.$product["image"].'" alt="placeholder image" class="img-fluid"/></a>
										 <p><center class="mb-3" style="text-align:justify;">'.$product["details"].'</center></p>
									</div>
								</div>
								<!--2nd row--->
								<div class="row" >
									<div class="col-lg-12 col-md-12 col-sm-12 block1">
										<p><h4 class="mb-3"><i class="fa fa-square"></i> '.$product["product_name"].' </h4></p>
									</div>
								</div>
							</div>
						</div>
							
					';
					
				}
			?>	
                
            </div>
			<center><button class="btn btn-primary mt-5">View More Products</button></center><br>
        </div>
    </div>
</div>

