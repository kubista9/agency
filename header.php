<!DOCTYPE html>
<html lang="en">
<head>

	<?php get_template_part('head-scripts'); ?>

</head>
<body <?php body_class(); ?>>

<!-- FB sdk -->
<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {-->
<!--		var js, fjs = d.getElementsByTagName(s)[0];-->
<!--		if (d.getElementById(id)) return;-->
<!--		js = d.createElement(s); js.id = id;-->
<!--		js.src = "//connect.facebook.net/sk_SK/sdk.js#xfbml=1&version=v2.6";-->
<!--		fjs.parentNode.insertBefore(js, fjs);-->
<!--	}(document, 'script', 'facebook-jssdk'));</script>-->
<!-- //FB sdk -->

<div id="wrapper">

	<div class="top-logo-wrapper">
		<a href="/" class="navbar-brand">Kremsa Digital</a>
	</div>

	<?php // get_template_part('_side-social'); ?>

	<div class="fixedmenu white">
		<div class="content-wrapper">

			<?php get_template_part('_fixed-menu'); ?>

		</div>
	</div>