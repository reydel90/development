<!DOCTYPE html>
<html>
	<?php Controller::blocks('head');?>
<body>
	<h1>este es el template default</h1>
	<?php Controller::content();?><!-- Funcion encargada de cargar la vista requerida -->
	<h3>dispositivo usado : <?php $data = Controller::data; print_r($data);?></h3>
</body>
</html>
