<!DOCTYPE html>
<?php 
require "cone/connection.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
    <link rel="stylesheet" href="cssForget/StyleForget.css"/>
</head>
<body>
    <div class="main">
       <form action="" method="post">
           <h1>Recovery Password</h1>
           <input type="text" name="user" placeholder="Username" value="" required/><br><br>
           <input type="password" name="New_password" placeholder="New Password" required/><br><br>
           <button type="submit" name="submit">Done</button>
       </form>
    </div>
    <?php 
require "cone/connection.php";
    $user=$_POST['user'];
    $pass=$_POST['New_password'];
if(isset($_POST['submit'])){
    $sql="SELECT `idAdmin`, `fullName`, `username`, `password` FROM `admin` WHERE username='$user'";
    $res=$con->query($sql);
    $count=$res->rowCount();

    
    if($count==1){
         $sql="UPDATE `admin` SET `password`='$pass' WHERE username='$user'";
         $con->exec($sql);
         header("location:index.php");
    }else{
        echo "<script>alert(' sorry your  username is not correct !')</script>";
    }
    
}




?>
  
</body>
</html>