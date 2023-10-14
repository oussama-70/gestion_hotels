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
    <link rel="stylesheet" href="cssContact/StyleContact.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/
    1.3.0/css/line-awesome.min.css">
    <title>Contact</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
             <h2>Hotel-5s</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="acceuill.php"><span>Dashboard</span></a>
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
                    <a href="contact.php"  class="active"><span>Contact</span></a>
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
                    
                    Contact
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
        <table  class="tbl">
                
                 <tr>
                  <th width="120px">Full Name</th><th width='200px'>email</th><th width='100px'>subject</th><th width='300px'>message</th><th width='100px'>Action</th>
                 </tr>
         <?php
          require("cone/connection.php");
          $Sql="SELECT `idContact`,`fullName`, `email`, `subject`, `message` FROM `contact`";
          $res=$con->query($Sql);
          while($row=$res->fetch()){
              $id=$row['idContact'];
              $fullName=$row['fullName'];
              $email=$row['email'];
              $subject=$row['subject'];
              $message=$row['message'];
          ?>
            <tr>
            <td><?php echo $fullName;?></td><td><?php echo $email;?></td><td><?php echo $subject;?></td><td><?php echo  $message;?></td><td><a onclick="return confirm('are you sure to delete this contact')" href="deletecontact.php?id=<?php echo $id;?>"  class="btn1 btn2">Delete</a></td>
            </tr>
          <?php
          }
         ?>
        </table>
        </main>
   
</body>
</html>