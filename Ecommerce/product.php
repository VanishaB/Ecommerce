<?php include './includes/config.php'; 
 


    if(isset($_POST['id'])){
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

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../front/templates/img/images/absynth.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                       
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../front/templates/img/images/resine.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                       
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Panier</h2>
                <?php include './includes/panier.php'; ?>
                <ul class="summary-table">
                    
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="" class="btn essence-btn">Commander</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">
        <?php
        
        
        if(!isset($_GET['page'])){
            echo '<script> document.location.href="./allproducts.php"</script>' ;
        }
        
        $select= $db ->prepare("SELECT * FROM products WHERE title='".$_GET['page']."' LIMIT 1");
        $select->execute();
        $s=$select->fetch(PDO::FETCH_OBJ);
        
        ?>

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                    
                
            </div>
            <img src="./img/products/<?php echo $s->category; ?>/<?php echo $s->img; ?>" alt="" />
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span><?php echo $s->category; ?></span>
            <a href="cart.html">
                <h2> <?php echo $s->title; ?></h2>
            </a>
            <p class="product-price"><?php echo $s->price; ?>euros</p>
            <p class="product-desc"><?php echo $s->description; ?></p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <?php 
                    
                        
                        echo    '<form method="post" action="product.php?page='.$s->title.'">
                                    <input type="hidden" name="id" value="'.$s->id.'"/>
                                    <input type="hidden" name="idClient" value="'.$s->id.'"/>
                                    <input type="submit" value="Ajouter au panier" name="submit" class="btn essence-btn"/>
                                </form>' 
                    ?>
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
