<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="./index.php"><img src="./img/core-img/logo.png" alt=""></a>
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
                                        <?php
                                    $select_plantes = $db ->prepare("SELECT * FROM products WHERE category='plantes' LIMIT 5");
                                     $select_plantes->execute();

                                     while ($s_plantes=$select_plantes->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_plantes->title.'">'.$s_plantes->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Encens</li>
                                      <?php
                                    $select_encens = $db ->prepare("SELECT * FROM products WHERE category='encens' LIMIT 5");
                                     $select_encens->execute();

                                     while ($s_encens=$select_encens->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_encens->title.'">'.$s_encens->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Résines</li>
                                      <?php
                                    $select_resines = $db ->prepare("SELECT * FROM products WHERE category='resines' LIMIT 5");
                                     $select_resines->execute();

                                     while ($s_resines=$select_resines->fetch(PDO::FETCH_OBJ)){
                                         echo '<li><a href="./product.php?page='.$s_resines->title.'">'.$s_resines->title.'</a></li>';
                                         
                                     }
                                    
                                    ?>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/images/dribbble_juvamed.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./index.php">Accueil</a></li>
                                    <li><a href="./product.php">Produits détails</a></li>
                                    <li><a href="./allproducts.php">Produits</a></li>
                                </ul>
                            </li>
                            <li><a href="./inscription.php">S'inscrire</a></li>
                            <li><a href="./connexion.php">Se connecter</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                
                
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="./img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="./img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>