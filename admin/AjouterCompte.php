<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>CVVEN</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >CVVEN</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> se déconnecter</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "AccueilAdmin.php">Accueil</a></li>
			<li class = "active"><a href = "Comptes.php">Comptes</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "Chambre.php">Chambre</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Compte / Créer un compte</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST">
						<div class = "form-group">
							<label>Nom </label>
							<input type = "text" class = "form-control" name = "name" />
						</div>
						<div class = "form-group">
							<label>Nom utilisateur </label>
							<input type = "text" class = "form-control" name = "username" />
						</div>
						<div class = "form-group">
							<label>mot de passe </label>
							<input type = "password" class = "form-control" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "AjouterCompte" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Sauvegarder</button>
						</div>
					</form>
					<?php require_once 'QueryAjouterCompte.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>