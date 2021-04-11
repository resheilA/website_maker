<?php
$page_access_token = 'EAAUb2xRUAg0BAML7bDt2NwvoEqNfwcU1JauCtDuYjODsD4WA1JBZAp7JUsdylDW5fFpnxIAizQRnBoism3kyjAoIfPsv7Hfy9xKRb4ClN83sZCeN516eQ6LPQh5IYjySZCSVsDVfIgtCrPBbqCz9P9xMMgUnXE08w4W63wFzCT2I6kin82QIfFqZCbwJaZBy56i7YjT2H7AZDZD';
$page_id = '102462448212116';

$data['picture'] = "http://webportal.in/logo3.png";
$data['link'] = "http://webportal.in/";
$data['message'] = "Your message";
$data['caption'] = "Caption";
$data['description'] = "Description";
$data['access_token'] = $page_access_token;

$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo $return = curl_exec($ch);
curl_close($ch);
?>