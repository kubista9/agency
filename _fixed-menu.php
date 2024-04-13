<nav class="navbar navbar-toggleable-md">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
			aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			<div class="hamburger-menu">
				  <div class="bar"></div>
			</div>
		</span>
	</button>

	<?php include('_fixed_svg_logo.php'); ?>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<div class="fixedmenu__fixer">
			<div class="mainmenu mainmenu--v2">
				<?php echo clean_custom_menus(); ?>
			</div>
		</div>
	</div>
</nav>