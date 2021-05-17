<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Inscription</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('connect.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['nom_util'])){
        // removes backslashes
	$nom_util = stripslashes($_REQUEST['nom_util']);
        //escapes special characters in a string
	$nom_util = mysqli_real_escape_string($con,$nom_util);
	$mdp_util = stripslashes($_REQUEST['mdp_util']);
	$mdp_util = mysqli_real_escape_string($con,$mdp_util);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE nom_util='$nom_util'
and mdp_util='".md5($mdp_util)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['nom_util'] = $nom_util;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>nom_util/mdp_util is incorrect.</h3>
<br/>Clickez ici<a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>connexion</h1>
<form action="" method="post" name="login">
<input type="text" name="nom_util" placeholder="nom_util" required />
<input type="mdp_util" name="mdp_util" placeholder="mdp_util" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Pas encore inscrits? <a href='registration.php'>Inscrivez-vous ici</a></p>
</div>
<?php } ?>
</body>
</html>
