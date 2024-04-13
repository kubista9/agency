<?php /*
Template Name: Case Study - Reatek
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'reatek';
get_header('casestudy');
?>

<article>
	<!-- header -->
	<div class="header clearfix" style="background-color: #bf2026; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/reatek/background.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Reatek Inflatables</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Online analýza a komunikačná stratégia</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/reatek/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-md-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/reatek/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8">
					<p class="notop">Spoločnosť Reatek Inflatables zabezpečuje zákazkovú výrobu rôznych druhov nafukovacej reklamy a nafukovacích atrakcií určených na propagačné a komerčné využitie v podnikaní. Víziou spoločnosti Reatek Inflatables je byť popredným európskym výrobcom nafukovacej reklamy. Spoločnosť nás oslovila s potrebou vyhotovenia analýzy online trhu s nafukovadlami a prípravou online marketingovej stratégie.</p>
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
					<p class="small-top">Každá skupina produktov spoločnosti Reatek mala v tom čase vytvorenú samostatnú webstránku s prislúchajúcim sociálnym profilom. Celkovo tak boli príbuzné aktivity Reatek rozčlenené na 8 webstránok s 5 firemnými Facebook profilmi.<br />
						Z toho iba 3 stránky mali aktivovaný analytický nástroj návštevnosti Google Analytics.
						Konkurenčný trh s nafukovadlami sa vyznačoval vysokým množstvom malých firiem, pre ktoré naše online nástroje nevedeli vyhodnotiť a neposkytovali nám žiadne dáta
						o ich návštevnosti.</p>
				</div>
			</div>

		</div>

    </div>

	<div class="solutionblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/reatek/book.png" alt="" />
			</div>

			<div class="wysiwyg">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
                        <p class="notop">Analýzu trhu sme rozčlenili podľa geografických aktivít spoločnosti a porovnali
	                        s dostupnými trhovými dátami konkurenčných firiem. V prípade menších konkurenčných firiem sme postupovali formou predpokladov a nadobudnutých skúseností.
                        </p>
						<p>
							Na základe analýzy trhu sme vyhotovili detailnú marketingovú stratégiu na dosiahnutie stanovených cieľov. Ponúkli sme <strong>riešenie na výkonný sales funnel</strong> pre  konvertovanie zákazníka. Pripravili sme <strong>ideálny marketingový mix</strong> pozostávajúci
							z platenej reklamy a obsahového marketingu. Pripravili sme <strong>optimálnu komunikačnú stratégiu</strong> týkajúcu sa nielen tvorby obsahu na webstránku
	                        a na sociálne siete ale aj moderovania pridaného obsahu a následné správanie
	                        sa k užívateľom.
                        </p>

					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<div class="wysiwyg">
			<h2 class="bigtext marginbottom">Sumarizácia</h2>
            <p class="notop">Výsledný dokument mal 53 strán a samotná prezentácia výsledkov trvala necelé 2 hodiny. Spoločnosť Reatek na základe našej analýzy získala lepší prehľad o dianí na online trhu a nadobudla cenné informácie o následnom pokračovaní v ich online aktivitách. Dúfame, že informácie
	            z analýzy naplno využijú a pomôžu im v dosahovaní ich stanovených cieľov.</p>
		</div>
	</div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Online stratégia aj pre Vás'); ?>

<?php get_footer(); ?>