<?php

$GLOBALS["app_url"] = 'http://localhost:8888/Ecommerce/MVC2/';
require_once ('global/accueil.php');

//	Initialisation
include 'global/init.php';

//	Début de la temporisation de sortie
ob_start();

//	Si un module est spécifié, on check s'il existe
if (!empty($_GET['module']))
{
	$module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';

	//	Si l'action est spécifiée on l'utilise, sinon on lance l'action par défaut
	$action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';

	// Si elle existe on la lance
	if (is_file($module.$action))
	{
		include $module.$action;
	}

	//	Sinon on affiche la page d'accueil
}
 	else
 	{
 		include 'global/accueil.php';
 	}
 	//	Fin de la tamporisation de sortie
 	$contenu = ob_get_clean();

 	//	Début du code HTML
 include 'global/haut.php';

 echo $contenu;

 	//	Fin du code HTML
include 'global/bas.php';
