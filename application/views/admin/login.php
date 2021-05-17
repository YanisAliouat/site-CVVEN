<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin - Connexion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/dist/css/bootstrap.css">

	<style>
		.card {
			margin: 110px 250px 120px;
			text-align: center;
		}
		.center {
			text-align: center;
		}

		body {
			background-color: #C6F1DF;
		}
		.card {
			background-color: #EBF7F2;
		}
	</style>
</head>

<body>



	<br><br><br>
	<div class="body">
		<div class="card">
			<div class="card-body">
				<div class="login col-md-4 mx-auto text-center">
					<br><br>
					<h1>Admin - Connexion</h1><br>
					<form method="post" action="<?php echo site_url('admin/login/verify') ?>">
						<div class="form-group center">
							<input type="text" name="username" placeholder="Nom d'utilisateur" class="form-control center">
						</div>
						<div class="form-group center">
							<input type="password" name="password" placeholder="Mot De Passe" class="form-control center">
						</div><br>
						<div class="form-group center">
							<input type="submit" name="submit" value="Se Connecter" class="btn btn-primary">
						</div>
						<br>
						<p><br><a href="<?php echo base_url('users/login'); ?>" class="btn btn-info">Se Connecter en tant que Utilisateur</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>