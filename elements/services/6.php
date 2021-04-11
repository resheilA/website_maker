<style>


.cardss::after {
    display: block;
    position: absolute;
    bottom: -10px;
    left: 20px;
    width: calc(100% - 40px);
    height: 35px;
    background-color: inherit;
    -webkit-box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    content: '';
    z-index: -1;
}
a.cardss {
    text-decoration: none;
}

.cardss {
    position: relative;
    border: 0;
    border-radius: 0;
    background-color: inherit;
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
}
.cardss {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: <?php echo $services[0]; ?>;;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,0.125);
    border-radius: .25rem;
}

.box-shadow {
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
}

.ml-auto, .mx-auto {
    margin-left: auto !important;
}
.mr-auto, .mx-auto {
    margin-right: auto !important;
}
.rounded-circle {
    border-radius: 50% !important;
}
.bg-white {
    background-color: #fff !important;
}

.ml-auto, .mx-auto {
    margin-left: auto !important;
}

.mr-auto, .mx-auto {
    margin-right: auto !important;
}
.d-block {
    display: block !important;
}
img, figure {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

.cardss-text {
    padding-top: 12px;
    color: <?php echo $services[2]; ?>;;
}

.text-sm {
    font-size: 12px !important;
}

.cardss-title {
    margin: 0;
    font-family: "Montserrat",sans-serif;
    font-size: 18px;
    font-weight: 900;
	color:<?php echo $services[2]; ?>;;
}

.pt-1, .py-1 {
    padding-top: .25rem !important;
}

.head-icon{
    margin-top:18px;
    color:<?php echo $services[0]; ?>;
}

</style>
<section class="container pt-3 mb-3">
    <h1 class="h3 block-title text-center mt-5">What we do<small><br>Whatever we do, we do with your end user in mind </small></h2><br>
    <div class="row pt-5">
							<?php 
								
								foreach($content_services as $service){
									echo '
										 <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
											<a class="cardssss" href="#"  style="height:15em !important;">
												<div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-'.$service["icon"].' fa-3x head-icon"></i></div>
												<div class="cardss-body text-center">
													<h3 class="cardss-title pt-1">'.$service["service_name"].'</h3>
													<p class="cardss-text text-sm">'.$service["service_content"].'</p>
												</div>
											</a>
										</div>
										';
								}
								?>
       <!----
        <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
           <a class="cardss" href="#"  style="height:15em !important;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user-circle-o fa-3x head-icon"></i></div>
                <div class="cardss-body text-center">
                    <h3 class="cardss-title pt-1">Web &amp; UI Design</h3>
                    <p class="cardss-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
            <a class="cardss" href="#"  style="height:15em !important;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-icon"></i></div>
                <div class="cardss-body text-center">
                    <h3 class="cardss-title pt-1">Front-End Development</h3>
                    <p class="cardss-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
            <a class="cardss" href="#"  style="height:15em !important;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i></div>
                <div class="cardss-body text-center">
                    <h3 class="cardss-title pt-1">Back-End Development</h3>
                    <p class="cardss-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
            <a class="cardss" href="#"  style="height:15em !important;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div>
                <div class="cardss-body text-center">
                    <h3 class="cardss-title pt-1">Usability Testing</h3>
                    <p class="cardss-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-5 pt-3">
            <a class="cardss" href="#"  style="height:15em !important;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-icon"></i></div>
                <div class="cardss-body text-center">
                    <h3 class="cardss-title pt-1">SEO Optimization</h3>
                    <p class="cardss-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
            </a>
        </div>
		
		-->
	
    </div>
</section>