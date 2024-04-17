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

	<section class="cursos-about-us" style="background-image: url(<?php echo get_theme_file_uri( './images/bg-quem-somos-2.png' ); ?>)">
		<div class="container">
			<div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
				<div class="image-wrapper">
					<img src="<?php echo get_theme_file_uri('./images/about-us-image.png') ?>" alt="Imagem quem somos">
				</div>
				<div class="content-wrapper">
					<?php echo file_get_contents(get_theme_file_path('./images/logo-icon.svg'));?>
					<h1 class="cursos-about-us__title">Sobre a <span>Velope</span></h1>
					<p>
						Há mais de 20 anos atuando no mercado automotivo,
						com grande know how em manutenção preventiva no
						segmento de transmissões automáticas e lubrificação,
						o grupo PECMOTORS agora também possui cursos
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
							Há mais de 20 anos ensinando
						</h2>
					</div>
					<div class="number-card">
						<?php echo file_get_contents(get_theme_file_path('./images/pencil.svg'));?>
						<h2 class="number-card-title">
							Mais de X Cursos
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
    <section class="cursos text-center text-white pb-16 md:pb-32 pt-20 md:pt-44 relative" >
		<div class="container">
    	   <?php the_content(); ?>
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

	<section class="testimonials" style="<?php echo 'background-image: url(' . get_theme_file_uri('./images/testimonials-bg.jpg') . ');' ?>">
		<div class="px-12">
			<div class="testimonials__header">
				<h2 class="testimonials__title">
					O que os clientes dizem sobre a <span>Velope</span>
				</h2>
				<p class="testimonials__text">Lorem ipsum dolor sit amet consectetur. Est ultricies felis iaculis fermentum. Facilisis facilisi neque nisi risus amet convallis. Cras ornare phasellus augue nibh tristique purus donec ipsum diam. Elit ligula nulla mi eget id lectus.</p>
			</div>
			<div class="testimonials__carousel">
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

    <section class="instrutores pb-16 md:pb-32 pt-20 md:pt-44 relative" style="background-image: url(<?php echo get_theme_file_uri('./images/BackgroundSite.png')?>)">
        <div class="instrutores__wrapper relative slider slider_instrutores" data-anime="right">
            <input id="radio-instrutores" type="radio" name="slider-instrutores" title="slide1" checked="checked" class="slider__nav radio-instrutores"/>
            <input id="radio-instrutores-1" type="radio" name="slider-instrutores" title="slide2" class="slider__nav radio-instrutores"/>
            <!-- <input id="radio-instrutores-2" type="radio" name="slider-instrutores" title="slide3" class="slider__nav radio-instrutores"/> -->
            <div class="instrutores__slider-wrapper slider__inner slider__inner_instrutores">
                <div class="instrutores__slide relative slider__contents" id="slide-1">
                    <div class="instrutores__slide--wrapper">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_theme_file_uri('./images/instrutor-1.png')?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide lg:text-5xl 2xl:text-7xl md:text-4xl text-lg font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title  lg:text-6xl 2xl:text-8xl md:text-4xl text-lg font-poppins text-pec-bluelight">
                                    Ederson Luis Bilck
                                </h3>
                            </div>
                            <p class="instrutores__slide--content text-xs md:text-2xl lg:text-3xl 2xl:text-4xl  w-3/5">
                                Consultor técnico Pecmotors responsável pelo setor técnico, possui
                                mais de 8 anos de experiência no ramo de Lubrificantes, transmissões
                                e veículos híbridos, possui mais de 40 cursos de manutenção em
                                transmissões, rede can, injeção, veículos híbridos e sistemas anexos,
                                possui especializações nos Estados Unidos e México.
                            </p>
                            <a href="<?php echo esc_url(site_url('/instrutores')); ?>" class="btn-wk text-xs md:text-4xl flex items-center justify-center bg-pec-bluedark text-white rounded md:rounded-2xl py-2 px-3 md:py-6 md:px-9 w-3/5 text-center">
                                Veja Todos os Instrutores
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instrutores__slide relative slider__contents" id="slide-2">
                    <div class="instrutores__slide--wrapper">
                        <div class="instrutores__slide--content-wrapper text-white" style="background-image: url(<?php echo get_theme_file_uri('./images/instrutor-2.png')?>)">
                            <div class=" w-3/5">
                                <h3 class="font-semibold uppercase instrutores__slide lg:text-5xl 2xl:text-7xl md:text-4xl text-lg font-poppins">
                                    Nossos Instrutores:
                                </h3>
                                <h3 class="font-semibold instrutores__slide--title  lg:text-6xl 2xl:text-8xl md:text-4xl text-lg font-poppins text-pec-bluelight">
                                    Luiz Gouveia
                                </h3>
                            </div>
                            <p class="instrutores__slide--content text-xs md:text-2xl lg:text-3xl 2xl:text-4xl  w-3/5">
                                Luiz Gouveia é Gerente comercial e técnico do Grupo Pecmotors,
                                possui diversos cursos na área de gestão de pessoas e negócios,
                                possui mais de 15 anos de experiencia em comercio e atendimento,
                                especializando-se em lubrificantes e suas características,
                                aplicações e normas. Especializado em veículos híbridos e
                                elétricos assim como em transmissões automáticas.
                            </p>
                            <a href="<?php echo esc_url(site_url('/instrutores')); ?>" class="btn-wk text-xs md:text-4xl flex items-center justify-center bg-pec-bluedark text-white rounded md:rounded-2xl py-2 px-3 md:py-6 md:px-9 w-3/5 text-center">
                                Veja Todos os Instrutores
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instrutores__slide relative slider__contents" id="slide-3">
                    3
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
