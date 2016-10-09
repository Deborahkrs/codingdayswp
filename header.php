<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">``
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<!-- Vous pouvez mettre ici toutes les infos que vous voulez retrouver dans le header de toutes vos pages  -->
		<img src="logo-starter-2016-02.png" alt="Logo Starter" id="starter">
		<nav class="menu">
			<ul>
				<li class="categorie">
					<a href="http://starter.theschoolab.com/starter/">Le programme</a>
				</li>
				<li class="categorie">
					<a href="http://starter.theschoolab.com/les-startups/">Les startups</a>
				</li>
				<li class="categorie">
					<a id="mentors" href="http://starter.theschoolab.com/les-mentors/"> Mentors et Experts</a>
				</li>
			</ul>
		</nav>
	</header>
