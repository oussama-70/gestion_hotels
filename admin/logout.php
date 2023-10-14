<?php 
session_start();
require "cone/connection.php";
session_destroy();
header("location:index.php");

?>