<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" id="slider-custom" data-anime="top">
        <?php echo do_shortcode('[ssslider id="5"]') ?>
    </section>

	<!-- Do Básico ao Avançado -->
	<section class="text-basic-from-advanced">
		<div class="container text-basic-from-advanced__container">
			 <p class="header-sub-title" id="word"></p><p class="header-sub-title blink">|</p>
			<!-- Do <span>básico</span> ao <span>avançado</span>... -->
			<!-- presencial <span>ou</span> online... -->
			<!-- a melhor <span>escola</span> para sua <span>profissionalização</span>... -->
		</div>
	</section>

	<section class="cursos-about-us" style="background-image: url(<?php echo get_theme_file_uri( './images/quem-somos-bg-2.png' ); ?>)">
		<div class="container">
			<div class="grid grid-cols-1 gap-24 lg:grid-cols-2">
				<div class="image-wrapper" data-anime="left">
					<img src="<?php echo get_theme_file_uri('./images/quem-somos-image.png') ?>" alt="Imagem quem somos">
				</div>
				<div class="content-wrapper" data-anime="right">
					<?php echo file_get_contents(get_theme_file_path('./images/logo-icon.svg'));?>
					<h1 class="cursos-about-us__title">Sobre a <span>Velope</span></h1>
					<p>
						Há mais de 20 anos atuando no mercado automotivo,
						com grande know how em manutenção preventiva no
						segmento de transmissões automáticas e lubrificação,
						a Velope agora também possui cursos
						para aprimorar ainda mais a qualificação técnica.
					</p>
					<a href="/sobre-nos" class="wk-btn">
						Saiba Mais
						<?php echo file_get_contents(get_theme_file_path('./images/arrow-right.svg'));?>
					</a>
				</div>
				<div class="cursos-about-us__numbers col-span-2">
					<div class="number-card">
						<?php echo file_get_contents(get_theme_file_path('./images/time.svg'));?>
						<h2 class="number-card-title">
							Há mais de <span class="count-up">20</span> anos ensinando
						</h2>
					</div>
					<div class="number-card">
						<?php echo file_get_contents(get_theme_file_path('./images/pencil.svg'));?>
						<h2 class="number-card-title">
							Mais de <span class="count-up">500</span> Alunos
						</h2>
					</div>
					<div class="number-card">
						<?php echo file_get_contents(get_theme_file_path('./images/pin.svg'));?>
						<h2 class="number-card-title">
							Cursos presenciais e online
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- cursos -->
    <section class="cursos bg-white text-center text-white pb-16 md:pb-32 pt-20 md:pt-44 relative" >
		<div class="container">
    	   <?php the_content(); ?>
		</div>
    </section>

	<section class="testimonials" style="<?php echo 'background-image: url(' . get_theme_file_uri('./images/testimonials-bg.jpg') . ');' ?>">
		<div class="px-28">
			<div class="testimonials__header" data-anime="bottom">
				<h2 class="testimonials__title" data-anime="bottom">
					O que os clientes dizem sobre a <span>Velope</span>
				</h2>
				<p class="testimonials__text">Lorem ipsum dolor sit amet consectetur. Est ultricies felis iaculis fermentum. Facilisis facilisi neque nisi risus amet convallis. Cras ornare phasellus augue nibh tristique purus donec ipsum diam. Elit ligula nulla mi eget id lectus.</p>
			</div>
			<div class="testimonials__carousel"  data-anime="top">
				<div class="testimonial__wrapper">
					<div class="testimonial">
						<img src="<?php
						echo get_theme_file_uri('./images/depoimentos-1.jpg');
						?>" alt="">
						<p class="testimonial__text">
							Lorem ipsum dolor sit amet consectetur. Nullam faucibus amet lobortis praesent phasellus. Feugiat eu pharetra pellentesque nunc mauris sodales sem.
						</p>
						<div class="testimonial__stars">
							<?php
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							?>
						</div>
						<div class="testimonial__name">
							Fulano Tal | Empresa tal
						</div>
					</div>
				</div>
				<div class="testimonial__wrapper">
					<div class="testimonial">
						<img src="<?php
						echo get_theme_file_uri('./images/depoimentos-1.jpg');
						?>" alt="">
						<p class="testimonial__text">
							Lorem ipsum dolor sit amet consectetur. Nullam faucibus amet lobortis praesent phasellus. Feugiat eu pharetra pellentesque nunc mauris sodales sem.
						</p>
						<div class="testimonial__stars">
							<?php
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							?>
						</div>
						<div class="testimonial__name">
							Fulano Tal | Empresa tal
						</div>
					</div>
				</div>
				<div class="testimonial__wrapper">
					<div class="testimonial">
						<img src="<?php
						echo get_theme_file_uri('./images/depoimentos-1.jpg');
						?>" alt="">
						<p class="testimonial__text">
							Lorem ipsum dolor sit amet consectetur. Nullam faucibus amet lobortis praesent phasellus. Feugiat eu pharetra pellentesque nunc mauris sodales sem.
						</p>
						<div class="testimonial__stars">
							<?php
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							?>
						</div>
						<div class="testimonial__name">
							Fulano Tal | Empresa tal
						</div>
					</div>
				</div>
				<div class="testimonial__wrapper">
					<div class="testimonial">
						<img src="<?php
						echo get_theme_file_uri('./images/depoimentos-1.jpg');
						?>" alt="">
						<p class="testimonial__text">
							Lorem ipsum dolor sit amet consectetur. Nullam faucibus amet lobortis praesent phasellus. Feugiat eu pharetra pellentesque nunc mauris sodales sem.
						</p>
						<div class="testimonial__stars">
							<?php
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							echo file_get_contents(get_theme_file_path('./images/star.svg'));
							?>
						</div>
						<div class="testimonial__name">
							Fulano Tal | Empresa tal
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="marcas">
		<div class="container">
			<h2 class="marcas__title" data-anime="top">
				Confira nossos parceiros:
			</h2>
			<div class="marcas__carrousel max-w-full" data-anime="bottom">
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/1testimonials.png')?>" alt="Marca 1">
				</div>
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/2testimonials.png')?>" alt="Marca 2">
				</div>
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/3testimonials.png')?>" alt="Marca 3">
				</div>
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/4testimonials.png')?>" alt="Marca 4">
				</div>
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/5testimonials.png')?>" alt="Marca 5">
				</div>
				<div class="marca">
					<img src="<?php echo get_theme_file_uri('./images/6testimonials.png')?>" alt="Marca 6">
				</div>
			</div>
		</div>
	</section>


    <section class="instrutores " style="background-image: url(<?php echo get_theme_file_uri('./images/fundoInstrutor.png')?>)">
		<h2 class="instrutores__title text-orange my-28 text-8xl text-center font-philosopher font-black">Nossos Instrutores</h2>
		<div class="instrutores-carousel">
			<div class="instrutor-wrapper">
				<div class="instrutor">
					<h3 class="instrutor-title">Ederson Luis Bilck</h3>
					<p class="instrutor-description">
						Consultor técnico Velope responsável pelo setor técnico, possui
						mais de 8 anos de experiência no ramo de Lubrificantes, transmissões
						e veículos híbridos, possui mais de 40 cursos de manutenção em
						transmissões, rede can, injeção, veículos híbridos e sistemas anexos,
						possui especializações nos Estados Unidos e México.
					</p>
					<a href="/instrutores/" class="instrutor-btn">Veja todos os instrutores</a>
				</div>
				<img data-anime="right" src="<?php echo get_theme_file_uri('./images/instructor-1.png') ?>" alt="" srcset="" class="instrutor-img">
			</div>
			<div class="instrutor-wrapper">
				<div class="instrutor">
					<h3 class="instrutor-title">Luiz Gouveia</h3>
					<p class="instrutor-description">
						Luiz Gouveia é Gerente comercial e técnico Velope,
						possui diversos cursos na área de gestão de pessoas e negócios,
						possui mais de 15 anos de experiencia em comercio e atendimento,
						especializando-se em lubrificantes e suas características,
						aplicações e normas. Especializado em veículos híbridos e
						elétricos assim como em transmissões automáticas.
					</p>
					<a href="/instrutores/" class="instrutor-btn">Veja todos os instrutores</a>
				</div>
				<img  data-anime="right" src="<?php echo get_theme_file_uri('./images/instructor-2.png') ?>" alt="" srcset="" class="instrutor-img">
			</div>
		</div>
    </section>

	<section class="cursos-about-us contact pb-32" style="">
		<div class="container">
			<div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
				<div class="image-wrapper" data-anime="left">
					<img src="<?php echo get_theme_file_uri('./images/contato.png') ?>" alt="Imagem quem somos">
				</div>
				<div class="content-wrapper" data-anime="right">
					<h2 class="contact-title">
						Fale conosco!
					</h2>
					 <?php echo do_shortcode('[wpforms id="108"]') ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
