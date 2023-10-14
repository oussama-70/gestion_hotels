<?php
require("cone/connection.php");
 $id = $_GET['id'];
 $sql="SELECT `idAdmin`, `fullName`, `username`, `password` FROM `Admin` WHERE idAdmin=$id";
 $res=$con->query($sql);
 while($row=$res->fetch()){
     $id=$row['idAdmin'];
     $fullName=$row['fullName'];
     $username=$row['username'];
     $password=$row['password'];
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
    <link rel="stylesheet" href="cssupdateadmin/styleupdateadmin.css"/>
</head>
<body>
    <div class="main">
       <form action="" method="post">
           <h1>Update Admin</h1>
           <input type="hidden" name="id"  value="<?php echo $id;?>" />
           <input type="hidden" name="pss"  value="<?php echo $password;?>"/>
           <input type="text" name="nom" placeholder="Full Name" value="<?php echo $fullName;?>" required/><br><br>
           <input type="text" name="user" placeholder="Username" value="<?php echo $username;?>" required/><br><br>
           <input type="password" name="Current_password" placeholder="Current Password" require/><br><br>
           <input type="password" name="New_password" placeholder="New Password" require/><br><br>
           <button type="submit" name="submit">Update</button>
       </form>
    </div>
  
</body>
</html>
<?php
    require("cone/connection.php");
     if(isset($_POST["submit"])){
          $id=$_POST["id"];
         $nom=$_POST["nom"];
         $user=$_POST["user"];
         $password =$_POST["pss"];
        $cureentpas=$_POST['Current_password'];
        $newpassword =$_POST['New_password'];
        if($cureentpas==$password){
          $password1=$newpassword;
          $sql="UPDATE `Admin` SET `fullName`='$nom',`username`='$user',`password`='$password1' WHERE idAdmin = $id";
          $con->exec($sql);
          header("location:adminn.php");
        }else{
            echo("<script>alert('your current password not correct !');</script>");
        }
       
       


     }
 ?>
