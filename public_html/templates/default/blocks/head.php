<?php
header ( "Cache-Control: must-revalidate");
$offset = 60 * 60 * 24 * 30; /*Aquí se especifica los dias*/
$ExpireString = "Expires:" . gmdate("D, d M Y H: i: s", time () + $offset) . "GMT";
header ($ExpireString);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">           
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title><?php if(!empty($data['title'])){echo $data['title'];}else{echo 'Default title';}?></title>
</head>
