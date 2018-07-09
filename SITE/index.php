<?php
include './includes/config.php';

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
    <link rel="icon" href="./img/core-img/favicon.ico">

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
            <a href="#" id="rightSideCart"><img src="./img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="./img/images/absynth.jpg" class="cart-thumb" alt="">
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
                        <img src="./img/images/bleuet-petales-bio.jpg" class="cart-thumb" alt="">
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
                        <img src="./img/images/resine.jpg" class="cart-thumb" alt="">
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

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/images/plant-background.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h2>Mediplantes</h2>
                        <h6>Plantes thérapeutiques naturelles</h6><br><br />
                        <a href="shop.html" class="btn essence-btn">Voir nos produits</a>
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
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/images/AloeVera.jpg);">
                        <div class="catagory-content">
                            <a href="#">Plantes</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/images/encens-a-bruler-djaoui-noir.jpg);">
                        <div class="catagory-content">
                            <a href="#">Encens</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/images/resine.jpg);">
                        <div class="catagory-content">
                            <a href="#">Résines</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

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
                                <img src="img/images/absynth.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/images/anis-vert.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details1.html">
                                    <h6>Absynthe & Anis Vert</h6>
                                </a>
                                <p class="product-price">10.00€</p>

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
                                <img src="img/images/bleuet-petales-bio.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/images/basilic-flocon-bio.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details1.html">
                                    <h6>Bleuet et Basilic</h6>
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
                                <img src="img/images/encens-a-bruler-marie.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/images/encens-a-bruler-encens-tibetain.jpg" alt="">

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
                                <a href="single-product-details1.html">
                                    <h6>Encens à brûler</h6>
                                </a>
                                <p class="product-price"><span class="old-price">30.00€</span> 22.00€</p>

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
                                <img src="img/images/resine.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/images/plante_resine_encens-oliban.jpg" alt="">

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
                                <span>topshop</span>
                                <a href="single-product-details1.html">
                                    <h6>Résines</h6>
                                </a>
                                <p class="product-price">12.00€</p>

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
