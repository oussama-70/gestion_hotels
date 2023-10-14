<?php 
require("cone/connection.php");
$id_reservation=$_GET['id'];
$sql="DELETE FROM `reservation` WHERE `idRes`=$id_reservation";
$con->exec($sql);
header('location:resservation.php');


?>