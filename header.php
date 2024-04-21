<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper relative<?php if(is_single() OR is_page('cursos-presenciais') OR is_page('cursos-a-distancia') OR is_page('calendario-de-cursos') OR get_post_type() == 'post'){ echo ' instrutores-page '; } ?>" >
        <header id="header" class="header-wk" >
            <nav class="header-wk__nav">
                <div class="header-wk__wrapper " id="navbarNavAltMarkup">
                     <!-- logo -->
                    <ul class="header-wk__list">
                        <li  class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" ">Início </a></li>
                        <li class="btn-nav <?php if (is_page('sobre-nos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/sobre-nos')); ?>" class=" ">Sobre nós </a></li>
                        <li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" ">Cursos Presenciais </a></li>
                        <li class="btn-nav <?php if (is_page('material-didatico')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/material-didatico')); ?>" class=" ">Área do Aluno </a></li>
                    </ul>
					<div class="logo-wrapper">
                        <a class="" href="<?php echo esc_url(site_url()); ?>">
                            <img class="logo w-full" src="<?php echo get_theme_file_uri('/images/Logo.svg')?>" alt="Logo">
                        </a>
                    </div>
					<button id="wk-hamburger" class="wk-hamburger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</button>
					<ul class="header-wk__list header-wk__list--right">
                        <!-- <li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" ">Cursos Presenciais </a></li> -->
                        <li class="btn-nav <?php if (is_page('calendario-de-cursos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/calendario-de-cursos')); ?>" class=" ">Calendario de Cursos </a></li>
                        <li class="btn-nav <?php if (is_page('instrutores') OR get_post_type() == 'instrutor') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/instrutores')); ?>" class=" ">Instrutores </a></li>
                        <li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" ">Contato </a></li>
                    </ul>

                </div>

            </nav>
        </header>
		<ul class="header-wk__list--mobile">
			<li  class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" ">Início </a></li>
			<li class="btn-nav <?php if (is_page('sobre-nos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/sobre-nos')); ?>" class=" ">Sobre nós </a></li>
			<li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" ">Cursos Presenciais </a></li>
			<li class="btn-nav <?php if (is_page('material-didatico')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/material-didatico')); ?>" class=" ">Área do Aluno </a></li>
			<li class="btn-nav <?php if (is_page('cursos-presenciais') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>" class=" ">Cursos Presenciais </a></li>
			<li class="btn-nav <?php if (is_page('calendario-de-cursos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/calendario-de-cursos')); ?>" class=" ">Calendario de Cursos </a></li>
			<li class="btn-nav <?php if (is_page('instrutores') OR get_post_type() == 'instrutor') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/instrutores')); ?>" class=" ">Instrutores </a></li>
			<li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" ">Contato </a></li>
		</ul>
