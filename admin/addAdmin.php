
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="cssAddAdmin/styleAddAdmin.css"/>
</head>
<body>
    <div class="main">
       <form action="" method="post">
           <h1>Add New Admin</h1>
           <input type="text" name="nom" placeholder="Full Name" require/><br><br>
           <input type="text" name="user" placeholder="Username" require/><br><br>
           <input type="password" name="pass" placeholder="Password" require/><br><br>
           <button type="submit" name="submit">Send</button>
       </form>
    </div>
  
</body>
</html>
<?php
    require("cone/connection.php");
     if(isset($_POST["submit"])){
         $nom=$_POST["nom"];
         $user=$_POST["user"]; 
         $pass=$_POST["pass"];
         $sql="INSERT INTO `Admin`(`fullName`, `username`, `password`) VALUES('$nom','$user','$pass')";
         $con->exec($sql);
         header("location:adminn.php");


     }
 ?>
