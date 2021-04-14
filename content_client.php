<?php 
include("getidid.php");
 
 $sql = "SELECT * FROM website_domain
		 INNER JOIN website_clients ON website_clients.did = website_domain.did 		 
		 WHERE website_domain.did = '".$did."'";
 $content_client = singletable_all( $sql );		 
 
?>