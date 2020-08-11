<?php
/*
template name: Ancho completo - Inicio
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <!-- Sustituyo el 'lang="es"' por ese llamado de wordpress donde obtiene el atributo de lenguaje de la instalación del wordpress. |
         I substitute the 'lang = "is"' for that wordpress call where it gets the language attribute of the wordpress installation-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
            <!-- Sustituyo el "uft-8" por la función que trae la información de la instalacion de wordpress. |
            I substitute the "uft-8" for the function that brings the information of the wordpress installation.-->
    <meta name="description" content="Empresa de dasarrollo de páginas web, tiendas online con diseño moderno, seguras y profesionales."/>
    <meta name="author" content="Susana Piñero"/>
    <meta name="keywords" content="desarrollo web, páginas web, e-commerce, ecommerce, tiendas online, store."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones de cabecera. |
         I call the script to load and execute all the header functions.-->
		<title> <?php wp_title(' | ', true, 'right') ?> <?php bloginfo('name'); ?> </title><!-- Susana's Theme WordPress | by Susana Piñero -->
	            <!-- Imprimo el título de wordpress, coloco un separador, verdadero para que se imprima, lo ajusto a la derecha. Con bloginfo, obtengo el titulo de la página. |
	            I print the wordpress title, I put a separator, true to be printed, I adjust it to the right. With bloginfo, I get the title of the page. -->
</head>
<body id="body" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="layoutDefault">
		<div id="layoutDefault_content">
				<main>
						<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light fixed-top">
								<div class="container">
										<a class="navbar-brand text-white" href="#">
										</a>
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<ul class="navbar-nav ml-auto mr-lg-5">
												<?php wp_nav_menu( array(
													'menu' => 'Menu-principal',
													'theme_location' => 'header-menu',
													'depth' => 2,
													'container' => '',
													'container_class' => '',
													'menu_class' => 'nav navbar-nav',
													'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
													'walker' => new wp_bootstrap_navwalker())
												);?>
											</ul>
										</div>
								</div>
						</nav>
						<header class="page-header page-header-dark bg-img-cover overlay" style='background-image: url("https://source.unsplash.com/hrlvr2ZlUNk/1500x700")'>
								<div class="page-header-content pt-10">
										<div class="container">
												<div class="row align-items-center">
														<div class="col-lg-6" data-aos="fade-up">
																<h1 class="page-header-title"><?php bloginfo('name'); ?></h1>
																<p class="page-header-text mb-5"><?php bloginfo('description'); ?> </p>
																<a class="btn btn-teal btn-marketing rounded-pill lift lift-sm" href="#">Ver más<i class="fas fa-arrow-down ml-1"></i></a>
														</div>
														<div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="50">
																<div class="card rounded-lg text-dark">
																		<div class="card-header py-4">Envíenos su solicitud!</div>
																		<div class="card-body">
																				<form>
																						<div class="form-group"><label class="small text-gray-600" for="leadCapName">Nombre completo</label><input class="form-control rounded-pill" id="leadCapName" type="text" /></div>
																						<div class="form-group"><label class="small text-gray-600" for="leadCapEmail">Correo electrónico</label><input class="form-control rounded-pill" id="leadCapEmail" type="email" /></div>
																						<div class="form-group"><label class="small text-gray-600" for="leadCapSubject">Título o asunto</label><input class="form-control rounded-pill" id="leadCapSubject" type="text" /></div>
																						<div class="form-group"><label class="small text-gray-600" for="leadCapMenssage">Título o asunto</label><textarea class="form-control" id="leadCapMenssage" rows="2" cols="80"></textarea></div>
																						<button class="btn btn-primary btn-marketing btn-block rounded-pill mt-4" type="submit">Enviar</button>
																				</form>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="svg-border-angled text-light">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor"><polygon points="0,100 100,0 100,100"></polygon></svg>
								</div>
						</header>
						<section id="global-content-fullwidth" class="cf">
							<section id="main-content" class="fullwidth">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				                <!-- Si hay posts, mientras haya posts, muestra el post -->
								<article class="post">
									<header class="post-title">
										<h1><?php the_title(); ?></h1>
				                        <!-- Muestra el título del post -->
									</header>
									<div class="post-content">
										<?php the_content(); ?>
				                        <!-- Muestra el artículo -->
									</div>
								</article>	<!-- article -->
								<?php endwhile; endif ?>
							</section><!-- /#main-content -->
<?php get_footer(); ?><!-- Call to footer partial -->
