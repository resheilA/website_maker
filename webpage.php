<?php
include("functions.php");
include("content.php");
$primary_color = "#28334AFF";
$secondary_color = "#F8de44ff";

$secondary_color =  "#28334AFF";
$primary_color ="#F8de44ff";

$primary_color = "#c70039";
$secondary_color = "#111d5e";

		
$sql = "SELECT * FROM website_design		
		WHERE website_design.did = '".$did."'
		";		
$domain_design = singletable_all( $sql );

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <style>
	body{
	font-family: 'Rubik', sans-serif;
	}
	
	.carousel-item {
	  height: 90vh;
	  min-height: 350px;
	  
	  background: no-repeat center center scroll;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	
	.masthead {
	  height: 90vh;	  
	  background-color: #006699;
	  color : white;
	  background-image: url('<?php if(isset($banner[3])){echo $banner[3];} ?>');
	  box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.6);
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	}
	
  </style>
</head>
<body>



<?php 
include_once("elements/navbar/".$domain_design[0]["navbar_element"].".php");

$services = array($primary_color, $secondary_color, getContrastColor($primary_color), getContrastColor($secondary_color));

$prefix_image_banner = "http://stonemarket.in/website_creator/";
include_once("elements/banners/".$domain_design[0]["banner_element"].".php");


echo '<div class="p-3" style="background-color:'.$secondary_color.';color:'.getContrastColor($secondary_color).'">';
include_once("elements/aboutus/".$domain_design[0]["about_us_element"].".php");
echo '</div>';

echo '<div class="p-3" style="background-color:'.$primary_color.';color:'.getContrastColor($primary_color).'">';
include_once("elements/products/".$domain_design[0]["product_element"].".php");
echo '</div>';

echo '<div class="p-3" style="background-color:'.$secondary_color.';color:'.getContrastColor($secondary_color).'">';
include_once("elements/services/".$domain_design[0]["service_element"].".php");
echo "</div>";

include_once("elements/footers/".$domain_design[0]["footer_element"].".php");
?>