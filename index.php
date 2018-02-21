<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio Maria Moreno</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstarp-css-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--/bootstarp-css -->
	<!--css-->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--/css-->
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,300,700' rel='stylesheet' type='text/css'>
	<!--fonts-->
	<!--js-->
	<script src="js/jquery.min.js"></script>
	<!--/js-->
	<!-- animated-css -->
			<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
			<script src="js/wow.min.js"></script>
			<script>
			new WOW().init();
			</script>
	<!-- animated-css -->
</head>
<body>
<!--header-->
<?php 
	include_once("templates/header.php") 
?>
	<div class="line">
		<a href="#"><img src="images/line.png" class="img-responsive" alt=""/></a>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--/header-->
<!--portfolio-->
<ul id="filters">
					<li><span class="filter wow bounceIn" data-wow-delay="0.4s" data-filter="app card icon logo web">PORTFOLIO</span></li> <!--Le he eliminado el active, se lo coloque al que estaba abajo comentado-->
					<!--<li><span class="filter active wow bounceIn" data-wow-delay="0.4s" data-filter="web">PORTAFOLIO</span></li>-->
					<!--<li><span class="filter wow bounceIn" data-wow-delay="0.4s" data-filter="icon">PRINT</span></li>-->
				</ul>
<div class="portfolio">
  <div class="portfolio-info">
	<div class="container">
		
				<div id="portfoliolist">
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="http://localhost/web/views/single.php" class="b-link-stripe b-animate-go">
								 <img src="images/miniportada2.png" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Cambiando</h2>
								  <p class="b-animate b-from-left    b-delay03 ">Habitos con</p>
								  <p class="b-animate b-from-left    b-delay03 ">Mariale</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="http://localhost/web/views/single2.php" class="b-link-stripe b-animate-go">
								 <img src="images/imgmini1.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Proyecto</h2>
								  <p class="b-animate b-from-left    b-delay03 ">Cinema</p>
								</div>
							</a>
		                </div>
					</div>
					<!--<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/3.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/4.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/5.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/6.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/7.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn capt" data-wow-delay="0.4s">		
							<a href="single.php" class="b-link-stripe b-animate-go">
								 <img src="images/8.jpg" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Project Name</h2>
								  <p class="b-animate b-from-left    b-delay03 ">View</p>
								</div>
							</a>
		                </div>
					</div>-->
					
					<div class="clearfix"></div>	
				</div>
				<!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();	
					});	
					</script>
				<!-- Gallery Script Ends -->
			<div class="clearfix"></div>
	</div>
	</div>
</div>	
<?php 
	include_once("templates/footer.php") 
?>
</body>
</html>