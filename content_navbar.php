<?php 

$sql = "SELECT * FROM website_domain 
		INNER JOIN website_general ON website_domain.did = website_general.did
		WHERE website_domain.did = '".$did."'
		";

$content_general = singletable_all( $sql );

$primary_color = $content_general[0]["primary_color_code"];
$secondary_color = $content_general[0]["secondary_color_code"];
$font_color =  getContrastColor($primary_color);



$sql = "SELECT COUNT(*) as gallery_exist FROM website_domain 
		INNER JOIN website_gallery ON website_domain.did = website_gallery.did
		WHERE website_domain.did = '".$did."'
		";

$content_gallerys = singletable_all( $sql );

$sql = "SELECT COUNT(*) as client_exist FROM website_domain 
		INNER JOIN website_clients ON website_domain.did = website_clients.did
		WHERE website_domain.did = '".$did."'
		";
		
$content_clients = singletable_all( $sql );

$sql = "SELECT COUNT(*) as team_exist FROM website_domain 
		INNER JOIN website_team ON website_domain.did = website_team.did
		WHERE website_domain.did = '".$did."'
		";
		
$content_teams = singletable_all( $sql );



$sql = "SELECT COUNT(*) as product_exist FROM seller_product
 INNER JOIN product_color ON seller_product.color = product_color.no 
 INNER JOIN product_application ON seller_product.application_area = product_application.no 
 INNER JOIN product_finishing ON seller_product.finishing = product_finishing.no 
 INNER JOIN product_form ON seller_product.form = product_form.no 
 INNER JOIN product_name ON seller_product.product_name = product_name.no 
 INNER JOIN product_type ON seller_product.type_id = product_type.no 
 INNER JOIN website_domain ON seller_product.uid = website_domain.uid 
 WHERE website_domain.did = '".$did."'";
 $content_productss = singletable_all( $sql );	
	//var_dump($content_products);

$sql = "SELECT COUNT(*) as about_exist FROM seller_business 
 		 INNER JOIN seller_general ON seller_general.uid = seller_business.uid 
		 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
		  WHERE website_domain.did = '".$did."'";
 $content_businesss = singletable_all( $sql );		 


?>