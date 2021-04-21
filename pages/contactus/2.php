<style>
body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;		
	}
	#contactc{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9-cc{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>	
<div class="container contact">
	<div class="row">
		<div class="col-md-3" id="contactc">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9-cc">
		<form method="post">
			<div class="contact-form">
				<div class="form-group">
				<input type="hidden" name="website_responses|did" value="<?php echo $did;?>">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" name="website_responses|response_name" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" name="website_responses|response_email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" name="website_responses|response_details" rows="5" id="comment"></textarea>
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
		
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
