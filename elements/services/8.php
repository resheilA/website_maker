<section class="pt-5 pb-5">
  <div class="container">
    <div class="row  justify-content-center     align-items-center d-flex  h-100 ">
        <div class="col-12 col-md-12   ">
            <h1 class="   mb-2  "><strong>Build Your Website in Minutes Not Months</strong> </h1>
            <p class="lead   font-weight-bold  mb-5 pb-5 border-bottom border-grey">Sub-heading. Header 100% height with bottom align items</p>
            <div class="row  ">
						<?php 
								
								foreach($content_services as $service){
									echo '
										
										<div class="col-lg-4 mb-5 mb-lg-0">
										<div class="mb-3" style="font-color:inherit;">
											<i class="fa fa-'.$service["icon"].' fa-2x"></i>
										</div>
										<h4 class="h5 mb-4">'.$service["service_name"].'</h4>
										<p>'.$service["service_content"].'</p>
									</div>
										';
										
										
								}
								?>
								
			<!----					
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-3" style="font-color:inherit;">
                        <i class="fa fa-grav fa-2x"></i>
                    </div>
                    <h4 class="h5 mb-4">Creative ideas</h4>
                    <p>Curabitur Achieve virtually any look and layout from within the one template.</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-3" style="font-color:inherit;">
                        <i class="fa fa-connectdevelop fa-2x"></i>
                    </div>
                    <h4 class="h5 mb-4">Excellent features</h4>
                    <p>We strive to figure out ways to help your audience grow through all platforms.</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-3" style="font-color:inherit;">
                        <i class="fa fa-car fa-2x"></i>
                    </div>
                    <h4 class="h5 mb-4">Fully responsive</h4>
                    <p>Find what you need in one template and combine features at will.</p>
                </div>
				
				--->
            </div>
        </div>
    </div>
</div>
</section>