 <?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="cssindex/StyleIndex.css"/>
</head>
<body>
    <div class="main">
       <form action="" method="post">
           <h1>Login Admin</h1>
           <input type="text" name="user" placeholder="Username" class="input1" required/><br><br>
           <input type="password" name="pass" placeholder="Password" required/><br><br>
           <button type="submit" name="login">login</button><br>
           <a href="forget.php">Forget Password ?</a>
       </form>
    </div>
    <?php
     require "cone/connection.php";
     if(isset($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

     $sql="SELECT  `username`, `password` FROM `admin` where username='$user' and password='$pass'";
     $res=$con->query($sql);
     $count=$res->rowCount();
        if($count==1){
            $_SESSION['user']=$user;
            header("location:acceuill.php");
        }else{
            echo "<script>alert('your passwor or username is not correct !')</script>";
        }
     }
    ?>
</body>
</html>