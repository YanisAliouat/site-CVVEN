<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >CVVEN, réservation en ligne</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Accueil</a></li> |
		<li><a href = "Apropos.php">A propos de nous</a></li> |
		<li><a href = "contacts.php">Contact</a></li> |			
		<li><a href = "reservation.php">Faire une réservation</a></li> |
		
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Faire une réservation</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `chambre` WHERE `chambre_id` = '$_REQUEST[chambre_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['chambre_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "".$fetch['prix']."";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Prenom</label>
							<input type = "text" class = "form-control" name = "Prenom" required = "required" />
						</div>
						<div class = "form-group">
							<label>Nom</label>
							<input type = "text" class = "form-control" name = "Deuxieme_prenom" required = "required" />
						</div>
						<div class = "form-group">
							<label>Nom de famille</label>
							<input type = "text" class = "form-control" name = "nom" required = "required" />
						</div>
						<div class = "form-group">
							<label>Adresse</label>
							<input type = "text" class = "form-control" name = "adresse" required = "required" />
						</div>
						<div class = "form-group">
							<label>Numero</label>
							<input type = "text" class = "form-control" name = "numero_tel" required = "required" />
						</div
						<div class = "form-group">
							<label>Vos dates</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "ajouter_client"><i class = "glyphicon glyphicon-save"></i> Envoyer</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'ajouter_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>