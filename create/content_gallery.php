<?php 
$did = "41DWF242D";
include("getalldata.php");

 
 $sql = "SELECT * FROM website_domain
		 INNER JOIN website_gallery ON website_gallery.did = website_domain.did 		 
		 WHERE website_domain.did = '".$did."'";
 $content_gallery = singletable_all( $sql );		 
 
?>