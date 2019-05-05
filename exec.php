<?php
	$comando = 'php artisan migrate';
	$retorno = shell_exec($comando);
	
	echo $retorno;
?>