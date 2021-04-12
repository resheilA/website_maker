<?php 
echo '
<!---------- Coursel ------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox" style="height:25em;">';?>
     <?php 
				
	
	if($content_banner["banner_image_1"] != "")	
	{
	echo '	 
	  <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url(\''.$prefix_image_banner.$content_banner["banner_image_1"].'\')">
        <div class="carousel-caption d-md-block">          
          <h3>'.$content_banner["banner_text_1"].'</h3>
        </div>
      </div>';
	}
	
	
	if($content_banner["banner_image_2"] != "")	
	{
	echo'
	  <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(\''.$prefix_image_banner.$content_banner["banner_image_2"].'\')">
        <div class="carousel-caption d-md-block">          
          <h3>'.$content_banner["banner_text_2"].'</h3>
        </div>
      </div>';
	}

	if($content_banner["banner_image_3"] != "")	
	{
	echo'
	    <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(\''.$prefix_image_banner.$content_banner["banner_image_3"].'\')">
        <div class="carousel-caption d-md-block">          
          <h3>'.$content_banner["banner_text_3"].'</h3>
        </div>
      </div>';
	}				

	
	echo ' 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
';

?>