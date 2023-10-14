<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hotel</title>
    <link rel="stylesheet" href="cssUpdateHotel/styleUpdatehotel.css"/>
</head>
<?php 
require("cone/connection.php");
$id=$_GET['id'];
$sql1="SELECT `title_hotel`, `description_hotel`, `price_min` FROM `hotel`WHERE `id_hotel`=$id";
$res=$con->query($sql1);
$row=$res->fetch();

?>
<body>
    <div class="main">
       <form action="" method="post" enctype="multipart/form-data">
           <h1>Update Hotel</h1>
           <input type="file" name="image" id="file"required hidden/><br><br>
           <label for="file">chose image</label>
           <input type="text" name="title" value="<?php echo $row['title_hotel'];?>" required/><br><br>
           <input type="text" name="description" value="<?php echo $row['description_hotel'];?>" required/><br><br>
           <input type="text" name="price" value="<?php echo $row['price_min'];?>" required/><br><br>
           <button type="submit" name="submit">Add</button>
       </form>

</body>
<?php 
require("cone/connection.php");
if(isset($_POST['submit'])){
$image=$_FILES['image']['name'];
$image_path=$_FILES['image']['tmp_name'];
$desti_path="../imagesDB/".$image;
$upload=move_uploaded_file($image,$desti_path);
$title=$_POST['title'];
$description=$_POST['description'];
$price=$_POST['price'];

$idhot=$_GET['id'];
$sql="UPDATE `hotel` SET `nom_image`='$image',`title_hotel`='$title',
`description_hotel`='$description',`price_min`='$price' WHERE `id_hotel`='$idhot'";
$con->exec($sql);
header('location:hotel.php');
}



?>
</html> 