<style>

.features-boxed {
  color:<?php echo $services[2]; ?>;;
  background-color:<?php echo $services[1]; ?>;;
}

.features-boxed p {
  color:<?php echo $services[2]; ?>;;
}

.features-boxed h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:<?php echo $services[3]; ?>;;
}

@media (max-width:767px) {
  .features-boxed h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.features-boxed .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto;
}

.features-boxed .intro p {
  margin-bottom:0;
}

.features-boxed .features {
  padding:20px 0;
}

.features-boxed .item {
  text-align:center;
}

.features-boxed .item .box {
  text-align:center;
  padding:30px;
  background-color:<?php echo $services[0]; ?>;;
  margin-bottom:30px;
}

.features-boxed .item .icon {
  font-size:60px;
  color:<?php echo $services[1]; ?>;;
  margin-top:20px;
  margin-bottom:35px;
}

.features-boxed .item .name {
  font-weight:bold;
  font-size:18px;
  margin-bottom:8px;
  margin-top:0;
  color:inherit;
}

.features-boxed .item .description {
  font-size:15px;
  margin-top:15px;
  margin-bottom:20px;
}

</style>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Features </h2>                
            </div>
            <div class="row justify-content-center features">
			<?php 
								
								foreach($content_services as $service){
									echo '
										<div class="col-sm-6 col-md-5 col-lg-4 item">
											<div class="box"><i class="fa fa-'.$service["icon"].' icon"></i>
												<h3 class="name">'.$service["service_name"].'</h3>
												<p class="description">'.$service["service_content"].'</p></div>
										</div>
										';
										
								}
								?>
				<!----				
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Works everywhere</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Organic </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Fast </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Mobile-first</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div>
                </div>
				--->
            </div>
        </div>
    </div>
