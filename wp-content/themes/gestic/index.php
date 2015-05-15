<?php 
	require_once 'security.php';
    get_header(); 
?>
			<section id="whoWeAre">
				<h1>QUEM SOMOS</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="col-md-6">
					<div class="block">
						<h2>Objetivo</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block">
						<h2>Missão</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
				</div>
            </section>
           
			<section id="labResearch">
				<h1>LABORATÓRIOS E PESQUISA</h1>
				<div role="tabpanel">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active">
							<a href="#lab1" role="tab" data-toggle="tab">Laboratório 1</a>
						</li>
						<li role="presentation">
							<a href="#lab2" role="tab" data-toggle="tab">Laboratório 2</a>
						</li>
						<li role="presentation">
							<a href="#lab3" role="tab" data-toggle="tab">Laboratório 3</a>
						</li>
						<li role="presentation">
							<a href="#lab4" role="tab" data-toggle="tab">Laboratório 4</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="lab1">
							<div class="col-md-4 text-center">
								<img src="<?php bloginfo('template_url'); ?>/imgs/lab1.png" />
							</div>
							<div class="col-md-8 text-justify">
								<h2>
									Laboratório 1
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
								<h2>
									Linha de pesquisa
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="lab2">
							<div class="col-md-4 text-center">
								<img src="<?php bloginfo('template_url'); ?>/imgs/lab1.png" />
							</div>
							<div class="col-md-8 text-justify">
								<h2>
									Laboratório 2
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
								<h2>
									Linha de pesquisa
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="lab3">
							<div class="col-md-4 text-center">
								<img src="<?php bloginfo('template_url'); ?>/imgs/lab1.png" />
							</div>
							<div class="col-md-8 text-justify">
								<h2>
									Laboratório 3
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
								<h2>
									Linha de pesquisa
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="lab4">
							<div class="col-md-4 text-center">
								<img src="<?php bloginfo('template_url'); ?>/imgs/lab1.png" />
							</div>
							<div class="col-md-8 text-justify">
								<h2>
									Laboratório 4
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
								<h2>
									Linha de pesquisa
								</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
								</p>
							</div>
						</div>
						
					</div>
				</div>
				
			</section> 
           
			<section id="contact">
				<h1>Contato</h1>
				
				<div class="col-md-5">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="email" class="control-label">Email</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="name" class="control-label">Nome</label>
							<input type="email" id="name" name="name" class="form-control" placeholder="Nome">
						</div>
						<div class="form-group">
							<textarea class="form-control col-md-12" rows="6"></textarea>
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
