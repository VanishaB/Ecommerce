<?php

include './includes/config.php';
if(isset($_POST['submit'])){
     $selectid = $db ->prepare("SELECT id FROM clients WHERE email='".$_SESSION['email']."' LIMIT 1");
    $selectid->execute();
    $sid=$selectid->fetch(PDO::FETCH_OBJ);
    
    
    $id = $_POST['id'];
    $sid = $sid->id;
    $insert = $db->prepare("INSERT INTO panier (id_client,id_product) VALUES('".$sid."', '".$id."')");
    $insert->execute();
    echo '<script> alert("Votre produit a bien ete rajouter au panier") </script>';
    
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
    <title>E-commerce Mediplantes</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="./css/core-style.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
   <?php include './includes/header.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="./img/core-img/bag.svg" alt=""> </a>
        </div>
        <div class="cart-content d-flex">



<!-- Cart Summary -->
<div class="cart-amount-summary">
   

    <h2>Panier</h2>

        <?php include './includes/panier.php'; ?>
     <div class="checkout-btn mt-100">
        <a href="" class="btn essence-btn">Commander</a>
    </div>
</div>
</div>
    </div>

    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(./img/images/theplantstore.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Boutique des plantes</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catégories</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#">Plantes</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                             <?php
                                    $select_plantes = $db ->prepare("SELECT * FROM products WHERE category='plantes' LIMIT 5");
                                     $select_plantes->execute();

                                     while ($s_plantes=$select_plantes->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_plantes->title.'">'.$s_plantes->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                            
                                            
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="#">Encens</a>
                                        <ul class="sub-menu collapse" id="shoes">
                                              <?php
                                    $select_encens = $db ->prepare("SELECT * FROM products WHERE category='encens' LIMIT 5");
                                     $select_encens->execute();

                                     while ($s_encens=$select_encens->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_encens->title.'">'.$s_encens->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                           
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="#">Resines</a>
                                        <ul class="sub-menu collapse" id="accessories">
                                            <?php
                                    $select_resines = $db ->prepare("SELECT * FROM products WHERE category='resines' LIMIT 5");
                                     $select_resines->execute();

                                     while ($s_resines=$select_resines->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_resines->title.'">'.$s_resines->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                          
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        
                        <!-- ##### Single Widget ##### -->

                       
                        <!-- ##### Single Widget ##### -->

                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                           
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                      

                        <div class="row">
                            
                            <?php 
                            $select = $db ->prepare("SELECT * FROM products");
                            $select->execute();

                            while ($s=$select->fetch(PDO::FETCH_OBJ)){
                            echo '<!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="./img/products/'.$s->category.'/'.$s->img.'" alt="">
                                      
                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            
                                        </div>
                                        <!-- Favourite -->
                                        
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>'.$s->title.'</span>
                                        <a href="single-product-details1.html">
                                            <h6>'.$s->description.'</h6>
                                        </a>
                                        <p class="product-price">'.$s->price.'€</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                            <form method="post" action="allproducts.php">
                                            <input type="hidden" name="id" value="'.$s->id.'"/>
                                            <input type="submit" value="Ajouter au panier" name="submit" class="btn essence-btn"/>
                                            </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                             }
                ?>            

                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

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
    <script src="./js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="./js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="./js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="./js/active.js"></script>

</body>

</html>





