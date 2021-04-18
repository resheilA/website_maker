<?php 

$sql = "SELECT * FROM website_design		
		WHERE website_design.did = '".$did."'
		";		
$domain_design = singletable_all( $sql );


?>