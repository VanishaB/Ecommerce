<?php
include './includes/config.php';

$msg = '';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
   
    
    
    if($email == ''){
        $msg = 'Veuillez entrer une adresse mail';
    }
    
     if($mdp == ''){
        $msg = 'Veuillez entrer un mdp';
    }
    $select = $db->prepare("SELECT email,mdp FROM clients WHERE email='".$email."' and mdp='".$mdp."' LIMIT 1");
    $select->execute();
    $nbr = $select->rowCount();

    if ($nbr == 1){
        $_SESSION['email'] = $email;
        header('Location:./index.php');
    }else{
        $msg = 'email ou mdp incorrect';
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
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    
    <!-- ##### Header Area Start ##### -->
     <?php include './includes/header.php'; ?>
    
    <div>
        
        <h3>Connexion</h3><br/>
        <?php if($msg != ''){ echo $msg;} ?>
   <form method="post" action="connexion.php">
       <b> Email</b><br/><br/>
       <input type="text" name="email"/><br/><br/>
       <b> Mot de passe </b><br/>
       <input type="password" name="mdp"/><br/><br/><br/>
       
       
       <a type="submit" name="submit" value="connexion" href="index.php">Connexion</a><br/><br/><br/><br/><br/>
        </form><br/>
    <br/><br/>
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
