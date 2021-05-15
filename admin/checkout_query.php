<?php
	require_once 'connect.php';
	$time = date("H:i:s", strtotime("+8 HOURS"));
	$conn->query("UPDATE `transaction` SET `temps_enregistrement` = '$time', `status` = 'paiement' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	header("location:checkout.php");
?>