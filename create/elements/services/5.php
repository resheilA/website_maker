<style>

                        
#services {}
#services .services-top {
    padding: 70px 0 50px;
}
#services .services-list {
    padding-top: 50px;
}
.services-list .service-block {
    margin-bottom: 25px;
}
.services-list .service-block .ico {
    font-size: 38px;
    float: left;
}
.services-list .service-block .text-block {
    margin-left: 58px;
}
.services-list .service-block .text-block .name {
    font-size: 20px;
    font-weight: 900;
    margin-bottom: 5px;
}
.services-list .service-block .text-block .info {
    font-size: 16px;
    font-weight: 300;
    margin-bottom: 10px;
}
.services-list .service-block .text-block .text {
    font-size: 12px;
    line-height: normal;
    font-weight: 300;
}
.highlight {
    color: <?php echo $services[0]; ?>;;
    font-weight:bold;
}                    
</style>
<div class="container bootstrap snippets bootdey">
<section id="services" class="current">
    <div class="services-top">
        <div class="container bootstrap snippets bootdey">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-md-12">
                    <h2>What We Offer</h2>
                    <h2 style="font-size: 60px;line-height: 60px;margin-bottom: 20px;font-weight: 900;">Our Services</h2>
                    <p>Our <span class="highlight">experienced</span> and <span class="highlight">dedicated</span> staff provide these services with a smile.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                    <div class="services-list">
                        <div class="row">                            
							<?php 
								
								foreach($content_services as $service){
									echo '
										<div class="col-sm-6 col-md-4 col-md-4">
											<div class="service-block" style="visibility: visible;">
												<div class="ico fa fa-'.$service["icon"].' highlight"></div>
												<div class="text-block">
													<div class="name">'.$service["service_name"].'</div>
													<div class="info">'.$service["service_content"].' </div>
												</div>
											</div>
										</div>';
								}
								?>
								<!---
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-code highlight"></div>
                                    <div class="text-block">
                                        <div class="name">Development/Coding</div>
                                        <div class="info">Quality code that lasts</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-pencil highlight"></div>
                                    <div class="text-block">
                                        <div class="name">Copy Writing</div>
                                        <div class="info">Words that tell your story</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-bullhorn highlight"></div>
                                    <div class="text-block">
                                        <div class="name">SEO/PPCM</div>
                                        <div class="info">Converting users to customers</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-eye highlight"></div>
                                    <div class="text-block">
                                        <div class="name">Branding/Identity</div>
                                        <div class="info">Leave a lasting impression</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-umbrella highlight"></div>
                                    <div class="text-block">
                                        <div class="name">Strategy/Planning</div>
                                        <div class="info">Thinking beyond tomorrow</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                    </div>
                                </div>
                            </div>
						--->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>                    