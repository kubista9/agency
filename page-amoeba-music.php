<?php /*
 Template Name: Case Study - Amoeba
 Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'amoeba';
get_header('casestudy');
?>

<article>

	<!-- header -->
	<div class="header clearfix" style="background-color: #222229; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/background.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Amoeba Music</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Webhosting / development</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/mobile.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<br />
					<p>Amoeba je najväčšia nezávislá spoločnosť predávajúca hudobné nahrávky.<br />
					S predajom začala firma v roku 1990 vo svojich kamenných predajniach v Berkeley, San Franciscu a Hollywoode. V jej portfóliu sa nachádza široké množstvo hudobných žánrov od rocku až po experimentálnu muziku.</p>
					<p>Je jedinečná nie len svojou najväčšou a najbohatšou zbierkou DVD a vinylových platní na svete, ale aj prístupom k zákazníkom. Jej snahou je okrem iného vytvoriť komunitu pre milovníkov hudby.</p>
					<br />
					<br />
				</div>
			</div>
			<hr />

			<div class="row">
				<div class="col-md-4">
					<h2 class="bigtext">Výzva</h2>
					<br />
					<br />
				</div>
				<div class="col-md-8">
					<br />
					<p>Pre nášho klienta sme potrebovali zabezpečiť hosting, ktorý presahuje potreby bežných webov vo všetkých parametroch. V počte prístupov na server v jednom čase, množstve dát, celkovom trafficu a vo vysokej úrovni bezpečnosti.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="serverblock">
		<div class="content-wrapper">
			<div class="picblock" data-aos="zoom-in">
				<img class="img-fluid layer2" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/mobile2.png" alt="" />
				<img class="img-fluid layer1" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/mobile1.png" alt="" />
			</div>

			<div class="row">
				<div class="col-md-4 text-center">
					<span class="bigtext white"><span id="number1">4</span>x<br /><span class="tt">server</span></span>
				</div>
				<div class="col-md-4 text-center">
					<span class="bigtext white"><span id="number2">2</span>x<br /><span class="tt">replikácia</span></span>
				</div>
				<div class="col-md-4 text-center">
					<span class="bigtext white">2x<br /><span class="tt">loadbalancer</span></span>
				</div>
			</div>

			<br />
			<br />
			<br />

		</div>
	</div>


	<div class="content-wrapper">
		<div class="wysiwyg">
			<div class="row">
				<div class="col-md-4">
					<h2 class="bigtext">Riešenie</h2>
					<br />
					<br />
				</div>
				<div class="col-md-8">

					<ul>
						<li>4 x server s redundantnými diskami, procesormi, zdrojmi etc.</li>
						<li>2 x v replikácii (servery sa medzi sebou synchronizujú)</li>
						<li>2 x load balancery (prichádzajúce dopyty sú prerozdeľované podľa vyťaženia jednotlivých serverov)</li>
						<li>osobitný mechanizmus pre zabezpečenie osobných údajov, kde sú dáta uložené v separátnej sieti, do ktorej sa dá iba šifrovať, nie však dešifrovať</li>
						<li>infraštruktúra je zautomatizovaná cez Ansible a Terraform</li>
					</ul>

				</div>
			</div>

		</div>
	</div>


	<div class="redblock">
		<div class="content-wrapper">

			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<h2 class="bigtext">Aktuálny stav</h2>
				</div>
				<div class="col-md-8 col-sm-6 col-xs-6">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/amoeba/tablet.png" alt="" />
				</div>
			</div>


		</div>
	</div>

	<div class="content-wrapper">
		<div class="wysiwyg fix">
			<p>Vynaložené investície sa vyplatili a vrátili v podobe spokojného stáleho klienta, ktorý využíva naše hostingové služby už 10 rokov.
				Aj napriek vysokej návštevnosti naše servery poskytnú stránke 99.9% dostupnosť vďaka systému load balancerov a dobre navrhnutej serverovej infraštruktúre. Servery zaznamenávajú stabilnú návštevnosť
				a sme radi, že spolupráca s klientom prebieha bezproblémovo.</p>
		</div>

		<br />
		<br />
		<br />

		<style>
			.related-articles__title,
			.related-articles {
				max-width: 1100px;
			}
		</style>

		<?php echo generateSimilarCaseStudies(get_the_ID()); ?>
	</div>


</article>

<?php echo generateContactForm('Objednajte si hosting'); ?>

<?php get_footer(); ?>