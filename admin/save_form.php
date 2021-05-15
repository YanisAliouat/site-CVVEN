<?php
	require_once 'connect.php';
	if(ISSET($_POST['ajouter_form'])){
		$chambre_no = $_POST['chambre_no'];
		$date = $_POST['date'];
		$lit_extra = $_POST['lit_extra'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `chambre_no` = '$chambre_no' && `status` = 'enregistrement'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('chambre non disponible')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `chambre` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['prx'] * $date;
			$total2 = 800 * $lit_extra;
			$total3 = $total + $total2;
			$paiement = date("Y-m-d", strtotime($fetch['enregistrement']."+".$date."Nombre de jours"));
			$conn->query("UPDATE `transaction` SET `chambre_no` = '$chambre_no', `date` = '$date', `lit_extra` = '$lit_extra', `status` = 'enregistrement', `temps_enregistrement` = '$time', `paiement` = '$paiement', `facture` = '$total3' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:Enregistrement.php");
		}
	}
?>