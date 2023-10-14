
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="cssAddRoom/styleAddRoom.css"/>
</head>
<body>
<?php
    require("cone/connection.php");
     $id_ro=$_GET['id'];
     $sql="SELECT `id_chambre`, `nom_image`, `title_chambre`, `description_chambre`, `price_chambre`, `sold_price`, `id_hotel_room` FROM `chambre` WHERE `id_chambre`=$id_ro";
     $res=$con->query($sql);
     $row=$res->fetch();
?>
    <div class="main">
       <form action="" method="post" enctype="multipart/form-data">
           <h1>Update Room</h1>
           <input type="file" name="image" id="file"required hidden/><br><br>
           <label for="file">chose image</label>
           <input type="text" name="title" value="<?php echo $row['title_chambre'];?>" required/><br><br>
           <input type="text" name="description"value="<?php echo $row['description_chambre'];?>"required/><br><br>
           <input type="text" name="price" value="<?php echo $row['price_chambre'];?>" required/><br><br>
           <input type="text" name="old_price" value="<?php echo $row['sold_price'];?>" required/><br><br>
           <button type="submit" name="submit">Add</button>
       </form>
    </div>
   
    <?php
    require("cone/connection.php");
     $id_ro=$_GET['id'];
     if(isset($_POST['submit'])){
          if(isset($_FILES['image']['name'])){
            $image=$_FILES['image']['name'];
            $image_path=$_FILES['image']['tmp_name'];
            $desti_path="../imagesDB/".$image;
            $upload=move_uploaded_file($image,$desti_path);

            $title=$_POST['title'];
            $description=$_POST['description'];
            $price=$_POST['price'];
            $old_price=$_POST['old_price'];
            $sql1="UPDATE `chambre` 
            SET`nom_image`='$image',`title_chambre`=' $title',`description_chambre`='$description',`price_chambre`='$price',`sold_price`='$old_price' WHERE  `id_chambre`= $id_ro";
            $con->exec($sql1);
            header("location:hotel.php");
        }
    }
    ?>
 </body>
 </html>