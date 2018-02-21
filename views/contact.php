<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacteme</title>
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
		<a href="#"><img src="images/line.png" class="img-responsive" alt=""/></a>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--/header-->
<!--contact-->
<div class="contact">
<div class="container">
	<div class="contact-info">
		<div class="contact-h">
			<h1>Contactame</h1>
		</div>
							<form name="frmContacto" method="post" action="../controller/contact.php">
								<p>*Required</p>
								<input type="text" name="name" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
								<p>*Required</p>
								<input type="text" name="address" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}">
								<p>*Required</p>
								<textarea rows="10" name="message" cols="70" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';" >Mensaje</textarea>
								<input type="submit" value="Enviar">
							</form>
	</div>
</div>
</div>
<!--/contact-->
<div class="footer">
	<div class="p-button">
			
		<a href="http://www.linkedin.com/in/mariaalejandramoreno" target="_blank"><div class="sc-icons"></div></a>
			
	</div>
	<div class="copy-rights">
		<p>MARIA ALEJANDRA MORENO CONTRERAS</p>
				</div>
</div>			
</body>
</html>