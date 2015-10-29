<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dewi Multi-purpose theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/style.css" rel="stylesheet">

	<!--  <link href="css/bootstrap.css" rel="stylesheet" />	-->	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>
		<nav div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<ul class="social-network">
					<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
					<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
					<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
					<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
					<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
				</ul>
				<ul class="info">
					<li><p><i class="fa fa-phone"></i>+4227 5663</p></li>
					<li><a href="#"><i class="fa fa-envelope"></i>contacto@casamientos-sauzza.com</a></li>
				</ul>
			</div>
		</nav>
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Menu navegacion</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>C</span>asa-<span>S</span>auzza</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a onclick="Mostrar('Home')">Home</a></li>
								<li role="presentation"><a onclick="Mostrar('CrearCasamiento')">Hacer Casamiento</a></li>
								<li role="presentation"><a onclick="MostrarLogin()" >Login</a></li>
								<li role="presentation"><a onclick="Mostrar('adminPanel')">Admin</a></li>
								<li role="presentation"><a onclick="Mostrar('Contacto')">Contacto</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
   
    <!--<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="img/slider/5.jpg" alt=""/></li>								
				<li><img src="img/slider/6.jpg" alt=""/></li>	
				<li><img src="img/slider/7.jpg" alt=""/></li>			
			</ul>
		</div>	
    </div>-->
	
    
	<div class="container">
		<div class="row" id="principal">
			<?php include("parts/home.php"); ?>				
			<!--<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="align-center">
						<h4>Quick Support</h4>					
						<div class="icon">
							<i class="fa fa-heart-o fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
					<div class="align-center">
						<h4>Web Design</h4>				
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
					<div class="align-center">
						<h4>Easy Customize</h4>					
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>-->

		</div>
	</div>
    

   <!-- <div class="box">
		<div class="container">
			<div class="row">			
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="img/team/1.jpg" alt="" >			
							<div class="caption">
								<h3>John Doe</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="img/team/2.jpg" alt="" >			
							<div class="caption">
								<h3>Hidayah</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="img/team/4.jpg" alt="" >			
							<div class="caption">
								<h3>John Doe</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>				
			</div>	
		</div>
    </div>-->
    
	<!--<div class="jumbotron">
		<h1>We can <span>help build your</span> project!</h1>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Get it now</a></p>
	</div>-->
	
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a onclick="Mostrar('Home')"><h1><span>C</span>asamientos <span>S</span>auzza</h1></a>
						<p>Somos una empresa destinada a complacer a nuestros clientes para que puedan realizar su sueño de casarse sin tener preocupación alguna. .</p>
						
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Seguinos en..</h3>
						<ul>
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i> Facebook</a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i> Twitter</a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i> Linkedin</a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i> Pinterest</a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i> Google+</a></li>
						</ul>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Quedate en contacto.</h3>
						<a href="#"><p><i class="fa fa-envelope"></i> consulta@casamientos-sauzza.com</p></a>
						<p><i class="fa fa-phone"></i>  +42272434/p>
						<p><i class="fa fa-home"></i> Av.Mitre 771 Cod.Postal 1870<br> 
							Avellaneda, Buenos Aires,
							Argentina</p>
					</div>
				</div>
			</div>
		</div>
			
		<div class="last-div">
			<div class="container">
			<!--	<div class="row">
					<div class="copyright">
						© 2014 Dewi Multi-purpose theme | <a href="http://bootstraptaste.com">Bootstraptaste</a>
					</div>
                     
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Dewi
                    
					<nav class="foot-nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>-->
			</div>
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
		</div>		
	</footer>
   
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/funcionesAjax.js"></script>
	<script src="js/funcionesABM.js"></script>
	<script src="js/funcionesLogin.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery.metisMenu.js"></script>
	<script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="js/custom.js"></script>

	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>