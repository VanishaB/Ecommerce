<div class="cart-content d-flex">



<!-- Cart Summary -->
<div class="cart-amount-summary">
   

    <h2>Récapitulatif</h2>
     <?php
    
    $selectid = $db ->prepare("SELECT * FROM clients WHERE email='".$_SESSION['email']."' LIMIT 1");
    $selectid->execute();
    $sid=$selectid->fetch(PDO::FETCH_OBJ);
    $total = 0;
    
    $select = $db ->prepare("SELECT * FROM panier WHERE id_client='".$sid->id."'");
         $select->execute();
        echo '  <ul class="summary-table">';

         while ($s=$select->fetch(PDO::FETCH_OBJ)){
             echo '<li><span>'.$s->title.':</span> <span>'.$s->price.'</span></li>';
                                         
        }
        echo '</ul>';
    
    ?>
  
    
    <div class="checkout-btn mt-100">
        <a href="checkout.html" class="btn essence-btn">Commander</a>
    </div>
</div>
</div>