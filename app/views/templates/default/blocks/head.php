<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title><?php if(!empty($data['title'])){echo $data['title'];}else{echo 'Default title';}?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Controller::assets('css','application'); ?>">
</head>

