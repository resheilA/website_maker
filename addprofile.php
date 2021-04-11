<?php 

function generateRandomString($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$result['redirect_to'] = "addprofile.php";
$_POST["details|wid"] = generateRandomString(15); 
include("savedata.php");
}

?>

<html>
<head>
</head>
<body>
<form method="post">
	<input type="text" name="details|website_name" placeholder="Website Name">
	<input type="text" name="details|website_tagline" placeholder="Website Tagline">
	<input type="text" name="details|website_email" placeholder="Website Email">
	<input type="text" name="details|website_contact" placeholder="Website Contact">
	<input type="text" name="details|website_category" placeholder="Website Category">
	<input type="submit">
</form>
</body>