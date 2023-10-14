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
    <link rel="stylesheet" href="cssReservation/StyleReservation.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>reservation</title>
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
                    <a href="adminn.php"  ><span>Admin</span></a>
                </li>
                <li>
                    <a href="hotel.php" ><span>Hotel</span></a>
                </li>
                <li>
                    <a href="resservation.php" class="active"><span>Reservation</span></a>
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
                    
                    Reservation
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
        <table class="tbl">
                 <tr>
                 <th width="40px">ID</th> <th width="80px">First Name</th> <th width="80px">Last Name</th> <th width="300px">Email</th><th width="100px">Number</th><th>First Day</th><th>Last Day</th><th width="60px">Room</th><th>Action</th>
                 </tr>
                 <?php
                  require("cone/connection.php");
                  $sn=1;
                  $sql="SELECT `idRes`, `first_name`, `last_name`, `email`, `number`, `first_day`, `last_day`, `id_Room` 
                  FROM `reservation`";
                  $res=$con->query($sql);
                  while($row=$res->fetch()){
                    ?>
                <tr>
                 <td><?php echo $sn++?></td> <td><?php echo $row['first_name'];?></td> <td><?php echo $row['last_name'];?></td> <td><?php echo $row['email'];?></td><td><?php echo $row['number'];?></td><td><?php echo $row['first_day'];?></td><td><?php echo $row['last_day'];?></td><td><?php echo $row['id_Room'];?></td><td><a onclick="return confirm('are you sure to delete this reservation')" href="deleteresevation.php?id=<?php echo $row['idRes'];?>"  class="btn1 btn2">Delete</a></td>
                 </tr>
                    <?php
                  }
                 ?>
  
         </table>
        </main>
</body>
</html>