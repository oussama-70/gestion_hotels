
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=d+evice-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssShowRooms/StyleShowRooms.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>Rooms</title>
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
                    <a href="adminn.php" ><span>Admin</span></a>
                </li>
                <li>
                    <a href="hotel.php" class="active"><span>Room</span></a>
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
                    
                    Rooms
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
        <?php 
        require("cone/connection.php");
        $id_hot=$_GET['id'];
        $sql="SELECT `title_hotel` FROM `hotel` WHERE `id_hotel`=$id_hot";
        $res=$con->query($sql);
        $row=$res->fetch();
  
        ?> 
        <center><h1>WELCOME TO   <span><?php echo $row['title_hotel'];?></span> </h1></center>
        <table class="tbl">
                 <tr>
                  <th width='40px'>Id</th><th width='100px'>Image</th><th width='70px'>Title</th><th width='300px'>Description</th><th width='60px'>Price</th><th>sold price</th><th >Action</th>
                 </tr>
                 <?php 
                 require("cone/connection.php");
                 $id_hot=$_GET['id'];
                 $sql="SELECT `id_chambre`, `nom_image`, `title_chambre`, `description_chambre`, `price_chambre`, `sold_price`, `id_hotel_room` FROM `chambre` WHERE id_hotel_room=$id_hot" ;
                 $res=$con->query($sql);
                 $sn=1;
                 while($row=$res->fetch()){
                    $id_chambre=$row['id_chambre'];
                    $nom_image=$row['nom_image'];
                    $title_chambre=$row['title_chambre'];
                    $description_chambre=$row['description_chambre'];
                    $price_chambre=$row['price_chambre'];
                    $sold_price=$row['sold_price'];
                    $id_hot=$row['id_hotel_room'];
                    ?>
                    <tr>
                     <td><?php echo $sn++;?></td><td><img src="imagesRooms/<?php echo $nom_image;?>" width="50" height="50"></td><td><?php echo $title_chambre;?></td><td><?php echo $description_chambre;?></td><td><?php echo $price_chambre;?></td><td><?php echo  $sold_price;?></td><td><a href="UpdateRoom.php?id=<?php echo $id_chambre;?>" class="btn1">Update</a>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('are you sure to delete this room')" href="deleteRoom.php?id=<?php echo $id_chambre;?>"  class="btn1 btn2">Delete</a></td>
                     </tr>
                  
                     <?php   
                 }                
                 ?> 
                
               </table>
               <a href="addRoom.php?id=<?php echo $id_hot;?>" class="link">Add Room</a>
        </main>
 
</body>
</html>
 