<?php
try{
    $con = new pdo("mysql:host=localhost;dbname=gestionhotel","root","");

}catch(Exception $e){
    die("erour".$e->getMessage());
    exit;
}
?>