<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">           
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title><?php if(!empty($data['title'])){echo $data['title'];}else{echo 'Default title';}?></title>
    <link href="<?php echo Controller::template_assets() . 'css/custom.css';?>" rel="stylesheet">      
    <link href="<?php echo Controller::template_assets() . 'css/bootstrap.css';?>" rel="stylesheet"> 	
</head>
<body>
