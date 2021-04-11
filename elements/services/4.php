<style>

/* Feature Box
---------------------*/
.feature-box-1 {
  padding: 32px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  margin: 15px 0;
  position: relative;
  z-index: 1;
  border-radius: 10px;
  overflow: hidden;
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
  top: 0;
}
.feature-box-1 * {
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
}
.feature-box-1 .icon {
  width: 70px;
  height: 70px;
  line-height: 70px;
  background: #fc5356;
  color: #ffffff;
  text-align: center;
  border-radius: 50%;
  margin-bottom: 22px;
  font-size: 27px;
}
.feature-box-1 .icon i {
  line-height: 70px;
}
.feature-box-1 h5 {
  color: <?php echo $services[3]; ?>;;
  font-weight: 600;
}
.feature-box-1 p {
  margin: 0;
}
.feature-box-1:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: auto;
  right: 0;
  border-radius: 10px;
  width: 0;
  background: <?php echo $services[0]; ?>;;
  z-index: -1;
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
}
.feature-box-1:hover {
  top: -5px;
}
.feature-box-1:hover h5 {
  color: #000000;
}
.feature-box-1:hover p {
  color: rgba(0,0,0, 0.8);
}
.feature-box-1:hover:after {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  left: 0;
  right: auto;
}
.section {
    padding: 100px 0;
    position: relative;
}
.section-title {
    padding-bottom: 45px;
}
.section-title h2 {
    font-weight: 700;
    color: <?php echo $services[3]; ?>;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}


</style>


<section class="section services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h2 style="color: <?php echo $services[3]; ?>">What I Do</h2>
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
				
				foreach($content_services as $service){
					echo '

						<!-- feaure box -->
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box-1">
								<div class="icon">
									<i class="fa fa-'.$service["icon"].'"></i>
								</div>
								<div class="feature-content">
									<h5>'.$service["service_name"].'</h5>
									<p>'.$service["service_content"].'</p>
								</div>
							</div>
						</div>
						<!-- / -->
										
					';
				}
				?>
			
			<!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Unique design</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Different Layout</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Make it Simple</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Responsiveness</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-th"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Testing for Perfection</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box --
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Advanced Options</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
        </div>
    </div>
</section>