<style>

.social-box .box{
    background: #FFF;
    border-radius: 10px; 
    padding: 40px 10px;
    margin: 20px 0px;
    cursor: pointer;
    transition: all 0.5s ease-out;
	color:black;
}

.social-box .box:hover{
   box-shadow: 0 0 6px #4183D7;
}

.social-box .box .box-text{
    margin:20px 0px;
    font-size: 15px;
    line-height: 30px;
}

.social-box .box .box-btn a{
    text-decoration: none;
    color: #4183D7;
    font-size: 16px;
}

.fa{
     color:#4183D7;
}
</style>
<div class="social-box">
    <div class="container">
     	<div class="row">
			 <?php 
								
								foreach($content_services as $service){
									echo '
				<div class="col-lg-4 col-xs-12  text-center">
					<div class="box">
					    <i class="fa fa-'.$service["icon"].' fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>'.$service["service_name"].'</h3>
						</div>
						<div class="box-text">
							<span>'.$service["service_content"].'</span>
						</div>
					 </div>
				</div>	
					';
										
										
								}
				?>
					<!----			
			    <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Behance</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12  text-center">
					<div class="box">
					    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Twitter</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Facebook</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Pinterest</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
					    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Google</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-github fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Github</h3>
						</div>
						<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
						<div class="box-btn">
						    <a href="#">Learn More</a>
						</div>
					 </div>
				</div>
		--->
		</div>		
    </div>
</div>