<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="CVVEN\css\style.css" />
</head>
<body>
<?php
require_once 'admin/connect.php';
$con = mysqli_connect("localhost","root","","cvv");
// If form submitted, insert values into the database.
if (isset($_REQUEST['nom_util'])){
        // removes backslashes
	$nom_util = stripslashes($_REQUEST['nom_util']);
        //escapes special characters in a string
	$nom_util = mysqli_real_escape_string($con,$nom_util); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$mdp_util = stripslashes($_REQUEST['mdp_util']);
	$mdp_util = mysqli_real_escape_string($con,$mdp_util);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `util` (nom_util, mdp_util, email, dateInscrit)
VALUES ('$nom_util', '".md5($mdp_util)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Vous etes bien inscrit.</h3>
<br/>Clickez ici<a href='index.php'>Connexion</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Inscription</h1>
<form name="registration" action="" method="post">
<input type="text" name="nom_util" placeholder="nom_util" required />
<input type="email" name="email" placeholder="Email" required />
<input type="mdp_util" name="mdp_util" placeholder="mdp_util" required />
<input type="submit" name="submit" value="Créer mon compte" />
</form>
</div>
<?php } ?>
</body>
</html>
