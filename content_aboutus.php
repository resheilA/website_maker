<?php 
include("getidid.php");

 
 $sql = "SELECT * FROM seller_business 
 		 INNER JOIN seller_general ON seller_general.uid = seller_business.uid 
		 INNER JOIN seller_certification ON seller_general.uid = seller_certification.uid 
		 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
		  WHERE website_domain.did = '".$did."'";
 $content_business = singletable_all( $sql );		 
 

?>