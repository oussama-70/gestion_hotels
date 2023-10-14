
<?php
require("cone/connection.php");
$id=$_GET['id'];
$sql="DELETE FROM `Admin` WHERE idAdmin =$id";
$con->exec($sql);
header("location:adminn.php");
?>