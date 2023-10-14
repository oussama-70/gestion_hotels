<?php
require("cone/connection.php");
$îd = $_GET['id'];
$sql="DELETE FROM `chambre` WHERE `id_chambre`=$îd";
$con->exec($sql);
header("location:hotel.php");
?>