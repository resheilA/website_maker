<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');
.bg-dark {
    background-color: #343a40!important;
}
</style>

  
<div class="my-5"></div>

<!-- Contact -->
<section class="container">

    <!--Contact heading-->
    <h2 class="h1 m-0">Contact us</h2>
    <!--Contact description-->
    <p class="pb-4">We would love to hear from you !</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                        <p class="m-0">We'll write rarely, but only the best content.</p>
                    </div>
                </div>
                <div class="card-body p-3">
				<form method="post">
                    <!--Body-->
                    <div class="form-group">
                        <label>Your name</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
							<input type="hidden" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="website_responses|did" value="<?php echo $did;?>">
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Name" name="website_responses|response_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email"  name="website_responses|response_email">
                        </div>
                    </div>                  
                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                            <textarea class="form-control" name="website_responses|response_details" placeholder="Enter your message"></textarea>
                        </div>
                    </div>


 <!--Form with header-->
			<div class="form-group small clearfix">
						<label class="checkbox-inline">Verification Code</label>
						 <?php echo "<img src='data:image/jpeg;base64," . base64_encode( $rawImageBytes ) . "' />" ?>
					</div> 
					<div class="form-group">
            <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
        </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                    </div>

                </div>

            </div>
           
        </div>
        <!--Grid column-->


<?php
										
					  $sql = "SELECT * FROM seller_location
							 INNER JOIN seller_general ON seller_general.uid = seller_location.uid 
							 INNER JOIN seller_business ON seller_general.uid = seller_business.uid 
							 INNER JOIN seller_contact ON seller_general.uid = seller_contact.uid 
							 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
							  WHERE website_domain.did = '".$did."'";
					 $content_location = singletable_all( $sql );		 

					?>
					
					
        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div class="mb-4">
               
            </div>

            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p><?php echo $content_location[0]["address"]; ?></p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p><?php echo $content_location[0]["contact_no"]; ?> </p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p><?php echo $content_location[0]["email"]; ?></p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
<!-- Contact -->

