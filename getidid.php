<?php 

function get_domain($url)
{
  $pieces = parse_url($url);
  $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
    return $regs['domain'];
  }
  return false;
}

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$domain_name = get_domain($actual_link); // outputs 'somedomain.co.uk'

include("getalldata.php");

 $sql = "SELECT * FROM website_domain		
		 WHERE website_domain.domain_name = '".$domain_name."'";
 $domain_did = singletable_all( $sql );		 
 
 
$did = $domain_did[0]["did"];
?>