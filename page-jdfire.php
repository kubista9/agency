<?php /*
 Template Name: Case Study - JD Fire
 Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'jdfire';
get_header('casestudy');
?>

<article>

	<!-- header -->
	<div class="header clearfix" style="background-color: #070405; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/jdfire/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Jack Daniel’s Fire súťaž</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Kreatíva / dizajn / development</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<div class="text-center">
			<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/jdfire/screen.png" alt="" />
		</div>

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/jdfire/logo.png" alt="" />
					<br />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<br />
					<p>Spoločnosť KOFT, s. r. o. pôsobí na slovenskom trhu už od roku 1991 ako distribútor prémiových značiek alkoholu, ktorým taktiež poskytuje marketingovú podporu. Spoločnosť patrí medzi stabilných a spoľahlivých partnerov zastúpeným značkám ako Finlandia, Jack Daniel´s, Moët, Hennessy, Bacardi, Martini, Macallan, Highland Park a The Famous Grouse.</p>
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
					<br />
					<p>Spoločnosti KOFT sa už niekoľko rokov nadšene staráme o online komunikáciu značky Jack Daniel’s. Výzvou bol príchod relatívne nového produktu Jack Daniel’s FIRE v roku 2015, pričom klient primárne potreboval podporiť znalosť značky súbežne so získaním aktuálnych informácií o jeho spotrebiteľoch a potenciálnych spotrebiteľoch vo štvrtom kvartáli 2017. Jack Daniel’s Fire má ešte pomerne slabo vytvorenú základňu stálych konzumentov a bolo potrebné prísť so šikovným nápadom ako zasiahnuť práve túto menšiu skupinu ľudí, a pritom zvýšiť povedomie o produkte a podporiť jeho predaj.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="serverblock">
		<div class="content-wrapper">
			<div class="picblock" data-aos="zoom-in">
				<img class="img-fluid layer2" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/jdfire/tablet.png" alt="" />
			</div>

			<span class="bigtext t1 white" data-aos="flip-left"
			      data-aos-easing="ease-out-cubic"
			      data-aos-duration="2000"><span id="number1">2500</span><br /><span class="tt">hráčov</span></span>
			<span class="bigtext t2 white" data-aos="flip-left"
			      data-aos-easing="ease-out-cubic"
			      data-aos-duration="2000"><span id="number2">25</span>%<br /><span class="tt">konverzia</span></span>
		</div>
	</div>


	<div class="content-wrapper">
		<div class="wysiwyg">
			<div class="row">
				<div class="col-md-4">
					<h2 class="bigtext notopmargin">Riešenie</h2>
					<br />
					<br />
				</div>
				<div class="col-md-8">

					<p>Ako najvhodnejšie riešenie, pre dosiahnutie zadaných cieľov, sme zvolili vytvorenie súťažnej online aplikácie a následne podporu návštevnosti aplikácie formou cielenej online reklamy.</p>
					<br />
					<p>Každý užívateľ mal možnosť v aplikácií zbierať body za vykonané úlohy. Čím viac úloh splnil, tým viac bodov získal a mal vyššiu šancu na výhru. Dve, z celkovo štyroch súťažných úloh, boli zamerané na získavanie informácií o konzumentoch Jack Daniel’s Fire a zvyšné dve úlohy boli zamerané na edukáciu, propagáciu a zvýšenie informovanosti užívateľa o produkte. Jack Daniel’s FIRE má totiž presne odporúčaný spôsob podávania a pokiaľ nie je dodržaný môže to mať vplyv na výsledný zážitok, resp. skúsenosť konzumenta.</p>

				</div>
			</div>

		</div>
	</div>

	<div class="footblock">
		<div class="wysiwyg">
			<h2 class="bigtext">Finálny<br />stav</h2>
		</div>
	</div>

	<div class="content-wrapper">
		<div class="wysiwyg fix">
			<p>Kampaň trvala necelý mesiac a do súťaže sa nám zapojilo celkovo viac ako 2 500 hráčov čo bola viac ako 25%-tná konverzia.
				Demografické a spotrebiteľské informácie nám zanechalo viac ako 2 000 užívateľov.
				Úlohu na zvýšenie povedomia o značke dokončilo tiež viac ako 2 000 užívateľov.</p>
			<br />
			<p>Celkovú kampaň sme zhodnotili ako veľmi úspešnú nielen my, ale aj sám klient, nakoľko získané výsledky určite poslúžia na lepšie porozumenie správania sa zákazníkov a v budúcnosti napomôžu lepším výsledkom predajných a reklamných aktivít.</p>
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

<?php echo generateContactForm('Objednajte si aplikáciu'); ?>

<?php get_footer(); ?>