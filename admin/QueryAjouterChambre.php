<?php
	if(ISSET($_POST['AjouterChambre'])){
		$chambre_type = $_POST['chambre_type'];
		$prix = $_POST['prix'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `chambre` (chambre_type, prix, photo) VALUES('$chambre_type', '$prix', '$photo_name')") or die(mysqli_error());
		header("location:Chambre.php");
	}
?>