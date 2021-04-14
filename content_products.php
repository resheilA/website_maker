<?php 
include("getidid.php");
if(isset($_GET["type_sort"]) && ($_GET["type_sort"] != null))
{
  $sql = "SELECT * FROM seller_product
 INNER JOIN product_color ON seller_product.color = product_color.no 
 INNER JOIN product_application ON seller_product.application_area = product_application.no 
 INNER JOIN product_finishing ON seller_product.finishing = product_finishing.no 
 INNER JOIN product_form ON seller_product.form = product_form.no 
 INNER JOIN product_name ON seller_product.product_name = product_name.no 
 INNER JOIN product_type ON seller_product.type_id = product_type.no 
 INNER JOIN website_domain ON seller_product.uid = website_domain.uid 
 WHERE website_domain.did = '".$did."' AND product_type.type = '".$_GET["type_sort"]."'
 ";
 $content_products = singletable_all( $sql );	
}
else{
 $sql = "SELECT * FROM seller_product
 INNER JOIN product_color ON seller_product.color = product_color.no 
 INNER JOIN product_application ON seller_product.application_area = product_application.no 
 INNER JOIN product_finishing ON seller_product.finishing = product_finishing.no 
 INNER JOIN product_form ON seller_product.form = product_form.no 
 INNER JOIN product_name ON seller_product.product_name = product_name.no 
 INNER JOIN product_type ON seller_product.type_id = product_type.no 
 INNER JOIN website_domain ON seller_product.uid = website_domain.uid 
 WHERE website_domain.did = '".$did."'";
 $content_products = singletable_all( $sql );
} 
	//var_dump($content_products);

?>