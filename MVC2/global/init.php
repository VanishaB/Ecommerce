<?php

	//	Include du fichier de config
include 'global/config.php';

	//	Désactivation des guillemets
ini_set('magic_quotes_runtime', 0);


if (1 == get_magic_quotes_gpc())
{
	function remove_magic_quotes_gpc(&$value)
	{
		$value = stripslashes($value);
	}
	array_walk_recursive($_GET, 'remove_magic_quotes_gpc');
	array_walk_recursive($_POST, 'remove_magic_quotes_gpc');
	array_walk_recursive($_COOKIE, 'remove_magic_quotes_gpc');
}

//	Include PDO2, qui seras utile partout
include CHEMIN_LIB.'pdo2.php';
