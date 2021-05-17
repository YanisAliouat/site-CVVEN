<?php
session_start();
if(!isset($_SESSION["nom_util"])){
header("Location: index.php");
exit(); }
?>