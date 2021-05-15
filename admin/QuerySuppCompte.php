<?php
	require_once 'connect.php';
	mysql_query("DELETE FROM `chambre` WHERE `chambre_id` = '$_REQUEST[chambre_id]'") or die(mysql_error());
	header("location:Chambre.php");
?>