<!DOCTYPE html>
<html lang="en">
<head>
  <title>gestion hoteles</title>
  <!-- meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="gestion a lot hotels five stars reserve now">
  <meta name="keywords" content="hotel,reserve,hoteles, five star,client hotel,city hoteles">
  <!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&display=swap" rel="stylesheet">
<!--style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section  -->
    <div class="header">
      <div class="con">
        <a href="index.php"><h1 class="title"><span>h</span>otel-<span>5S</span></h1></a>
        <ul class="links">
          <li><a href="index.php">home</a></li>
          <li><a href="#abouatt">about</a></li>
          <li><a href="hotels.php">hotel</a></li>
          <li><a href="service.php">services</a></li>
          <li><a href="#contct">contact</a></li>
        </ul>
        <div class="clear"></div>
      </div><!--/.con-->
    </div><!--/.header-->
    <!-- end section header  -->


<!-- start section home -->
<div class="home">
  <div class="overly">
    <div class="home-content">
      <h2><span>Find</span> the perfect <span>place</span> for you</h2>
      <p>At <span>Hotels.com</span>, our mission is to help you find your happiness, the perfect place to spend a truly unforgettable vacation.</p>
      <button class="btn btn1">learn more !</button>
      <a href="hotels.php"><button class="btn btn2">get started !</button></a>
    </div><!--/.info-->
  </div><!--/.overly-->
</div><!--/.home-->
<!-- end start section home -->

<!-- start section about -->
<div class="about">
  <div class="con">
    <div class="img">
      <img src="image/about.jpeg" alt="" >
    </div>
    <div class="about-content" id="abouatt">
      <h5>WHO WE ARE</h5>
      <h2>Most Effective <span>Creative Service</span>  Provider For Companies</h2>
      <p>Hotel managers oversee all day-to-day operations and activities of a hotel facility. We perform a variety of tasks including managing everything from accounting, sales, business development, and customer service. We are also referred to as Hotel Operations Managers.</p>
      <button>Read More</button>
    </div>
    <div class="clear"></div>
    <div class="about-content-item">
      <div class="item item1">
        <i class="fa fa-map-marker"></i>
        <h4>Our Office </h4>
        <p>123 Street,meknes, MAROCCO</p>
      </div><!--/.item item1-->

      <div class="item item2">
        <i class="fa fa-envelope"></i>
        <h4>Email Us </h4>
        <p>contactour@hote.com</p>
      </div><!--/.item item1-->

      <div class="item item3">
        <i class="fa fa-phone"></i>
        <h4>Call Us </h4>
        <p>+012 345 6789</p>
      </div><!--/.item item1-->
      <div class="clear"></div>

    </div><!--/.about-content-item-->
  </div><!--/.con-->
</div><!--/.about-->
<!-- end section about -->

<!-- start section team -->
<div class="team">
  <div class="con">
    <div class="about-content part1 ">
      <h5>MEET THE TEAM</h5>
      <h2>Meet Experts of Behind Work</h2>
      <p>We are formed as a group, we carry out major projects together that have been very popular with people.</p>
      <button>Meet All Experts</button>
    </div><!--/.about-content-->
    <div class="part2">
      <div class="d1">
          <img src="hot/reda.jpeg" alt="" srcset=""> 
        <h3>Reda Serti</h3>
        <p>Designer</p>
      </div><!--/.d1-->

      <div class="d2">
          <img src="hot/meriem.jpeg" alt="" srcset=""> 
        <h3>Meriem Tarouss</h3>
        <p>Full Stack Developer</p>
      </div><!--/.d2-->

      <div class="d3">
          <img src="hot/oussama.jpeg" alt="" srcset=""> 
        <h3>Oussama Sayeh</h3>
        <p>Mobile Developer</p>
      </div><!--/.d3-->
      <div class="clear"></div>



    </div><!--/.part2-->
    <div class="clear"></div>
  </div>
</div><!--/.team-->
<!-- end section team -->

<!--start section hotel-->
<div class="hotel">
  <h2 class="tit">You can get an <span>exclusive</span> offer</h2>
  <div class="con">
  <?php
require("admin/cone/connection.php");
$sql="SELECT `id_hotel`, `nom_image`, `title_hotel`, `description_hotel`, `price_min` FROM `hotel` LIMIT 4";
$res=$con->query($sql);
while($row=$res->fetch()){
  $id=$row['id_hotel'];
  $nom_image=$row['nom_image'];
  $title_hotel=$row['title_hotel'];
  $description_hotel=$row['description_hotel'];
  $price_min=$row['price_min'];
  ?>
  <center>
    <div class="content-hotel hotel2">
      <div class="image">
        <img src="admin/imagesHotel/<?php echo $nom_image;?>" alt="">
      </div><!--/.image 1-->
      <div class="content-hotel-item">
        <h2><?php echo  $title_hotel;?></h2>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <p><?php echo  $description_hotel;?></p>
         <h5>Price from $<?php echo   $price_min;?>/night</h5>
         <a href="chambrs.php?id=<?php echo  $id;?>"><button>Check now</button></a>
      </div>
      <div class="clear"></div>
      
    </div><!--end content 1-->
</center>
<?php
}
?>
  
  </div><!--/.con -->
 

 </div><!--/.hotel -->
<!--end section hotel-->
<!-- start section contact-->
<div class="contact" >
         <div class="con">
              <h2 class="tit"  >Contact Our</h2>
            <div class="left">
             <div class="it1" >
               <i class="fa fa-map-marker"></i>
               <h4 id="contct">Our Office </h4>
               <p>123 Street,meknes, MAROCCO</p>
             </div><!--/.it1-->
             <div class="it1">
               <i class="fa fa-envelope"></i>
               <h4 >Email Us </h4>
               <p>contactour@hote.com</p>
             </div><!--/.item item2-->
             <div class="it1">
               <i class="fa fa-phone"></i>
               <h4>Call Us </h4>
               <p >+012 345 6789</p>
             </div><!--/.it3-->

            </div><!--end left-->
             
            
            <div class="right">
              <form method="post" action="">
                <div class="champ1">
                <input class="input input1" type="text" name="nom" placeholder="Your Full Name"/>
                <input class="input input2" type="email" name="email" placeholder="Your Email"/>
                </div>
               
                <div class="champ2"><input class="input input3" type="text" name="subject" placeholder="Subject"/></div> 
                <div class="champ3"><textarea class="input input4" name="message" cols="40"placeholder="Message"></textarea></div>
                <button class="btnSnd" type="submit" name="submit1">Send Message</button>
              </form>  
            </div><!--end right-->
            <div class="clear"></div>
         </div><!--/con-->
</div><!--end contact-->
<?php
require("admin/cone/connection.php");
if(isset($_POST['submit1'])){
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $sql="INSERT INTO `contact`( `fullName`, `email`, `subject`, `message`) 
  VALUES ('$nom','$email','$subject','$message')";
  $con->exec($sql);


}
?>

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
    <p class="text">developer By developers <a href="#">Reda Serti | </a><a href="#">Oussama Sayeh |</a><a href="#"> Meriem Tarouss</a></p>
    
  </div><!--con-->
</div><!--footer-->
<!-- end section footer -->

</body>
</html>
