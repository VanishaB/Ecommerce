<?php

include '../includes/config.php';

if(!isset($_SESSION['email']) || $_SESSION['email'] != 'vani'){
    echo 'mfkm';
exit;
}

?>
<h1>Bienvenue,
    <?php echo $_SESSION['email']; ?>
</h1>

<a href="?action=add">Ajouter un produit</a>  <!--variable de type get!-->
<a href="?action=modifyanddelete">Modifier /Supprimer un produit</a>


<?php
    if(isset($_SESSION['email'])){
    if(isset($_GET['action'])){   //verif le get
    if($_GET['action']=='add'){
        if(isset($_POST['submit'])){
             $allowedExts = array("gif","jpg","jpeg","png");
        $temp = explode(".",$_FILES['avatar']['name']);
        $extension = end($temp);
            $category=$_POST['category'];

        if((($_FILES['avatar']['type'] == 'image/gif')
            || ($_FILES['avatar']['type'] == 'image/jpeg')
            || ($_FILES['avatar']['type'] == 'image/jpg')
            || ($_FILES['avatar']['type'] == 'image/pjpg')
            || ($_FILES['avatar']['type'] == 'image/x-png')
            || ($_FILES['avatar']['type'] == 'image/png'))
           && ($_FILES['avatar']['size'] < 500000)
           && in_array($extension,$allowedExts)) {
            
                    if (file_exists("./img/products/".$category."/" . $_FILES['avatar']['name'])){
                        echo 'le fichier existe deja';
                    } else {
                        move_uploaded_file($_FILES['avatar']['tmp_name'], "../img/products/".$category."/".$_FILES['avatar']['name']);
                    }
                }else{
            echo 'erreur';
        }
            
            
            
            
          $title=$_POST['title'];
        $description =$_POST['description'];
        $price=$_POST['price'];
        
          
            if($title&&$description&&$price){
                $img= $_FILES['avatar']['name'];
$insert = $db->prepare("INSERT INTO products (title, description, price,category,img) VALUES('$title', '$description','$price','$category','$img')");
                $insert->execute();
                
            }else{
                echo 'Veuillez remplir';
            }
        }



        ?>



<form enctype="multipart/form-data" action="index.php?action=add" method="post">
<h3>Titre produit</h3>
    <input type="text" name="title"/>
    <h3>Description du produit:</h3>
    <textarea type="text" name="description"></textarea> <!--formulaire produit!-->
    <h3>Prix</h3>
    <input type="text" name="price"/><br/>
    <h3>Categorie</h3>
    <input type="text" name="category"/><br/>
    <h3> Importer une image</h3>
    <input type="file" name="avatar"/><br/><br/>
    <input type="submit" name="submit"/>
    </form>


      <?php
        }else if($_GET['action']=='modifyanddelete'){
        
         $select = $db ->prepare("SELECT * FROM products");
         $select->execute();
        
        while ($s=$select->fetch(PDO::FETCH_OBJ)){
            echo $s->title;
?>
<a href="?action=modify&amp;id=<?php echo $s->id; ?>" > Modifier  </a> 
<a href="?action=delete&amp;id=<?php echo $s->id; ?>" > X </a> <br/> <br/>
<?php
        }
        
    }else if($_GET['action']=='modify'){
        
       
        $id=$_GET['id'];
        
        $select = $db ->prepare("SELECT * FROM products WHERE id=$id");
         $select->execute();
        
        $data = $select ->fetch(PDO::FETCH_OBJ); //recup les info 
        
       ?>

<form action="" method="post">
<h3>Titre produit</h3>
    <input value="<?php echo $data->title; ?>" type="text" name="title"/>
    <h3>Description du produit:</h3>
    <textarea name="description"><?php echo $data->description; ?></textarea> <!--formulaire produit!-->
    <h3>Prix</h3>
    <input value="<?php echo $data->price; ?>"type="text" name="price"/><br/>
    <input type="submit" name="submit"/>
    </form>

<?php
         if(isset($_POST['submit'])){
             
        $title=$_POST['title'];
        $description =$_POST['description'];
        $price=$_POST['price'];
             
             $update = $db->prepare("UPDATE products SET title='$title' , description='$description', price='$price' WHERE id=$id");
             $update->execute();
             
             header('location: index.php?action=modifyanddelete');
            
        }
        
        
    } else if($_GET['action']=='delete'){
        
        $id=$_GET['id'];
        $delete = $db ->prepare("DELETE FROM products WHERE id=$id");
         $delete->execute();
        
        
    } else{
        die('erreur');
    }
    }else{
    }
        
}else{
    header('location:index.php');
}
?>
 