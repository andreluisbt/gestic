<?php 
	require_once 'security.php'; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>GESTIC</title>
		
		<?php wp_head(); ?>
		
		<!--
		<script type="text/javascript" src="lib/jquery-2.1.3/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="lib/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="lib/font-awesome-4.3.0/css/font-awesome.min.css">
		
		<script type="text/javascript" src="lib/jquery-mask/dist/jquery.mask.min.js"></script>
		
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet/less" type="text/css" href="style/less/main.less" />
		
		<script type="text/javascript" src="lib/less-2.5.0/less.min.js"></script>
		-->
	</head>

	<body>
		<div id="wrapPage" class="container">
			
			<header>
				<img src="<?php bloginfo('template_url'); ?>/imgs/logo.png" />
				<nav>
					<ul>
						<li>
							<a href="#">Quem somos</a>
						</li>
						<li>
							<a href="#">Laboratórios e pesquisas</a>
						</li>
						<li>
							<a href="#">Projetos</a>
						</li>
						<li>
							<a href="#">Publicaçãoes</a>
						</li>
						<li>
							<a href="#">Contato</a>
						</li>
					
					</ul>
				</nav>
			</header>
			
            <section id="banner">
            	<img src="<?php bloginfo('template_url'); ?>/imgs/banner.png" class="img-responsive" />
            </section>