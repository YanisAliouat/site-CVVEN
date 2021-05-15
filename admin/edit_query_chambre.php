<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_chambre'])){
		$chambre_type = $_POST['chambre_type'];
		$prix = $_POST['prix'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `chambre` SET `chambre_type` = '$chambre_type', `prix` = '$price', `photo` = '$photo_name' WHERE `chambre_id` = '$_REQUEST[chambre_id]'") or die(mysqli_error());
		header("location:Chambre.php");
	}
?>