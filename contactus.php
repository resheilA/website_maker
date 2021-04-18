<?php
include("functions.php");
$primary_color = "#28334AFF";
$secondary_color = "#F8de44ff";
$font_color =  getContrastColor($primary_color);

include("getidid.php");

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
</head>
<?php 
	include_once("elements/navbar/".$domain_design[0]["navbar_element"].".php");
	include_once("pages/contactus/".$domain_design[0]["contact_us_page"].".php");
	include_once("elements/footers/".$domain_design[0]["footer_element"].".php");
?>	