<?php

function ajouter_membre_dans_bdd($nom, $mdp, $email, $adresse)
{
	$pdo = PDO2::getInstance();

	$requete = $pdo->prepare("INSERT INTO clients SET 
		nom = :nom,
		mdp = :mdp,
		email = :email,
		adresse = :adresse,
		date_inscription = NOW()");

	$requete->bindValue(':nom', $nom);
	$requete->bindValue(':mdp', $mdp);
	$requete->bindValue(':email', $email);
	$requete->bindValue(':adresse', $adresse);

	if($requete->execute())
	{
		return $pdo->lastInsertId();
	}
	return $requete->errorInfo();
}