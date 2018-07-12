
     <?php

     if(isset($_POST['delete'])){
      $selectid = $db ->prepare("DELETE FROM panier WHERE id_client='".$_POST['idc']."' and id_product='".$_POST['idp']."' LIMIT 1");
    $selectid->execute(); 
    echo '<script> alert("Votre produit a bien ete supprime du panier") </script>';
    
     }

    $selectid = $db ->prepare("SELECT * FROM clients WHERE email='".$_SESSION['email']."' LIMIT 1");
    $selectid->execute();
    $sid=$selectid->fetch(PDO::FETCH_OBJ);
    $total = 0;
    
    $select = $db ->prepare("SELECT * FROM panier LEFT JOIN products ON panier.id_product = products.id AND panier.id_client = '".$sid->id."'");
         $select->execute();
        echo '  <ul class="summary-table">';

         while ($s=$select->fetch(PDO::FETCH_OBJ)){
             $total += $s->price;
             
             echo '<form action="?action=delete" method="post">
                    <input type="hidden" name="idc" value="'.$s->id_client.'"/>
                    <input type="hidden" name="idp" value="'.$s->id_product.'"/>
                    <li><span>'.$s->title.': '.$s->price.'euros <input type="submit" name="delete" value="supprimer"/></span></li>
                    </form>';
                                         
        }

        echo '<li><span>total : '.$total.' euros</span></li>';
        echo '</ul>';
    
    ?>
  
    
   