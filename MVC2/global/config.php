<?php

//	Identifiants pour la bdd. need pour pdo2.php
define('SQL_DSN', 		'mysql:dbname=Users;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

//	Path à utiliser pour accéder aux vues/modeles/libs
$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'index' : $module;
define('CHEMIN_VUE', 'modules/'.$module.'/vues/');
define('CHEMIN_MODELE', 'modeles/');
define('CHEMIN_LIB', 'libs/');
define('CHEMIN_VUE_GLOBALE', 'vues_globales/');