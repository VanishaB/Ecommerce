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
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
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
                                        <li><a href="global/single-product-details1.php">Absynth</a></li>
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
                                        <img src="img/images/dribbble_juvamed.png" alt="">
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
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
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
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/images/absynth.jpg" class="cart-thumb" alt="">
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
                        <img src="img/images/bleuet-petales-bio.jpg" class="cart-thumb" alt="">
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
                        <img src="img/images/resine.jpg" class="cart-thumb" alt="">
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

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="templates/images/ences/encens-a-bruler-gomme-d-elemi-100-gr-terre-d-encens-.jpg" alt="">
                <img src="img/.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>Encens</span>

                <h2>Gomme d'elemi</h2>
            </a>
            <p class="product-price"><span class="old-price">15.00€</span> 11.00€</p>
            <p class="product-desc">Description: <br/>
La Gomme Elémi provient des arbres « Canarium « , de la famille des « Burseraceae »,originaires de Manille, du Brésil, du Mexique, des iles Moluques et des Philippines. (Précisément là le « Bursera Simaruba »).

Cet arbre pouvant atteindre jusqu’à 15 mètres de hauteur est un arbre à feuilles caduques , perdant ses feuilles entièrement pour une très courte période en Février ou Mars.

La résine est récoltée à l’état visqueux,mais on peut aussi par extraction, obtenir de ce suc résineux un résinoïde plus ferme.

Lorsqu’elle brule, l’Elémi répand une agréable odeur citronnée et boisée, combinée à la densité du parfum d’une résine,qui éclaircit, purifie, donne de l’énergie et stimule les facultés mentales.

Ses propriétés rafraîchissantes agiraient sur les centres énergétiques de l’homme en les activant et en les purifiant. En cas d’épuisement ou quand une activité intellectuelle est requise, ce parfum clarifiant, frais et vert, peut fournir une puissante poussée énergétique.

Se mélange bien avec le bois de santal.

On mélangeait traditionnellement l’Elémi à d’autres substances à fumigation aux vertus rafraichissantes, comme le mastic du levant, la citronnelle et l’avoine odorante.


En médecine traditionnelle,la résine des Burséracées est connue pour ses propriétés anti-inflammatoires et est particulièrement utilisée aux Bahamas pour apaiser les piqures de guêpes et d’abeilles.

La Gomme Elémi était utilisée dans l’ancienne Egypte dans les processus de momification.</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">100g</option>
                        <option value="value">200g</option>
                        <option value="value">300g</option>
                        <option value="value">500g</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Ajouter au panier</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

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
    <script src="front/templates/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="front/templates/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="front/templates/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="front/templates/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="front/templates/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="front/templates/js/active.js"></script>

</body>

</html>
