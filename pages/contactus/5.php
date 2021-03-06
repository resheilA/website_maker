<style>

.wrapper {
    height: 100vh;
    background: #000;
    background: url("https://i.imgur.com/g63vXfd.jpg");
    background-size: cover;
    width: 100%
}

.overlay {
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8)
}

.contact-us {
    margin-top: 50px;
    margin-bottom: 50px
}

.contact-us h3,
p {
    color: #fff
}

.address {
    margin-top: 14px !important;
    margin-left: 10px
}

.address span {
    color: #7B1FA2
}

.icons {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center
}

.icons i {
    font-size: 20px
}

.forms {
    padding: 20px
}

.inputs input {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee
}

.inputs input:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #7B1FA2;
    box-shadow: none
}

.inputs textarea {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee;
    width: 100%;
    resize: none
}

.inputs textarea:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #7B1FA2;
    box-shadow: none;
    resize: none
}

.form-control {
    padding: .375rem .25rem
}

</style>
<div class="wrapper container">
    <div class="overlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center">
                    <h3>Contact Us</h3>
					<?php
										
					  $sql = "SELECT * FROM seller_location
							 INNER JOIN seller_general ON seller_general.uid = seller_location.uid 
							 INNER JOIN seller_business ON seller_general.uid = seller_business.uid 
							 INNER JOIN seller_contact ON seller_general.uid = seller_contact.uid 
							 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
							  WHERE website_domain.did = '".$did."'";
					 $content_location = singletable_all( $sql );		 

					?>
					<p class="mb-5">We would love to hear from you.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                                <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                    <div class="address text-left"> <span>Address</span>
                                        <p><?php echo $content_location[0]["address"]; ?></p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address text-left"> <span>Phone</span>
                                        <p><?php echo $content_location[0]["contact_no"]; ?></p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                    <div class="address text-left"> <span>Email</span>
                                        <p><?php echo $content_location[0]["email"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center px-1">
                                <div class="forms p-4 py-5 bg-white">
                                    <h5>Send Message</h5>
									<form method="post">
									<input type="hidden" name="website_responses|did" value="<?php echo $did;?>">
                                    <div class="mt-4 inputs"> 
									<input type="text" class="form-control" name="website_responses|response_name" placeholder="Name"> 
									<input type="text" name="website_responses|response_email" class="form-control" placeholder="Email"> 
									<textarea class="form-control" name="website_responses|response_details" placeholder="Type your message"></textarea> 
									
									
									
														  
 <!--Form with header-->
			<div class="form-group small clearfix">
						<label class="checkbox-inline">Verification Code</label>
						  <?php echo "<img src='data:image/jpeg;base64," . base64_encode( $rawImageBytes ) . "' />" ?>
					</div> 
					<div class="form-group">
            <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
        </div>
									
									</div>
                                    <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>