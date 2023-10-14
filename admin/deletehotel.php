<?php 
require("cone/connection.php");
$idhot=$_GET['id'];
$sql="DELETE FROM `hotel` WHERE `id_hotel`='$idhot'";
$con->exec($sql);
header('location:hotel.php');


?>