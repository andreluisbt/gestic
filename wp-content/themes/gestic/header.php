<?php 
	require_once 'security.php'; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>GESTIC</title>
		<?php wp_head(); ?>
	</head>

	<body>
		<div id="wrapPage" class="container">
			
			<header>
				<img src="<?php bloginfo('template_url'); ?>/imgs/logo.png" />
				<nav>
					<ul>
						<li>
							<a href="#whoWeAre">Quem somos</a>
						</li>
						<li>
							<a href="#labResearch">Laboratórios e pesquisas</a>
						</li>
						<li>
							<a href="#">Projetos</a>
						</li>
						<li>
							<a href="#contact">Contato</a>
						</li>
					
					</ul>
				</nav>
			</header>
			
            <section id="banner">
            	<img src="<?php bloginfo('template_url'); ?>/imgs/banner.png" class="img-responsive" />
            </section>