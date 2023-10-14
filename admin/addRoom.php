
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
    <div class="main">
       <form action="" method="post" enctype="multipart/form-data">
           <h1>Add New Room</h1>
           <input type="file" name="image" id="file"required hidden/><br><br>
           <label for="file">chose image</label>
           <input type="text" name="title" placeholder="Title Room" required/><br><br>
           <input type="text" name="description" placeholder="Room Description" required/><br><br>
           <input type="text" name="price" placeholder="Price" required/><br><br>
           <input type="text" name="old_price" placeholder="Current Price" required/><br><br>
           <button type="submit" name="submit">Add</button>
       </form>
    </div>
    </body>
    <?php 
     require("cone/connection.php");
     $id_hot=$_GET['id'];
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
            $sql="INSERT INTO `chambre`( `nom_image`, `title_chambre`, `description_chambre`, `price_chambre`, `sold_price`, `id_hotel_room`) 
            VALUES ('$image','$title','$description','$price','$old_price','$id_hot') ";
            $con->exec($sql);
            header("location:hotel.php");
            
          }
           
          
         
     }
    
    
    
    ?>
</html>
 