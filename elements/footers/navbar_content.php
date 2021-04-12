<?php 

  $sql = "SELECT * FROM seller_location
 		 INNER JOIN seller_general ON seller_general.uid = seller_location.uid 
		 INNER JOIN seller_business ON seller_general.uid = seller_business.uid 
		 INNER JOIN seller_contact ON seller_general.uid = seller_contact.uid 
		 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
		  WHERE website_domain.did = '".$did."'";
 $content_location = singletable_all( $sql );		 

?>