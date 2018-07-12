<?php
session_start();

$user = 'vani';
$password_defini = 'vani';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password){

   if($username==$user&&$password==$password_defini){

       $_SESSION['username']=$username;
       header('Location:../global/admin.php');

   }else{
        echo"idd errone";
    }

    }else{
        echo"veuillez remplir les champs";
    }
}
?>

<link href="../style/bootstrap.css" rel="stylesheet">
<h1>Connexion</h1>
<form action="" method="POST">
<h3> Pseudo: </h3><input type="text" name="username">
<h3> Mot de Passe: </h3><input type="password" name="password">
<input type="submit" name="submit"></form>
