<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sobre mi</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"><html>

		<!--bootstarp-css-->
		<link href="http://localhost/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--/bootstarp-css -->
		<!--css-->
		<link rel="stylesheet" href="http://localhost/web/css/style.css" type="text/css" media="all" />
		<!--/css-->
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,300,700' rel='stylesheet' type='text/css'>
		<!--fonts-->
		<!--js-->
		<script src="http://localhost/web/js/jquery.min.js"></script>
		<!--/js-->
	</head>
<body>
<!--header-->
<?php 
	include_once("../templates/header.php") 
?>
	<div class="line">
		<a href="#"><img src="http://localhost/web/images/line.png" class="img-responsive" alt=""/></a>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--/header-->
<!--about-->
<div class="about">
	<div class="container">
	<div class="about-a">
		<ul class="about-info">
			<!--<li class="about-grid-info">
				<a href="#"><img src="http://localhost/web/images/bs-man.png" class="img-responsive" alt=""/></a>
			</li>-->
			<li class="athor-name">
				<div class="athe"></div>
				<div class="fotografia"><img src="http://localhost/web/images/foto.jpg" alt=""></div>
				<h1><span>María Alejandra Moreno Contreras</span></h1>
				<h2><span>Desarrollador Web PHP (Back-End y Front-End).</span></h2>
				<div class="clearfix"> </div>
			</li>
					<div class="clearfix"> </div>
		</ul>
		<br><br>
		<div class="about-ps">
			<div class="about-us">
				<p>Desarrollador Web con experiencia en Back-End (PHP, MySQL) y Front-End (JavaScript, JQuery, Bootstrap, Responsive Web Design, Maquetación HTML5 CSS2-3, Photoshop).</p><br>
				<p class="colortext">Especialidades: PHP, HTML5, CSS3, Framework PHP Laravel, Prestashop, Programación Orientada a Objetos (POO), Patrón de Diseño (MVC), CSS, JavaScript, AJAX, JQuery, Subversión (SVN), Git, MySQL.</p> <br>
				
				<p>E-commerce Retail Sale</p> </div> 
			</div>
		</div>
	</div>
</div>
<!--/about-->
<?php 
	include_once("../templates/footer.php") 
?>
</body>
</html>