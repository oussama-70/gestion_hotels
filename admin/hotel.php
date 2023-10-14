<?php
 session_start();
 if(!isset($_SESSION['user'])){
     header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccHotel/StyleHotel.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>hotel</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
             <h2>Hotel-5s</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="acceuill.php" ><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="adminn.php"><span>Admin</span></a>
                </li>
                <li>
                    <a href="hotel.php" class="active"><span>Hotel</span></a>
                </li>
                <li>
                    <a href="resservation.php"><span>Reservation</span></a>
                </li>
                <li>
                    <a href="contact.php"><span>Contact</span></a>
                </li>
                <li>
                    <a href="logout.php"><span>Log out</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
         
                <h2>
                    Hotel
                </h2>
               <div class="user-wrapper">
                 <img src="../images/c4.jpg" alt="" width="40px" height="40px">
                 <div>
                    <h4>Hassan El ghalami</h4>
                    <small>Super admin</small>
                 </div>
               </div>
            
        </header>
        <main>
        <a href="addHotel.php" class="link">Add Hotel</a>
        <table  class="tbl">
                 <tr>
                  <th width='40px'>Id</th><th width='100px'>Image</th><th width='70px'>Title</th><th width='300px'>Description</th><th width='60px'>Price</th><th >Action</th>
                 </tr>
                 <?php 
                 require("cone/connection.php");
                 $sql="SELECT `id_hotel`, `nom_image`, `title_hotel`, `description_hotel`, `price_min` FROM `hotel`" ;
                 $res=$con->query($sql);
                 $sn=1;
                 while($row=$res->fetch()){
                    $idhot=$row['id_hotel'];
                    $nomimg=$row['nom_image'];
                    $titlehot=$row['title_hotel'];
                    $description=$row['description_hotel'];
                    $pricemin=$row['price_min'];
                    ?>
                    <tr>
                     <td><?php echo $sn++;?></td><td><img src="imagesHotel/<?php echo $nomimg;?>" width="50" height="50"></td><td><?php echo $titlehot;?></td><td><?php echo $description;?></td><td><?php echo $pricemin;?></td><td><a href="Updatehotel.php?id=<?php echo $idhot;?>" class="btn1">Update</a>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('are you sure to delete this hotel')" href="deletehotel.php?id=<?php echo $idhot;?>"  class="btn1 btn2" name="delet">Delete</a>&nbsp;&nbsp;&nbsp;<a href="showRooms.php?id=<?php echo $idhot;?>" class="btn1 btn3">show rooms</a></td>
                     </tr>
                  
                     <?php   
                 }                
                 ?> 
                
               </table>
        </main>
  
</body>
</html>