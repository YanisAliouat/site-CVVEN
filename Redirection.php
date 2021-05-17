<?php
session_start();
if(!isset($_SESSION["nom_util"])){
header("Location: accueil.php");
exit(); }
?>
<html>
<p></p>
</html>
