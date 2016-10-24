
<?php
include('facebook.php');


$message=$_GET['message'];
$description=$_GET['description'];
$region=$_GET['region'];
$prix=$_GET['prix'];
$typee=$_GET['type'];
$logement='http://www.novik.com/images/album/reg/maison_2.jpg';
$terrain='http://www.maisonsdenfrancenpdc.com/images/terrains-defaut.jpg';
$entreprise='http://img.archiexpo.fr/images_ae/press-mg/l-architecture-d-batiment-tant-que-reflet-philosophie-d-entreprise-P182479.jpg';

if($typee=="l")
{$picture=$logement;}
else
if($typee=="t")
{$picture=$terrain;}
else
if($typee=="e")
{$picture=$entreprise;}

$app_id='1560590274183454';
$app_secret='a13707781399265eeb4fd15bf040c2b8';
$facebook = new Facebook(array(
  'appId' => $app_id,
  'secret' => $app_secret
));
$pageID='1579631405627273';
$token='CAAWLWTzuwR4BAEcr85XgYcPSLVpgoiYl2oGZBeqBIsnBbe9qPQ0JXmZAqOPYjV0WenCKHtLujFxM3ZBe0Pke8wULicv8Gbi1tSxfMBRw8Il10yT0lg2MHBFEOysdtRw7Soi1Ym8XYs3VEK7ZCEVPZBPouFY7CTuBRuRUg1W7XUomW8VlMgH19';

$attachment = array(
	'access_token' => $token,
	'message' => $message,
	'name' => $prix.' DT',
	'caption' => $region,
	'link' =>'',
	'description' => $description,
	'picture' => $picture
);
$deb = $facebook->api('/'.$pageID.'/feed/', 'post', $attachment);

?><script >self.close();</script>