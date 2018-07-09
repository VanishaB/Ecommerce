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
    <link rel="icon" href="front/templates/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="front/templates/css/core-style.css">
    <link rel="stylesheet" href="front/templates/css/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand"><img src="front/templates/img/core-img/logo.png" alt="logo"></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="<?php echo $GLOBALS["app_url"] ?>index.php">Boutique</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                       <li class="title">Plantes</li>
                                        <li><a href="global/single-product-details1.php">Absinthe</a></li>
                                        <li><a href="global/single-product-details2.php">Ashwagandha ginseng</a></li>
                                        <li><a href="global/single-product-details3.php">Bardane</a></li>
                                        <li><a href="global/single-product-details4.php">Bleuet</a></li>
                                        <li><a href="global/single-product-details5.php">Cannelle de chine</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Encens</li>
                                        <li><a href="global/single-product-details6.php">Djaoui noir</a></li>
                                        <li><a href="global/single-product-details7.php">Encens Tibetain</a></li>
                                        <li><a href="global/single-product-details8.php">Gomme d'elemi</a></li>
                                        <li><a href="global//single-product-details9.php">Marie qui defait les noeuds</a></li>
                                        <li><a href="global/single-product-details10.php">Oliban du souda</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Résines</li>
                                        <li><a href="global/single-product-details11.php">Copal</a></li>
                                        <li><a href="global/single-product-details12.php">Olibanum</a></li>
                                        <li><a href="global/single-product-details13.php">Oliban</a></li>
                                        <li><a href="global/single-product-details14.php">Myrrhe</a></li>
                                        <li><a href="global/single-product-details15.php">Colophane</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="front/templates/img/images/dribbble_juvamed.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="global/accueil.php">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="global/accueil.php">Accueil</a></li>
                                    <li><a href="global/allproducts.php">Produits</a></li>
                                    <li><a href="">Blog</a></li> <!--TODO : page blog-->
                                </ul>
                            </li>
                            <li><a href="modeles/inscription.php">S'inscrire</a></li> <!--TODO : page d'inscription-->
                            <li><a href="modeles/membres.php">Se connecter</a></li>  <!--TODO : page de connexion-->
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- TODO : Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Rechercher">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- TODO : Favorite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="front/templates/img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- TODO : User Login Info -->
                <div class="user-login-info">

                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="front/templates/img/core-img/user.svg" alt=""></a>
                    <div class="dropdown-menu">
                  <?php
                  if(isset($_SESSION['email'])){
                    echo '  <a href="#">'.$_SESSION['login'].'</a>
                    <a href="">LogOut</a>';

                    if($_SESSION['admin'] == 'yes'){
                      echo '<a href="/sheekstore/e_commerce/index.php/admin">Administration</a>';

                    }

                  }else{
                    echo '<a href="#" data-toggle="modal" data-target="#signin">SignIn</a>
                    <a href="#" data-toggle="modal" data-target="#signup">SignUp</a>';
                  }
                  ?>

          </div>
        </div>

      </div>
                    <a href="#"><img src="front/templates/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- TODO : Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="front/templates/img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="front/templates/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="front/templates/img/images/absynth.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mediplante</span>
                            <h6>Absinthe en vrac</h6>
                            <p class="size">Quantité: 100g</p>
                            <p class="price">10.00€</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="front/templates/img/images/bleuet-petales-bio.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mediplante</span>
                            <h6>Pétales de bleuet en vrac</h6>
                            <p class="size">Quantité: 100g</p>
                            <p class="price">10.00€</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="front/templates/img/images/resine.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mediplante</span>
                            <h6>Résine en vrac</h6>
                            <p class="size">Quantité: 100g</p>
                            <p class="price">10.00€</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Récapitulatif</h2>
                <ul class="summary-table">
                    <li><span>sous-total:</span> <span>30€</span></li>
                    <li><span>livraison:</span> <span>Gratuit</span></li>
                    <li><span>rabais:</span> <span>-10%</span></li>
                    <li><span>total:</span> <span>27€</span></li>/
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="#" class="btn essence-btn">Commander</a> <!--TODO : checkout.php-->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(front/templates/img/images/plant-background.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h2>Mediplantes</h2>
                        <h6>Plantes thérapeutiques naturelles</h6><br><br />
                        <a href="global/allproducts.php" class="btn essence-btn">Voir nos produits</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(front/templates/img/images/AloeVera.jpg);">
                        <div class="catagory-content">
                            <a href="global/allproducts.php">Plantes</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(front/templates/img/images/encens-a-bruler-djaoui-noir.jpg);">
                        <div class="catagory-content">
                            <a href="global/allproducts.php">Encens</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(front/templates/img/images/resine.jpg);">
                        <div class="catagory-content">
                            <a href="global/allproducts.php">Résines</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(front/templates/img/images/.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-50%</h6>
                                <h2>Ce sont les soldes, nombreux produits en promotion !</h2>
                                <a href="global/allproducts.php" class="btn essence-btn">J'y vais!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Produits populaires</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="front/templates/img/images/absynth.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="front/templates/img/images/anis-vert.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Produit populaire 1</h6>
                                </a>
                                <p class="product-price">10€</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="front/templates/img/images/bleuet-petales-bio.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="front/templates/img/images/basilic-flocon-bio.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Produit populaire 2</h6>
                                </a>
                                <p class="product-price">9.00€</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="front/templates/img/images/encens-a-bruler-marie.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="front/templates/img/images/encens-a-bruler-encens-tibetain.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Encens à brûler</h6>
                                </a>
                                <p class="product-price"><span class="old-price">30€</span> 22€</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="front/templates/img/images/resine.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="front/templates/img/images/plante_resine_encens-oliban.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>Nouveau !</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>Résines</h6>
                                </a>
                                <p class="product-price">12€</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->


    <!-- ##### Brands Area Start ##### -->
    <!--
    <div class="brands-area d-flex align-items-center justify-content-between">
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    -->
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="front/templates/img/core-img/favicon.ico" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="accueil.php">Boutique</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Etat de votre commande</a></li>
                            <li><a href="#">Options de paiement</a></li>
                            <li><a href="#">Expédition et livraison</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Confidentialité</a></li>
                            <li><a href="#">CGU</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>S'abonner</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Votre email">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
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
    <script src="./front/templates/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./front/templates/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./front/templates/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="./front/templates/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="./front//templates/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="./front/templates/js/active.js"></script>

</body>

</html>
