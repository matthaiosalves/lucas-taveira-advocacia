<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lucas_Taveira
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg" alt="Logo">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#saiba">
							Escritório
							<span class="borderBottom"></span>
						</a>
					</li>
					<li class="nav-item dropdown dropdown-hover">
						<a class="nav-link dropdown-toggle" href="#areasDeAtuacao" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Áreas de Atuação
						</a>
						<ul class="dropdown-menu">
							<span class="traceBlue"></span>
							<li><a class="dropdown-item" href="#">Direito do Consumidor</a></li>
							<li><a class="dropdown-item" href="#">Inventário e Partilha</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#artigos">
							Artigos
							<span class="borderBottom"></span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#conheca-equipe">
							Equipe
							<span class="borderBottom"></span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#entrevistas">
							Entrevistas
							<span class="borderBottom"></span>
						</a>
					</li>
					<li class="nav-item buttonContactHeader">
						<a class="nav-link" href="#contato">
							Contato
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>