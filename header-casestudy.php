<!DOCTYPE html>
<html lang="en">
<head>

	<?php get_template_part('head-scripts'); ?>

</head>
<body <?php body_class('casestudy '. $GLOBALS['casestudy']); ?>>

<!-- FB sdk -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/sk_SK/sdk.js#xfbml=1&version=v2.6";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!-- //FB sdk -->

<div id="wrapper">

	<?php get_template_part('_side-social'); ?>

	<div class="fixedmenu">
		<div class="content-wrapper">

			<?php get_template_part('_fixed-menu'); ?>

		</div>
	</div>
