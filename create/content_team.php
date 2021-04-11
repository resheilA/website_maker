<?php 
$did = "41DWF242D";
include("getalldata.php");

 
 $sql = "SELECT * FROM website_domain
		 INNER JOIN website_team ON website_team.did = website_domain.did 		 
		 WHERE website_domain.did = '".$did."'";
 $content_team = singletable_all( $sql );		 
 
?>