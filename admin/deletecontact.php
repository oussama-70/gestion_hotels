<?php
require("cone/connection.php");
$id=$_GET['id'];
$sql="DELETE FROM `contact` WHERE idContact=$id";
$con->exec($sql);
header("location:contact.php");

?>