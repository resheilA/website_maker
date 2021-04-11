<style>
                        
body{
    background: #f3f3f3;  
}

.categories ul {
    list-style:none;
    padding:0;
    margin:0;
    margin-bottom:20px;
    text-align:center;
    
}

.categories ul li{
    display:inline-block;
    padding:0;
    line-height:24px;
    background:transparent;
    margin:0;
    margin-left:5px;
    margin-bottom:10px;
}

.categories ul li a{
    display:block;
    font-size:18px;
    font-weight:500;
    padding:10px 20px;
    border-radius:5px;
    border:2px solid transparent;
    -webkit-transition:all .2s ease-out;
    transition:all .2s ease-out;
}

.categories ul li a,
.categories ul li a:active,
.categories ul li a:hover{
    line-height:24px;
    background:#fff;
    color:#4E5961;
    text-decoration:none;
}

.categories ul li a:hover,
.categories ul li.active a{
    color:#fff;
    background:#5cc9df;
}

.projects-container .row{
    -webkit-transition:height .5s ease-out;
    transition:height .5s ease-out;
}

.portfolio-item {
    position:relative;
	margin-bottom:30px;
	-webkit-transform:scale(1);
	transform:scale(1);
	opacity:1;
	-webkit-transition:all .4s ease-out;
	transition:all .4s ease-out;
}

.portfolio-item.filtered {
	-webkit-transform:scale(0.5);
	transform:scale(0.5);
	opacity:0.2;
	cursor:default;
}

.no-opacity .portfolio-item.filtered {
	display:none;
}

.portfolio-item.filtered a{
	cursor:default;
}

.portfolio-item.filtered .enlarge,
.portfolio-item.filtered .link,
.portfolio-item.filtered .overlay-mask,
.portfolio-item.filtered .project-title{
    display:none;
}

.portfolio-thumb {
    display:block;
    position:relative;
    box-shadow:0 2px 5px rgba(0,0,0,0.08);
    overflow:hidden;
}

.scrollimation .portfolio-thumb {
	-webkit-transform:translateY(100px);
	transform:translateY(100px);
	opacity:0;
	-webkit-transition:opacity .4s ease-out, -webkit-transform .4s ease-out;
	transition:opacity .4s ease-out, transform .4s ease-out;
}

.touch .scrollimation .portfolio-thumb,
.scrollimation .portfolio-thumb.in {
	-webkit-transform:translateY(0px);
	transform:translateY(0px);
	opacity:1;
}

.portfolio-thumb .overlay-mask{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#5CC9DF;
    opacity:0;
	filter:alpha(opacity=0);
    z-index:1;
    -webkit-transition:opacity .3s ease-out;
    transition:opacity .3s ease-out;
}


.portfolio-thumb:hover .overlay-mask {
    opacity:0.8;
	filter:alpha(opacity=80);
}

.portfolio-thumb .enlarge,
.portfolio-thumb .link{
    display:inline-block;
    margin:0;
    margin-top:-25px;
    font-size:50px;
    line-height:50px;
    color:#fff;
    opacity:0;
	filter:alpha(opacity=0);
    position:absolute;
    height:50px;
    width:64px;
    top:40%;
    left:50%;
    text-align:center;
    z-index:3;

}

.portfolio-thumb .enlarge{
    margin-left:-84px;
    -webkit-transform:translateX(-200px);
    transform:translateX(-200px);
    -webkit-transition:all .3s ease-out;
    transition:all .3s ease-out;
}

.portfolio-thumb:hover .enlarge{
    -webkit-transform:translateX(0);
    transform:translateX(0);
    opacity:1;
	filter:alpha(opacity=100);
    -webkit-transition:all .3s ease-out .3s;
    transition:all .3s ease-out .3s;
}

.portfolio-thumb .link{
    margin-left:20px;
    -webkit-transform:translateX(200px);
    transform:translateX(200px);
    -webkit-transition:all .3s ease-out;
    transition:all .3s ease-out;
}

.portfolio-thumb:hover .link{
    -webkit-transform:translate(0);
    transform:translate(0);
    opacity:1;
	filter:alpha(opacity=100);
    -webkit-transition:all .3s ease-out .6s;
    transition:all .3s ease-out .6s;
}

.portfolio-thumb .enlarge.centered,
.portfolio-thumb .link.centered{
    margin-left:-32px;
    -webkit-transform:translateY(-200px);
    transform:translateY(-200px);
    -webkit-transition-delay:0s;
    transition-delay:0s;
}

.portfolio-thumb:hover .enlarge.centered,
.portfolio-thumb:hover .link.centered{
    -webkit-transform:translateY(0);
    transform:translateY(0);
    -webkit-transition-delay:0.3s;
    transition-delay:0.3s;
}

.portfolio-thumb .project-title {
    display:block;
    width:100%;
    position:absolute;
    bottom:-100px;
    background:#fff;
    margin:0;
    padding:20px 0;
    font-size:21px;
    font-weight:300;
    color:#777;
    text-align:center;
    z-index:2;
    -webkit-transition:bottom .4s ease-out,color .2s ease-out;
    transition:bottom .4s ease-out,color .2s ease-out;
}

.portfolio-thumb:hover .project-title {
    bottom:0;
    -webkit-transition:bottom .3s ease-out .1s,color .2s ease-out 0s;
    transition:bottom .3s ease-out .1s,color .2s ease-out 0s;
}

.portfolio-thumb .project-title:hover {
    color:#5CC9DF;
}  
</style>
<div class="container bootstrap snippets bootdey"><br><br>
    <h1 class="text-center section-title">Our Products</h1>
    <hr>
	<?php include("product_sort.php"); ?>
    <section id="portfolio" class="gray-bg padding-top-bottom">    
		<div class="container bootstrap snippets bootdey">
			
			
			<!-- ======= Portfolio items ===-->
			<div class="projects-container scrollimation in">
				<div class="row">
					<?php 
					$product_count = 0;
					if(!isset($content_products["error"])){
					foreach($content_products as $product){
						
					echo '
					<article class="col-md-4 col-sm-6 portfolio-item web-design apps psd" data-toggle="modal" data-target="#productModal'.$product["pid"].'">
						<div class="portfolio-thumb in">
							<a class="main-link">
								<img class="img-responsive img-center" src="https://www.stonemarket.in/'.$product['image'].'" style="max-height:20em;" alt="">
								<h2 class="project-title">'.$product['product_name'].'</h2>
								<span class="overlay-mask"></span>
							</a>							
						</div>
					</article>
					';
					$product_count++;
					}
					}
					else{
						echo "<h3 class='m-5'>Sorry ! There are no products for this type.</h3>";
					}
					?>
				</div>
			</div>
		</div>	
	</section>
</div>	
<?php include("product_modal.php"); ?>