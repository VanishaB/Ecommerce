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

	$form_inscription = new Form('formulaire_inscription');

	$form_inscription->method('POST');

	$form_inscription->add('Text', 'nom')
					 ->label("Votre nom d'utilisateur");

	$form_inscription->add('Email', 'email')
					 ->label("Votre adresse mail");

	$form_inscription->add('Password', 'mdp')
					 ->label("Votre mot de passe");

	$form_inscription->add('Password', 'mdp_verif')
					 ->label("Confirmez votre mot de passe");

	$form_inscription->add('Text', 'adresse')
					 ->label("L'adresse de votre domicile");

	$form_inscription->add('Submit', 'submit')
					 ->value("Je veux m'inscrire !");

	//Pré remplissage (valeurs précédemment entrées)
	$form_inscription->bound($_POST);

	$erreurs_inscription = array();

	//	Validation des champs suivant les règles en utilisant les données du tableau $_POST
	if ($form_inscription->is_valid($_POST))
	{
		if($form_inscription->get_cleaned_data('mdp') != $form_inscription->get_cleaned_data('mdp_verif'))
		{
			$erreurs_inscription[] = "Les mots de passe ne correspondent pas !";
		}

		//	Si il n'y à pas d'autre erreurs de formulaire
		if (empty($erreurs_inscription))
		{
			//	Tirer de la doc PHP <http://fr.php.net/uniqid>
		

			//	Tentative d'ajout du membre dans la bdd
			list($nom, $mdp, $email, $adresse) = $form_inscription->get_cleaned_data('nom', 'mdp', 'email', 'adresse');

			//	On veut utiliser le modele de l'inscription
			include CHEMIN_MODELE.'inscription.php';

			//	Ajouter_membre_dans_bdd() est défini dans modeles/inscription.php
			$id_utilisateur = ajouter_membre_dans_bdd($nom, sha1($mdp), $email, $adresse);

			//	Si l'ajout est un succès (pas de doublons)	
			if (ctype_digit($id_utilisateur))
			{
				//	On transforme la chaine en entier
				$id_utilisateur = (int) $id_utilisateur;

				//	Préparation du mail
				//	$message_mail = '<html><head></head><body>
				//	<p>Merci de vous être inscrit sur notre site !</p>
				//	<p>Veuillez valider votre inscription en cliquant sur <a href="'.$_SERVER['PHP_SELF'].'?module=membres&amp;action=valider_compte&amp;hash='.$hash_validation.'">ce lien</a> pour activer votre compte !</p>
				//	</body></html>';

				//	$headers_mail = 'MIME-Version: 1.0'."\r\n";
				//	$headers_mail.=	'Content-type: text/html; charset=utf-8'."\r\n";
				//	$headers_mail.= 'From: "Mediplantes" <contact@mediplantes.com>'."\r\n";

				//	Envoi du mail
				//	mail($form_inscription->get_cleaned_data('email'), 'Inscription sur Mediplantes', $message_mail, $headers_mail);
	

			//	Affichage de la confirmation de l'inscription
			include CHEMIN_VUE.'inscription_effectuee.php';

			//	Gestion des doublons
			}
			else
			{
				//	Changement de nom de variable
				$erreur =& $id_utilisateur;

				//	On vérifie que l'erreur concerne bien un doublon
				if(23000 == $erreur[0])
				{
					preg_match("`Duplicate entry '(.+)' for key \d+`is", $erreur[2], $valeur_probleme);
					$valeur_probleme = $valeur_probleme[0];

					if ($nom == $valeur_probleme)
					{
						$erreurs_inscription[] = "Ce nom d'utilisateur est déjà utilisé.";
					}
					elseif ($email == $valeur_probleme)
					{
						$erreurs_inscription[] = "Cette adresse e-mail est déjà utilisée.";
					}
					else
					{
						$erreurs_inscription[] = "Erreur ajout SQL : doublon non identifié présent dans la base de données.";
					}
				}
				else
				{
					$erreurs_inscription[] = sprintf("Erreur ajout SQL : cas non traité (SQLSTATE = %d).", $erreur[0]);
				}
				// On réaffiche le formulaire d'inscription
				include CHEMIN_VUE.'formulaire_inscription.php';
			}
		}
		else
		{
			include CHEMIN_VUE.'formulaire_inscription.php';
		}
	}
	else
	{
		include CHEMIN_VUE.'formulaire_inscription.php';
	}
}