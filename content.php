<?php 
include("getidid.php");


		
echo $sql = "SELECT * FROM website_domain 
		INNER JOIN website_clients ON website_domain.did = website_clients.did
		WHERE website_domain.did = '".$did."'
		";
		
$content_domain = singletable_all( $sql );
		
$sql = "SELECT * FROM website_domain 
		INNER JOIN website_gallery ON website_domain.did = website_gallery.did
		WHERE website_domain.did = '".$did."'
		";

$content_gallery = singletable_all( $sql );
		
$sql = "SELECT * FROM website_domain 
		INNER JOIN website_services ON website_domain.did = website_services.did
		INNER JOIN website_service_content ON website_service_content.no = website_services.service_id		
		WHERE website_domain.did = '".$did."'
		";
		
$content_services = singletable_all( $sql );


 $sql = "SELECT * FROM seller_product
 INNER JOIN product_color ON seller_product.color = product_color.no 
 INNER JOIN product_application ON seller_product.application_area = product_application.no 
 INNER JOIN product_finishing ON seller_product.finishing = product_finishing.no 
 INNER JOIN product_form ON seller_product.form = product_form.no 
 INNER JOIN product_name ON seller_product.product_name = product_name.no 
 INNER JOIN product_type ON seller_product.type_id = product_type.no 
 INNER JOIN website_domain ON seller_product.uid = website_domain.uid 
 WHERE website_domain.did = '".$did."' LIMIT 3";
 $content_products = singletable_all( $sql );	
//	var_dump($content_products);

 $sql = "SELECT * FROM seller_business 
 		 INNER JOIN seller_general ON seller_general.uid = seller_business.uid 
		 INNER JOIN website_domain ON seller_general.uid = website_domain.uid 
		  WHERE website_domain.did = '".$did."'";
 $content_business = singletable_all( $sql );		 


		
$sql = "SELECT * FROM website_domain 
		INNER JOIN website_banner ON website_domain.did = website_banner.did		
		WHERE website_domain.did = '".$did."'
		";
		
$content_banner = singletable_all( $sql );
 $content_banner = $content_banner[0];
 $prefix_image = "http://stonemarket.in/";
?>