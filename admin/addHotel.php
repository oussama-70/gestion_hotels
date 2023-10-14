
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="cssAddHotel/styleAddHotel.css"/>
</head>
<body>
    <div class="main">
       <form action="" method="post" enctype="multipart/form-data">
           <h1>Add New Hotel</h1>
           <input type="file" name="image" id="file" required hidden/><br><br>
           <label for="file">chose image</label>
           <input type="text" name="title" placeholder="Title Hotel" required/><br><br>
           <input type="text" name="description" placeholder="Your Description" required/><br><br>
           <input type="text" name="price" placeholder="Price Min of Hotel" required/><br><br>
           <button type="submit" name="submit">Add</button>
       </form>
    </div>
    <?php 
     require("cone/connection.php");
     if(isset($_POST['submit'])){
          if(isset($_FILES['image']['name'])){
            $image=$_FILES['image']['name'];
            $image_path=$_FILES['image']['tmp_name'];
            $desti_path="../imagesDB/".$image;
            $upload=move_uploaded_file($image,$desti_path);
            $title=$_POST['title'];
            $description=$_POST['description'];
            $price=$_POST['price'];
            $sql="INSERT INTO `hotel`(`nom_image`, `title_hotel`, `description_hotel`, `price_min`) 
            VALUES ('$image','$title','$description','$price')";
            $con->exec($sql);
            header("location:hotel.php");
            
          }
           
          
         
     }
    
    
    
    ?>
  
</body>
</html>