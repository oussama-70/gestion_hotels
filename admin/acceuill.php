<?php
 session_start();
 if(!isset($_SESSION['user'])){
     header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<?php 
require "cone/connection.php";
//count of admins
$sql="SELECT COUNT(`idAdmin`) FROM `admin` ";
$res=$con->query($sql);
$row=$res->fetch();
$countadmin=$row[0];
//count of reservations
$sql2="SELECT COUNT(`idRes`) FROM `reservation` ";
$res1=$con->query($sql2);
$row1=$res1->fetch();
$countreservation=$row1[0];
//count of hotels
$sql3="SELECT COUNT(`id_hotel`) FROM `hotel`";
$res2=$con->query($sql3);
$row2=$res2->fetch();
$counthotel=$row2[0];


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=d+evice-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cssDashbord/StyleAccuille.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
             <h2>Hotel-5s</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="acceuill.php" class="active"><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="adminn.php" ><span>Admin</span></a>
                </li>
                <li>
                    <a href="hotel.php"><span>Hotel</span></a>
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
                    
                    Dashboard
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
            <h3>Important <span class="unique">Informations</span></h1>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <a href="hotel.php"><h1><?php echo $counthotel ;?></h1>
                        <span>Hotels</span></a>
                    </div>
                </div>
           
            <div class="card-single">
                <div>
                    <a href="resservation.php"><h1><?php echo $countreservation ;?></h1>
                    <span>reservation</span></a>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <a href="adminn.php"><h1><?php echo $countadmin ;?></h1>
                    <span>admins</span></a>
                </div>
            </div>
        </main>
    </div> </div>
</body>
</html>
 