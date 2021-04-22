<?php
session_start();
include("functions.php");
$primary_color = "#28334AFF";
$secondary_color = "#F8de44ff";
$font_color =  getContrastColor($primary_color);

include("getidid.php");

include("get_design.php");	

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (($_POST["vercode"] != $_SESSION["vercode"]) || $_SESSION["vercode"]=='')  {
       echo "<script>alert('Incorrect verification code');</script>" ;
    } 
	else{				
		include("savedata.php");			
	}
	
}	
include_once("captcha.php");
?>
<?php 

$sql = "SELECT * FROM website_domain 
		INNER JOIN website_general ON website_domain.did = website_general.did
		WHERE website_domain.did = '".$did."'
		";

$content_general = singletable_all( $sql );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo ucfirst($content_general[0]["domain_name"]); ?> - Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<?php 
	include_once("elements/navbar/".$domain_design[0]["navbar_element"].".php");
	include_once("pages/contactus/".$domain_design[0]["contact_us_page"].".php");
	include_once("elements/footers/".$domain_design[0]["footer_element"].".php");
?>	
	