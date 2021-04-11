    <style>
	.features-clean {
  color:<?php echo $services[2]; ?>;
  background-color:inherit;
  padding-bottom:30px;
}

@media (max-width:767px) {
  .features-clean {
    padding-bottom:10px;
  }
}

.features-clean p {
  color:<?php echo $services[2]; ?>;
}

.features-clean h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .features-clean h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.features-clean .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto 60px;
}

@media (max-width:767px) {
  .features-clean .intro {
    margin-bottom:40px;
  }
}

.features-clean .item {
  min-height:100px;
  padding-left:80px;
  margin-bottom:40px;
}

@media (max-width:767px) {
  .features-clean .item {
    min-height:0;
  }
}

.features-clean .item .name {
  font-size:20px;
  font-weight:bold;
  margin-top:0;
  margin-bottom:20px;
  color:inherit;
}

.features-clean .item .description {
  font-size:15px;
  margin-bottom:0;
}

.features-clean .item .icon {
  font-size:40px;
  color:<?php echo $services[2]; ?>;
  float:left;
  margin-left:-65px;
}


	</style>
	<div class="features-clean">
        <div class="container" style="color:white;">
            <div class="intro" style="color:white;"> 
                <h2 class="text-center">Features</h2>
                <p class="text-center" style="color:white;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row features" style="color:white;">
			<?php 
				
				foreach($content_services as $service){
					echo '
					 <div class="col-sm-6 col-lg-4 item"><i class="fa fa-'.$service["icon"].' icon" style="color:white;"></i>
						<h3 class="name">'.$service["service_name"].'</h3>
						<p class="description" style="color:white;">'.$service["service_content"].'</p>
					</div>					
					';
				}
				?>
               
			   <!---
			   
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
				
				--->
            </div>
        </div>
    </div>