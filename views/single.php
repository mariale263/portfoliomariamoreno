<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Proyecto Cambiando Hábitos con Mariale</title>
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
		<a href="#"><img src="../images/line.png" class="img-responsive" alt=""/></a>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--/header-->
<!--single-->
<div class="single">
	<div class="container">
		<div class="col-md-8 single-info">
			<a href="https://cambiandohabitosconmariale.000webhostapp.com/" target="_blank"><img src="http://localhost/web/images/imgportada2.png" class="img-responsive" alt=""/></a>
		</div>
		<div class="col-md-4 single-into">
			<div class="proje">
				<div class="teuh">
					<div class="project">
							<h2>Cambiando Hábitos con Mariale</h2>
							<p>Desarrollo web, Bootstrap</p>
							<div class="clearfix"> </div>
					</div>
						
							<div class="clearfix"> </div>
				</div>
						<div class="nec">
							<p>Instalación, configuración, diseño y desarrollo en Bootstrap 3. <br>
							Tecnologías que se he usado:
								<ul> 
									<li>Maquetación HTML5</li>
									<li>CSS3</li>
									<li>Bootstrap</li>
									<li>JavaScrip</li>
									<li>Jquery</li>									
								</ul>
							</p> 
						</div>
						
						<div class="clearfix"> </div>
			</div>
			<form class="form-1 formAncho" name="frmContacto" method="post" action="../controller/single.php">
					<textarea name="message" rows="10" cols="70" onfocus="if(this.value == 'Write comment here...') this.value='';" onblur="if(this.value == '') this.value='Write comment here...';">Escriba su comentario aqui...</textarea>
					<input name="name" type="text" class="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input name="email" type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="submit" value="Enviar">
			</form>
			
			<div class="ght">
			<img src="../images/l-aaa.png">
			<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
</div>
<!--/single-->
<?php 
	include_once("../templates/footer.php") 
?>			
</body>
</html>