<?php

try
                {
                    $db = new PDO('mysql:host=localhost;dbname=site','root','');
                    $db -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e){
                    echo'erreurr';
                    die();
                }

$select = $db ->prepare("SELECT * FROM products");
         $select->execute();
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
    <link rel="stylesheet" href="../front/templates/css/core-style.css">
    <link rel="stylesheet" href="../front/templates/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="../front/templates/img/core-img/logo.png" alt=""></a>
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
                            <li><a href="#">Boutique</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                      <li class="title">Plantes</li>
                                        <li><a href="single-product-details1.html">template fiche produit à remplir</a></li>
                                        <li><a href="single-product-details2.html">plante2</a></li>
                                        <li><a href="single-product-details3.html">plante3</a></li>
                                        <li><a href="single-product-details4.html">plante4</a></li>
                                        <li><a href="single-product-details5.html">plante4</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Encens</li>
                                        <li><a href="single-product-details6.html">Encens1</a></li>
                                        <li><a href="single-product-details7.html">Encens2</a></li>
                                        <li><a href="single-product-details8.html">Encens3</a></li>
                                        <li><a href="single-product-details9.html">Encens4</a></li>
                                        <li><a href="single-product-details10.html">Encens5</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Résines</li>
                                        <li><a href="single-product-details11.html">Résine1</a></li>
                                        <li><a href="single-product-details12.html">Résine2</a></li>
                                        <li><a href="single-product-details13.html">Résine3</a></li>
                                        <li><a href="single-product-details14.html">Résine4</a></li>
                                        <li><a href="single-product-details15.html">Résine5</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="../front/templates/img/images/dribbble_juvamed.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Accueil</a></li>
                                    <li><a href="single-product-details1.html">Produits détails</a></li>
                                    <li><a href="shop.html">Produits</a></li>
                                    <li><a href="single-blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">S'inscrire</a></li>
                            <li><a href="contact.html">Se connecter</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Rechercher">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favorite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="../front/templates/img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="../front/templates/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="../front/templates/img/core-img/bag.svg" alt=""> <span>3</span></a>
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
            <a href="#" id="rightSideCart"><img src="../front/templates/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../front/templates/img/images/absynth.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mediplante</span>
                            <h6>Absynthe en vrac</h6>
                            <p class="size">Quantité: 100g</p>
                            <p class="price">10.00€</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../front/templates/img/images/bleuet-petales-bio.jpg" class="cart-thumb" alt="">
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
                        <img src="../front/templates/img/images/resine.jpg" class="cart-thumb" alt="">
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
                    <li><span>total:</span> <span>27€</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">Commander</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(../front/templates/img/images/theplantstore.jpg);">
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
                                        <a href="#">Plante</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">Plante</a></li>
                                            <li><a href="#">Plante</a></li>
                                            <li><a href="#">Plante</a></li>
                                            <li><a href="#">Plante</a></li>
                                            <li><a href="#">Plante</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="#">Encens</a>
                                        <ul class="sub-menu collapse" id="shoes">
                                            <li><a href="#">Encens</a></li>
                                            <li><a href="#">Encens</a></li>
                                            <li><a href="#">Encens</a></li>
                                            <li><a href="#">Encens</a></li>
                                            <li><a href="#">Encens</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="#">accessories</a>
                                        <ul class="sub-menu collapse" id="accessories">
                                            <li><a href="#">Résine</a></li>
                                            <li><a href="#">Résine</a></li>
                                            <li><a href="#">Résine</a></li>
                                            <li><a href="#">Résine</a></li>
                                            <li><a href="#">Résine</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filtrer</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Prix</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="5" data-max="100" data-unit="€" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="5" data-value-max="100" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">De: 5.00€ - 100.00€</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->

                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Couleurs</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- ##### Single Widget ##### -->

                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brand</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#"></a>LA</li>
                                    <li><a href="#"></a>NATURE</li>
                                    <li><a href="#"></a>C'EST</li>
                                    <li><a href="#"></a>TROP</li>
                                    <li><a href="#"></a>BIEN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>15</span> produits trouvés</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Classer par:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Mieux classés</option>
                                                <option value="value">Nouveaux</option>
                                                <option value="value">Prix croissant</option>
                                                <option value="value">Prix décroissant</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php 
                            while ($s=$select->fetch(PDO::FETCH_OBJ)){
                            echo '<!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="../front/templates/img/images/bleuet-petales-bio.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="../front/templates/img/images/basilic-flocon-bio.jpg" alt="">

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
                                        <span>'.$s->title.'</span>
                                        <a href="single-product-details1.html">
                                            <h6>'.$s->description.'</h6>
                                        </a>
                                        <p class="product-price">'.$s->price.'€</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Ajouter au panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                             }
                ?>            

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
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
                            <a href="#"><img src="../front/templates/img/core-img/favicon.ico" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Boutique</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
    <script src="../front/templates/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../front/templates/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../front/templates/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../front/templates/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="../front/templates/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="../front/templates/js/active.js"></script>

</body>

</html>





