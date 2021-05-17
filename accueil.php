<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>CVVEN</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >CVVEN</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "accueil.php">Accueil</a></li> |
		<li><a href = "Apropos.php">A propos de nous</a></li> |
		<li><a href = "contact.php">Nous contacter</a></li> |			
		<li><a href = "reservation.php">Faire une réservation</a></li> |
		
	</ul>
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/a.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/b.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/c.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/d.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/e.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/f.jpeg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/g.png" style = "width:100%; height:450px;" />
			</div>
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Avant</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Après</span>
		</a>	
	</div>
	<br />
	<br />
	</div>
	<div class="container">
        <div class="row">
            <div class="col">
                <article>
                    <h3>Qui sommes-nous ?</h3>
                    <p>
                        Le CVVEN (Comité pour les Villages de Vacances de l'Education Nationale) est une association (fictive) régie par la loi de 1901, et qui joue le rôle de comité d'entreprise auprès de tous les agents de l'Education Nationale.
                    </p>
                    <br>
                    <h3>Où nous-trouvez ?</h3>
                    <p>
                        Nous disposons de 4 villages de vacances répartis dans toute la France : Les Rousses (Jura), La Rochelle (Charente-Maritime), Saint-Anthème (Puy-de-Dôme), et Villefort (Lozère). Pendant les congés scolaires, les villages peuvent être réservés par les agents adhérents et leur famille pour des séjours d'une ou plusieurs semaines. Ces séjours de vacances sont subventionnés en fonction du quotient familial. Les agents disposent sur place de services de restauration, d'animations, d'équipements sportifs...
                    </p>
                    <br>
                    <h3>Comment réserver ?</h3>
                    <p>
                    CVVEN est  un site de reservation du Comité pour les Villages de Vacances de l'Education Nationale. Une fois leur inscription terminer, les utilisateurs sélectionnent l’hébergement de leur choix, la réservation s’effectue quant à elle via un formulaire dédié . 
                    </p>
                </article>
            </div>
        </div>
    </div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>