<?php

// vérification des droits d'accès de la page
if (utilisateur_est_connecte())
{
		//	On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté
		include CHEMIN_VUE_GLOBALE.'erreur_deja_connecte.php';
}
else
{
	include CHEMIN_LIB.'form.php';

	$form_connexion = new Form('formulaire_connexion');

	$form_connexion->method('POST');

	$form_connexion->add('Text', 'nom')
				   ->label("Votre nom d'utilisateur");

	$form_connexion->add('Password', 'mdp')
				   ->label("Votre mot de passe");

	$form_connexion->add('Submit', 'submit')
				   ->value("Connectez-moi !");

	$form_connexion->bound($_POST);

	$erreurs_connexion = array();

	if ($form_connexion->is_valid($_POST))
	{
		list($nom, $mdp) = $form_connexion->get_cleaned_data('nom', 'mdp');

		include CHEMIN_MODELE.'membres.php';

		$id_utilisateur = combinaison_connexion_valide($nom, sha1($mdp));

		if (false !== $id_utilisateur)
		{
			$infos_utilisateur = lire_infos_utilisateur($id_utilisateur);

			$_SESSION['id']	= $id_utilisateur;
			$_SESSION['nom'] = $nom;
			$_SESSION['email'] = $infos_utilisateur['email'];

			include CHEMIN_VUE.'connexion_ok.php';
		}
		else
		{
			$erreurs_connexion[] = "Couple nom d'utilisateur / Mot de passe inexistant.";

			include CHEMIN_VUE.'formulaire_connexion.php';
		}

	}
	else
	{
		include CHEMIN_VUE.'formulaire_connexion.php';
	}
}