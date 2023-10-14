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
  <link rel="stylesheet" href="cssresevation/font-awesome.min.css">
  <link rel="stylesheet" href="cssresevation/styleresrv.css">
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
    <h2 class="titile">Reservation</h2>
  </div><!--/.overly-->
</div><!--/.home-->
<!--start section home reservation-->
<div class="reservation">
 <div class="con">
    
    <div class="form">
        <h2 class="title-reser">Fill Out The <span>Following Form</span></h2>
    
        <form action="" method="post">
            <input type="text" name="prenom" placeholder="First Name">
            <input type="text" name="nome" placeholder="Last Name">
            <input type="email" name="email" placeholder="Your Email">
            <input type="text" name="number" placeholder="Your Number">
            <input type="text" name="debut" placeholder="First Day :YYYY-MM-DD">
            <input type="text" name="fin" placeholder="Last Day :YYYY-MM-DD">
            <button type="submit" name="submit">Send</button>
        </form>
    </div><!--form-->
    <?php
     require("admin/cone/connection.php");
      $id_room=$_GET['id'];
      if(isset($_POST['submit'])){
        $prenom=$_POST['prenom'];
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $debut=$_POST['debut'];
        $fin=$_POST['fin'];
        $sql="INSERT INTO `reservation`( `first_name`, `last_name`, `email`, `number`, `first_day`, `last_day`, `id_Room`) 
        VALUES ('$prenom','$nome','$email','$number','$debut',' $fin','$id_room')";
        $con->exec($sql);
      }
     
    ?>
 
 </div><!--/.con-->
</div><!--/.reservation-->
<!--end section home reservation-->

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