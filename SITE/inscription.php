<?php
include './includes/config.php';

$msg = '';
if(isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdpverif = htmlspecialchars($_POST['mdpverif']);
    $email = htmlspecialchars($_POST['email']);
    
    
    
    if($nom == ''){
        $msg = 'Veuillez entrer un nom';
    }
    
     if($prenom == ''){
        $msg = 'Veuillez entrer un prenom';
    }
    
     if($mdp == ''){
        $msg = 'Veuillez entrer un mdp';
    }
    
     if($mdpverif != $mdp){
        $msg = 'Les mdp sont pas les mm ';
    }
    
     if($email == ''){
        $msg = 'Veuillez entrer une adresse mail';
    }
    
    if($msg == ''){
        $insert = $db->prepare("INSERT INTO clients (nom,prenom,email,mdp) VALUES('$nom', '$prenom', '$email' , '$mdp')");
        $insert->execute();
        $msg = 'Vous etes inscrit sur le site';
        
    }
    
    
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-strict.dtd">
<!--W3C-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Inscription</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="./css/core-style.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <?php include './includes/header.php'; ?>
    
    <div>
        <?php if($msg != ''){ echo $msg;} ?>
        <h3> Inscription </h3><br/>
   <form method="post" action="inscription.php">
       <b>Nom :</b><br/>
        <input type="text" name="nom"/><br/>
       <b>Prenom :</b><br/>
        <input type="text" name="prenom"/><br/>
       <b> Mot de passe </b> <br/>
       <input type="password" name="mdp"/><br/>
       <b> Verification du mdp </b> <br/>
       <input type="password" name="mdpverif"/><br/>
       <b> Email</b><br/>
       <input type="text" name="email"/><br/><br/>
       
       <input type="submit" name="submit"/> <br/>
        </form><br/><br/>
    
    </div>
   
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/favicon.ico" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="./allproducts.php">Boutique</a></li>
                                <li><a href="./inscription.php">S'inscrire</a></li>
                                <li><a href="./connexion.php">Se connecter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

           
<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/CitizenYY" target="_blank">Yué Yin @Simplon</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
