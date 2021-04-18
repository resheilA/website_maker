<?php
include("functions.php");
$primary_color = "#28334AFF";
$secondary_color = "#F8de44ff";
$font_color =  getContrastColor($primary_color);
include("content_team.php");
include("get_design.php");	
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	  background-image: url('<?php echo $banner[3]; ?>');
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
	include("pages/team/".$domain_design[0]["team_element"].".php"); 
	include_once("elements/footers/".$domain_design[0]["footer_element"].".php");
	?>


</body>