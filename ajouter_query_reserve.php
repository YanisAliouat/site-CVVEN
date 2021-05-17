<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['ajouter_client'])){
		$Prenom = $_POST['Prenom'];
		$Deuxieme_prenom = $_POST['Deuxieme_prenom'];
		$nom = $_POST['nom'];
		$adresse = $_POST['adresse'];
		$numero_tel = $_POST['numero_tel'];
		$enregistrement = $_POST['dateDebut'];
		$conn->query("INSERT INTO `client` (Prenom, Deuxieme_prenom, nom, adresse, numero_tel) VALUES('$Prenom', '$Deuxieme_prenom', '$nom', '$adresse', '$numero_tel')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `client` WHERE `Prenom` = '$Prenom' && `nom` = '$nom' && `numero_tel` = '$numero_tel'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `enregistrement` = '$enregistrement' && `chambre_id` = '$_REQUEST[chambre_id]' && `status` = 'attente'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($enregistrement < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Doit etre une date valide')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Date non disponible </label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'attente'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['enregistrement']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($client_id = $fetch['guest_id']){
							$chambre_id = $_REQUEST['chambre_id'];
							$conn->query("INSERT INTO `transaction`(guest_id, chambre_id, status, enregistrement) VALUES('$client_id', '$chambre_id', 'attente', '$enregistrement')") or die(mysqli_error());
							header("location:reponse_reserve.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
?>