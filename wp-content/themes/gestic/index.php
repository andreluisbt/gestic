<?php 
	require_once 'security.php';
    get_header(); 
?>
			<section id="whoWeAre">
				<?php
					$whoWeArePost = get_post(1);
					$whoWeArePost->post_title;
				?>
				<h1><?php echo $whoWeArePost->post_title; ?></h1>
				<?php echo $whoWeArePost->post_content; ?>
            </section>
           
			<section id="labResearch">
				<?php
					$args = array('category'=>2, 'order'=>'ASC');
                	$labResearchPosts = get_posts($args);
				?>
				<h1>LABORATÓRIOS E PESQUISA</h1>
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<?php
						$class = 'class="active"';
						foreach($labResearchPosts as $post){
							echo '<li role="presentation" '.$class.'>
										<a href="#labResearch_tab'.$post->ID.'" role="tab" data-toggle="tab">'.$post->post_title.'</a>
									</li>';
							$class = '';
						}
						?>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<?php
						$class = 'class="tab-pane active"';
						foreach($labResearchPosts as $post){
							echo '<div role="tabpanel" '.$class.' id="labResearch_tab'.$post->ID.'">
										'.$post->post_content.'
									</div>';
							$class = 'class="tab-pane"';
						}
						?>
					</div>
				</div>
				
			</section> 
           
			<section id="contact">
				<h1>Contato</h1>
				
				<div class="col-md-5">
					<form class="form-horizontal" method="post" action="<?php bloginfo('template_url'); ?>/services/service-contact_form.php">
						<div class="form-group msgs"></div>
						<div class="form-group">
							<label for="email" class="control-label">Email</label>
							<input type="email" required id="inputEmail" name="inputEmail" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="name" class="control-label">Nome</label>
							<input type="text" required id="inputName" name="inputName" class="form-control" placeholder="Nome">
						</div>
						<div class="form-group">
							<textarea required id="textMsg" name="textMsg" class="form-control col-md-12" rows="6"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn pull-right">
								Enviar
							</button>
						</div>
					</form>
				</div>
				<div class="col-md-7">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3981.3442845051422!2d-38.49704732272337!3d-3.7349355783936464!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1431535403588" width="100%" height="325" frameborder="0" style="border:0"></iframe>
				</div>
			</section>

<?php get_footer(); ?>
