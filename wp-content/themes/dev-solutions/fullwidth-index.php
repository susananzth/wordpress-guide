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

        <?php wp_head(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones de cabecera. |
         I call the script to load and execute all the header functions.-->
		<title> <?php wp_title(' | ', true, 'right') ?> <?php bloginfo('name'); ?> </title><!-- Susana's Theme WordPress | by Susana Piñero -->
	            <!-- Imprimo el título de wordpress, coloco un separador, verdadero para que se imprima, lo ajusto a la derecha. Con bloginfo, obtengo el titulo de la página. |
	            I print the wordpress title, I put a separator, true to be printed, I adjust it to the right. With bloginfo, I get the title of the page. -->
</head>
<body id="body" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="global-container">
		<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top">
				<div class="container">
						<a class="navbar-brand text-white" href="#">
							<img src="/img/0cb16f92.png" alt="Dev Solutions" title="Dev Solutions" class="logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
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
				<div class="page-header-content">
						<div class="container">
								<div class="row justify-content-center">
										<div class="col-xl-8 col-lg-10 text-center">
												<h1 class="page-header-title"><?php bloginfo('name'); ?></h1>
												<p class="page-header-text mb-5"><?php bloginfo('description'); ?> </p>
												<form class="page-header-signup">
														<div class="form-row justify-content-center">
																<div class="col-lg-6 col-md-8">
																		<div class="form-group mr-0 mr-lg-2"><label class="sr-only" for="inputSearch">Find local businesses...</label><input class="form-control form-control-solid rounded-pill" id="inputSearch" type="text" placeholder="Find local businesses..." /></div>
																</div>
																<div class="col-lg-3 col-md-4"><button class="btn btn-teal btn-block btn-marketing rounded-pill" type="submit">Search</button></div>
														</div>
												</form>
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
