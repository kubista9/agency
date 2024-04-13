<?php /* Template Name: Products */ ?>

<?php
get_header();
?>

<?php include('_hero.php') ?>

<div class="content-wrapper">

	<div class="blog-listing__item product-listing">
		<div class="row">
			<div class="col1 col-sm-12">
				<div class="shadow-box normal">
					<div class="shadow-box__content">
						<div class="shadow-box__content--overflowhidden">
							<a class="blog-listing__item__picbox" href="https://boosterberg.com/" target="_blank">
								<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/products/boosterberg.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col2 col-sm-12">
				<p>Šetrite čas pri propagovaní príspevkov na Facebooku a optimalizujte rozpočet na reklamu. Boosterberg vie uľahčiť prácu s plateným propagovaním príspevkov na Facebooku. Pridajte sa k najväčším slovenským publisherom, ktorí výhody nášho nástroja využívajú každý deň.</p>
				<div style="display: inline-block;">
				</div>
			</div>
		</div>
	</div>
	<div class="blog-listing__item product-listing">
		<div class="row">
			<div class="col1 col-sm-12">
				<div class="shadow-box normal">
					<div class="shadow-box__content">
						<div class="shadow-box__content--overflowhidden">
							<a class="blog-listing__item__picbox" href="http://learningbee.io/" target="_blank">
								<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/products/learning-bee.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col2 col-sm-12">
				<p>Školíte zamestnancov po starom? Prejdite na modernú online formu. Znížite tým náklady na osobné školenie a zvýšite efektivitu práce. Progresívny e-learningový systém si nájde svoje miesto v každej modernej firme.</p>
				<div style="display: inline-block;">
				</div>
			</div>
		</div>
	</div>
	<div class="blog-listing__item product-listing">
		<div class="row">
			<div class="col1 col-sm-12">
				<div class="shadow-box normal">
					<div class="shadow-box__content">
						<div class="shadow-box__content--overflowhidden">
							<a class="blog-listing__item__picbox" href="https://www.smbee.io/" target="_blank">
								<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/products/smbee.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col2 col-sm-12">
				<p>Máte veľa aktivít na sociálnych sieťach? Nebaví vás preklikávanie medzi oknami, ani sledovanie lajkov a followerov cez reporty sociálnych sietí? Máme pre vás nástroj na monitorovanie aktivít, v ktorom sú implementované Facebook, Instagram, Twitter a LinkedIn.</p>
				<div style="display: inline-block;">
				</div>
			</div>
		</div>
	</div>
	<div class="blog-listing__item product-listing">
		<div class="row">
			<div class="col1 col-sm-12">
				<div class="shadow-box normal">
					<div class="shadow-box__content">
						<div class="shadow-box__content--overflowhidden">
							<a class="blog-listing__item__picbox" href="https://fans.vote/" target="_blank">
								<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/products/poll.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col2 col-sm-12">
				<p>Vytvárate často na sociálnej sieti Facebook formuláre za účelom prieskumov? Tento nástroj vám v tom pomôže. Aplikácia uľahčí prácu, zapojí vašich fanúšikov a rozšíri komunitu na sociálnych sieťach.</p>
				<div style="display: inline-block;">
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<?php echo generateContactForm('Produkty na mieru'); ?>

		</div>
	</div>
</div>


<?php get_footer(); ?>