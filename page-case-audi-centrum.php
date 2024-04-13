<?php /*
Template Name: Case Study - Audi Centrum
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'audi-centrum';
get_header('casestudy');
?>

<article>

	<!-- header -->
	<div class="header clearfix" style="background-color: #054173; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/audi-centrum/background.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">AUDI CENTRUM BRATISLAVA</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Webové riešenia / DEVELOPMENT</h2>
				<a target="_blank" href="http://www.audibratislava.sk" class="lead_button">www.audibratislava.sk</a>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/audi-centrum/devices.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/audi-centrum/logo.png" alt="Audi Centrum Bratislava" />
					<br />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p class="notop">Audi Centrum Bratislava je autorizovaný predajca vozidiel značky Audi v Bratislave a už 6 rokov ponúka možnosť zoznámiť sa s vozidlami Audi v celej šírke súčastnej produkcie. Audi Centrum Bratislava je oficiálnym partnerom
						R8 a rozlohou je v súčastnosti najväčším Audi Centrom v Európe.</p>
					<br />
					<br />
				</div>
			</div>

			<hr class="divider" />
			<br />
			<br />

			<div class="row">
				<div class="col-md-4">
					<h2 class="bigtext">Výzva</h2>
				</div>
				<div class="col-md-8">
					<p class="notop">Audi Centrum Bratislava nás oslovilo s požiadavkou redizajnu ich webstránky tak,
						aby nová stránka spĺňala normy korporátnej identity, bola prívetivá pre užívateľa
						a bola vyhľadatelná na internete. Okrem redizajnu bola potrebná aj úprava funkcionality pre odľahčenie manuálneho aktualizovania obsahu pomocou automatizovaného spracovávania dát a optimalizácia SEO.
					</p>
					<br />
					<br />
                </div>
			</div>

		</div>
    </div>

    <div class=" content-wrapper--no-overflow">
        <div class="imgwrap">
            <img class="" style="width: 100%; height: auto; z-index: 500;" data-aos="slide-up" data-aos-delay="200" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/audi-centrum/audi.jpg" alt="" />
        </div>
    </div>


    <div class="content-wrapper">

        <div class="wysiwyg">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bigtext bigtext--notop">Riešenie</h2>
                    <br />
                    <br />
                </div>
                <div class="col-md-8">
                    <p class="notop">Redizajn stránky prebehol na základe dizajn manuálu s prihliadnutím na potreby klienta. Okrem zachovania jednotného vizuálu, sme riešili aj prehľadnosť navigácie
	                    a plnú funkčnosť stránky pre mobilné zariadenia. Všetky tieto aspekty boli zohľadnené a implementované v  na mieru naprogramovanom redakčnom systéme postavenom na modernom frameworku Yii. Naprogramovali sme automatické importy
	                    z jednotlivých zdrojov a zároveň pripravili exportovacie moduly na inzertné portály
	                    s automobilmi. Webstránku sme taktiež optimalizovali pre organické vyhľadávanie (SEO).</p>
                </div>
            </div>
        </div>

    </div>

	<div class="content-wrapper content-wrapper--no-overflow">
		<div class="imgwrap">
			<img class="" style="width: 100%; height: auto; z-index: 500;" data-aos="slide-up" data-aos-delay="200" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/audi-centrum/audi2.jpg" alt="" />
		</div>
	</div>

	<div class="content-wrapper">
		<div class="wysiwyg">

			<h2 class="bigtext marginbottom">Sumarizácia</h2>
			<p class="notop">Stránka Audi Centrum Bratislava reflektuje jednotný komunikačný vizuál značky Audi. Je plne mobilná pre široké spektrum zariadení. Každá jedna časť stránky má prispôsobenú prehľadnú administráciu pre čo najefektívnejšiu správu obsahu. Klient má taktiež automatizovane spracovávané všetky dáta od importéra a zároveň vyriešený spôsob inzercie na portáloch. Vo výsledkoch PageSpeed Insights stránka vykazuje skvelé výsledky 93 z 100% možných bodov, čo znamená, že nie len graficky, ale aj technicky sme zlepšili dôležitú časť prezentácie.</p>
			<br />
			<p>Stránka sa navyše zobrazuje na prvých priečkach vo vyhľadávaní pre špecifické kľúčové slová, ktoré sú dôležité pre klienta.</p>

		</div>
	</div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Web na mieru'); ?>

<?php get_footer(); ?>