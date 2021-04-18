<?php include("content_navbar.php"); ?>
<!---------- NAVIGATION BAR ------->
<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color:black; color:white">
  <a class="navbar-brand" style="color:;" href=""><?php echo $content_general[0]["name"]; ?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
	  <li class="nav-item">
	  
        <a class="nav-link" style="color:;" href="webpage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:;" href="aboutus.php">About us</a>
      </li>
	  <?php 
	  if($content_productss[0]["product_exist"] > 0 ){
		echo '
      <li class="nav-item">
        <a class="nav-link" style="color:;" href="products.php">Products</a>
      </li>   
			';	  
	  }
	  
	  
	  if($content_teams[0]["team_exist"] > 0 ){
		echo '
	  <li class="nav-item">
        <a class="nav-link" style="color:;" href="team.php">Team</a>
      </li>    	  
	  		';	  
	  }
	  
	  if($content_gallerys[0]["gallery_exist"] > 0 ){
		echo '
	  <li class="nav-item">
        <a class="nav-link" style="color:;" href="gallery.php">Gallery</a>
      </li>    
	  		';	  			
	  }
	  
	  if($content_clients[0]["client_exist"] > 0 ){
		echo '
	  <li class="nav-item">
        <a class="nav-link" style="color:;" href="clientele.php">Clients</a>
      </li>    
	  		';	  			
	  }
	  ?>
	  
	  <li class="nav-item">
        <a class="nav-link" style="color:;" href="contactus.php">Contact us</a>
      </li>
      
    </ul>
  </div>  
</nav>

<!---------- NAVIGATION END -------->