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
						<li><a href="deco.php"><i class = "glyphicon glyphicon-off"></i> se déconnecter</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "AccueilAdmin.php">Accueil</a></li>
			<li><a href = "Comptes.php">Compte</a></li>
			<li class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href = "Chambre.php">Chambres</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'attente'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'enregistrement'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-success" href = "reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> En attente</a>
				<a class = "btn btn-info" href = "Enregistrement.php"><span class = "badge"><?php echo $f_ci['total']?></span> Enregistrement</a>
				<a class = "btn btn-warning disabled"><i class = "glyphicon glyphicon-eye-open"></i> Paiement</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Type de chambre</th>
							<th>Numero de chambre</th>
							<th>Enregistrement</th>
							<th>Date</th>
							<th>Paiement</th>
							<th>Status</th>
							<th>Lit extra</th>
							<th>Facture</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `chambre` WHERE `status` = 'paiement'") or die(mysqli_query());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['Prenom']." ".$fetch['nom']?></td>
							<td><?php echo $fetch['chambre_type']?></td>
							<td><?php echo $fetch['chambre_no']?></td>
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['enregistrement']))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['temps_enregistrement']))."</label>"?></td>
							<td><?php echo $fetch['date']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['enregistrement']."+".$fetch['date']."Date"))."</label>"." @ "."<label>".date("h:i A", strtotime($fetch['temps_paiement']))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php if($fetch['lit_extra'] == "0"){ echo "aucun";}else{echo $fetch['lit_extra'];}?></td>
							<td><?php echo ". ".$fetch['facture'].""?></td>
							<td><label class = "">Payé</label></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
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
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>