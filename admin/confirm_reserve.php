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
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "AccueilAdmin.php">Accueil</a></li>
			<li><a href = "Comptes.php">Comptes</a></li>
			<li class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href = "Chambre.php">Chambres</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Veuillez remplir le formulaire</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `chambre` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					<div class = "form-inline" style = "float:left;">
						<label>Prenom</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['Prenom']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Deuxieme prenom</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['Deuxieme_prenom']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>nom</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['nom']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<div class = "form-inline" style = "float:left;">
						<label>Type de chambre</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['chambre_type']?>" class = "form-control" size = "20" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Numero de chambre</label>
						<br />
						<input type = "number" min = "0" max = "999" name = "chambre_no" class = "form-control" required = "required"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Date</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "date" class = "form-control" required = "required"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Lit extra</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "lit_extra" class = "form-control"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label style = "color:#ff0000;">Le lit extra coutera 800 euros de plus.</label>
					</div>
					<br style = "clear:both;"/>
					<br />
					<button name = "ajouter_form" class = "btn btn-primary"><i class = "glyphicon glyphicon-save"></i> Envoyer</button>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>