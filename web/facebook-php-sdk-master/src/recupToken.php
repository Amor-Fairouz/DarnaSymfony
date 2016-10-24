<?php
session_start();
include('facebook.php');

$app_id='1560590274183454';
$app_secret='a13707781399265eeb4fd15bf040c2b8';
$facebook = new Facebook(array(
  'appId' => $app_id,
  'secret' => $app_secret
));

$user=$facebook->getUser();

if ($user==0) {
	echo '<a href="'.$facebook->getLoginUrl(array(
	'scope' =>'publish_stream,manage_pages'
)).'">connect</a>';
} else {
	$result = $facebook->api('/me/accounts');
	echo '<pre>';
	print_r($result);
	echo '</pre>';
}

?>