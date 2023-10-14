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
    <link rel="stylesheet" href="./cssAdminn/StyleAdminn.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>adminn</title>
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
                    <a href="adminn.php" class="active" ><span>Admin</span></a>
                </li>
                <li>
                    <a href="hotel.php" ><span>Hotel</span></a>
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
                    
                    Admin
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
            <a href="addAdmin.php" class="link">Add Admin</a>
               <table class="tbl">
                 <tr>
                  <th>id</th><th>Full Name</th><th>username</th><th colspan="2">Action</th>
                 </tr>
                 <?php
                   require("cone/connection.php");
                   $sql="SELECT `idAdmin`, `fullName`, `username` FROM `Admin`";
                   $res=$con->query($sql);
                   $sn=1;
                   while($row=$res->fetch()){
                       $id=$row['idAdmin'];
                       $fullName=$row['fullName'];
                       $username=$row['username'];
                  
                 ?>
                
        
                    <tr>
                     <td><?php echo $sn++;?></td><td><?php echo $fullName;?></td><td><?php echo $username;?></td><td><a href="UpdateAdmin.php?id=<?php echo $id;?>" class="btn1">Update</a>&nbsp;&nbsp;&nbsp;<a onclick="return confirm('are you sure to delete this admin')" href="deleteadmin.php?id=<?php echo $id;?>"  class="btn1 btn2" name="delet">Delete</a></td>
                     </tr>
                  
                  
                 <?php
                   }
                  
                 ?>
               </table>
        </main>
</body>
</html>