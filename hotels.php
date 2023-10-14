<!DOCTYPE html>  
<html lang="en">
<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="hello this page show u hotels"/>
  <meta name="keywords" content="hotels,meknes hotel, hoteles"/>
  <title>hotels</title>
  <!-- style tags -->
  <link rel="stylesheet" href="csshotels/font-awesome.min.css">
  <link rel="stylesheet" href="csshotels/styleHotel.css">
</head>
<body>
     <!-- header section  -->
     <div class="header">
      <div class="con">
      <a href="index.php"><h1 class="title"><span>h</span>otel-<span>5S</span></h1></a>
        <ul class="links">
          <li><a href="index.php">home</a></li>
          <li><a href="index.php">about</a></li>
          <li><a href="hotels.php">hotel</a></li>
          <li><a href="service.php">services</a></li>
          <li><a href="index.php">contact</a></li>
        </ul>
        <div class="clear"></div>
      </div><!--/.con-->
    </div><!--/.header-->
    <!-- end section header  -->
    <!-- start section home -->


<div class="home">
  <div class="overly">
    <h2 class="titile">hoteles</h2>
  </div><!--/.overly-->
</div><!--/.home-->


<!-- end start section home -->

<h2 class="title-hotel">our hotels</h2>
<!-- start section hotels -->
<div class="hotels">
  <div class="con">
  <?php
require("admin/cone/connection.php");
$sql="SELECT `id_hotel`, `nom_image`, `title_hotel`, `description_hotel`, `price_min` FROM `hotel`";
$res=$con->query($sql);
while($row=$res->fetch()){
  $id=$row['id_hotel'];
  $nom_image=$row['nom_image'];
  $title_hotel=$row['title_hotel'];
  $description_hotel=$row['description_hotel'];
  $price_min=$row['price_min'];
  ?>

    <div class="content-hotel1">

      <div class="hotel1 hotel2">
        <div class="img">
          <img src="admin/imagesHotel/<?php echo $nom_image;?>" alt="">
        </div><!--/.img-->
        <div class="content">
          <h2><?php echo  $title_hotel;?></h2>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <p><?php echo  $description_hotel;?></p>
           <h5>Price minimum $<?php echo   $price_min;?>/night</h5>
           <button><a href="chambrs.php?id=<?php echo  $id;?>">Check now</a></button> 
        </div><!--content-->
        <div class="clear"></div>
      </div><!--/.hotel1-->
      <div class="clear"></div>  
    </div><!--/.content-hotel1-->
    <?php
    }
    ?>
  </div><!--/.con-->
</div><!--/.hotels-->

<!-- end section hotels -->
<!-- start section footer -->
<div class="footer">
  <div class="con">
    <p class="f1">&copy; All Rights Reserved By Company <a href="index.html">HOTEL-5S</a></p>
    <div class="info">
      <h2>OUR SOCIAL MEDIA</h2>
      <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <p class="text">developer By developers <a href="#">Reda Serti <span>|</span> </a><a href="#">Oussama Sayeh <span>|</span></a><a href="#"> Meriem Tarouss</a></p>
    
  </div><!--con-->
</div><!--footer-->
<!-- end section footer -->

</body>
</html>