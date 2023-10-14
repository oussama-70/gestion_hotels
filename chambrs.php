<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="hello this page show u hotels"/>
  <meta name="keywords" content="hotels,meknes hotel, hoteles"/>
  <title>chambrs</title>
  <!-- style tags -->
  <link rel="stylesheet" href="csshotels/font-awesome.min.css">
  <link rel="stylesheet" href="csschambrs/StyleChambrs.css">
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
    <h2 class="titile">Rooms</h2>
  </div><!--/.overly-->
</div><!--/.home-->
<!--start section chambrs-->

 <section class="package" id="package">
    <h2 class="title-hotel">Your rooms in <span>your hands</span></h2>
    <div class="box-container">
        <?php
        require("admin/cone/connection.php");
         $id_hotel=$_GET['id'];
         $sql="SELECT `id_chambre`, `nom_image`, `title_chambre`, `description_chambre`, `price_chambre`, `sold_price`, `id_hotel_room` FROM `chambre` WHERE `id_hotel_room`=$id_hotel";
         $res=$con->query($sql);
         while($row=$res->fetch()){
             $idR=$row['id_chambre'];
             $nom_image=$row['nom_image'];
             $title_chambre=$row['title_chambre'];
             $description_chambre=$row['description_chambre'];
             $price_chambre=$row['price_chambre'];
             $sold_price=$row['sold_price'];
             $id_hotel_room=$row['id_hotel_room'];
        ?>
        <div class="box">
            <img src="admin/imagesRooms/<?php echo $nom_image;?>" alt="">
            <div class="content">
                <h3><?php echo $title_chambre;?></h3>
                <p><?php echo $description_chambre;?></p>
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="pric">$<?php echo  $price_chambre;?> <span>$<?php echo  $sold_price;?></span></div>
                <button><a href="resesrvation.php?id=<?php echo $idR;?>" class="btn">reserve now</a></button>
            </div>
            

        </div><!--./ end box-->

        <?php
         }
        ?>





    </div><!--./ end box-container -->
 </section>

<!-- ./ end section chambrs-->

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