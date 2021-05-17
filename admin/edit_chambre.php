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
			<li><a href = "Comptes.php">Comptes</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "Chambre.php">Chambre</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / chambre / Changer de chambre</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `chambre` WHERE `chambre_id` = '$_REQUEST[chambre_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>chambre Type </label>
							<select class = "form-control" required = required name = "chambre_type">
								<option value = "">Choisir une option</option>
								<option value = "Standard" <?php if($fetch['chambre_type'] == "Standard"){echo "selected";}?>>Les Rousses - Jura</option>
								<option value = "Superior" <?php if($fetch['chambre_type'] == "Superior"){echo "selected";}?>>Villefort - Lozere</option>
								<option value = "Super Deluxe" <?php if($fetch['chambre_type'] == "Super Deluxe"){echo "selected";}?>>Saint-Antheme - Puy de Dome</option>
								<option value = "Jr. Suite" <?php if($fetch['chambre_type'] == "Jr. Suite"){echo "selected";}?>>La Rochelle - Charente-Maritime</option>
								<option value = "Executive Suite" <?php if($fetch['chambre_type'] == "Executive Suite"){echo "selected";}?>>Crous de Champs Deluxe</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Prix </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['prix']?>" class = "form-control" name = "prix" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_chambre" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Sauvegarder</button>
						</div>
					</form>
					<?php require_once 'edit_query_chambre.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>