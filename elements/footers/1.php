<?php include("navbar_content.php"); ?>
<style>

.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}

</style>
<footer class="section footer-classic context-dark bg-image pt-5" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
				<h1><?php echo $content_location[0]["name"]; ?> </h1>
                <p><?php echo $content_location[0]["about_us"]; ?></p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year"><?php echo date("Y"); ?></span><span> </span><span><?php echo $content_location[0]["name"]; ?></span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd><?php echo $content_location[0]["address"]. "<br> ". $content_location[0]["city"]." - ".$content_location[0]["pincode"]; ?></dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#"><?php echo $content_location[0]["email"]; ?></a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#"><?php echo $content_location[0]["contact_no"]; ?></a> <span>or</span> <?php echo $content_location[0]["other_number"]; ?>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
			  <li>
				<a style="color:;" href="aboutus.php">About us</a>
			  </li>
			  <?php 
			  if($content_productss[0]["product_exist"] > 0 ){
				echo '
			  <li>
				<a style="color:;" href="products.php">Products</a>
			  </li>   
					';	  
			  }
			  
			  
			  if($content_teams[0]["team_exist"] > 0 ){
				echo '
			  <li>
				<a style="color:;" href="team.php">Team</a>
			  </li>    	  
					';	  
			  }
			  
			  if($content_gallerys[0]["gallery_exist"] > 0 ){
				echo '
			  <li>
				<a style="color:;" href="gallery.php">Gallery</a>
			  </li>    
					';	  			
			  }
			  
			  if($content_clients[0]["client_exist"] > 0 ){
				echo '
			  <li>
				<a style="color:;" href="clientele.php">Clients</a>
			  </li>    
					';	  			
			  }
			  ?>
			  
			  <li>
				<a style="color:;" href="contactus.php">Contact us</a>
			  </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="<?php echo $content_location[0]["facebook"]; ?>"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="<?php echo $content_location[0]["instagram"]; ?>"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="<?php echo $content_location[0]["twitter"]; ?>"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>         
        </div>
      </footer>
	  