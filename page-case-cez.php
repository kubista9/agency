<?php /*
Template Name: Case Study - ČEZ
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'cez';
get_header('casestudy');
?>

<article>
	<script>
		jQuery(document).ready(function(){

			var easingFn = function (t, b, c, d) {
				var ts = (t /= d) * t;
				var tc = ts * t;
				return b + c * (tc * ts + -5 * ts * ts + 10 * tc + -10 * ts + 5 * t);
			}
			var options = {
				useEasing: true,
				easingFn: easingFn,
				useGrouping: false,
				separator: ',',
				decimal: '.',
			};

			var number1 = new CountUp("counter1", 1, 778, 0, 5, options);
			var number2 = new CountUp("counter2", 1, 100, 0, 5, options);
			var number3 = new CountUp("counter3", 0, 5.3, 1, 5, options);
			var number4 = new CountUp("counter4", 0, 2, 1, 5, options);

			var animating = false;

			jQuery('.counterblock').appear();
			jQuery('.counterblock').on('appear', function(event, $all_disappeared_elements) {
				if(!animating) {

					animating = true;
					setTimeout(function(){

						number1.start(function() {
							animating = false;
						});

						number2.start();
						number3.start();
						number4.start();

					}, 600);
				}

			});

			jQuery('.counterblock').on('disappear', function(event, $all_disappeared_elements) {
				//jQuery('#counter1, #counter2, #counter3, #counter4').text('0');
				/*
				number1.reset();
				number2.reset();
				number3.reset();
				number4.reset();
				*/
			});

		});
	</script>


	<!-- header -->
	<div class="header clearfix" style="background-color: #d64c1d; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/cez/background.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">ČEZ Slovensko</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Online stratégia a analýza</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/cez/header.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/cez/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p class="small-top">ČEZ Slovensko je dodávateľ elektriny a plynu pre domácnosti, firmy a veľkoodberateľov. ČEZ Slovensko vzniklo v roku 2007 ako dcérska spoločnosť najväčšej energetickej spoločnosti v strednej a juhovýchodnej Európe – ČEZ Group. V súčastnosti je ČEZ najväčším zahraničným dovozcom elektriny na Slovensko.</p>
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
					<p class="small-top">ČEZ Slovensko nás oslovilo s potrebou zlepšiť komunikáciu na sociálnych sieťach a vybudovať silný sociálny profil spoločnosti. ČEZ Slovensko malo v tom čase vytvorenú firemnú stránku na Facebook-u so stavom 180 fanúšikov a približne 5 príspevkami mesačne. Ich vtedajšie príspevky neangažovali  fanúšikov a nedarilo sa im prilákať nových fanúšikov. Neexistoval firemný online komunikačný plán ani stratégia.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="bookblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/cez/book.png" alt="" />
			</div>

			<div class="wysiwyg">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
						<p class="notop">Po prvotnej analýze trhu sme pre ČEZ vytvorili detailnú online komunikačnú stratégiu. Na základe stratégie a po dohode s klientom sme stanovili rozpočet, ktorý by dosiahol spoločne stanovené ročné ciele. Keďže budget bol obmedzený, rozhodli sme sa v prvej fáze zamerať iba na jednu sociálnu sieť – Facebook.</p>
						<p>Ako prvé sme sa zamerali na presné nastavenia Facebook stránky. Aktualizovali sme nastavenia, zmenili vizuál a doplnili chýbajúce informácie. Vytvorili sme redakčný plán pridávania príspevkov a nastavili kritériá pre podporu príspevkov reklamou. Určili sme plán postupu v prípade krízového stavu a formu moderácie stránky.</p>
						<br />
						<br />
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="counterblock">
		<div class="content-wrapper">
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-6">

					<div class="animabox animabox--type1">
						<div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="300">
							<div class="infobox__counter">
								<span class="number" id="counter1">0</span>%
							</div>
							<div class="infobox__desc">nárast fanúšikov</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">

					<div class="animabox animabox--type2">
						<div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="500">
							<div class="infobox__counter">
								<span class="number" id="counter2">0</span>%
							</div>
							<div class="infobox__desc">výkonnosť</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">

					<div class="animabox animabox--type3">
						<div class="infobox infobox--type3" data-aos="flip-right" data-aos-delay="700">
							<div class="infobox__counter">
								<span class="number" id="counter3">0</span>%
							</div>
							<div class="infobox__desc">priemerný týždenný rast</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">

					<div class="animabox animabox--type4">
						<div class="infobox infobox--type4" data-aos="flip-right" data-aos-delay="900">
							<div class="infobox__counter">
								<span class="number" id="counter4">0</span>%
							</div>
							<div class="infobox__desc">miera angažovanosti fanúšikov</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


	<div class="content-wrapper">
		<div class="wysiwyg">

			<h2 class="bigtext marginbottom">Aktuálny stav</h2>
			<p class="notop">Po 5 mesiacoch moderovania stránky sme predbehli naše aj klientove očakávania. Na stránke je momentálne 1401 fanúšikov, čo predstavuje nárast o 778%. Facebook stránka dosahuje 100% výkonnosť* (priemer konkurenčných firiem na Slovensku dosahuje 35%). Priemerný týždenný rast stránky je 5,3%* (priemer konkurenčných firiem na Slovensku dosahuje 1,5%). Miera angažovanosti fanúšikov na stránke je 2,0%* (priemer konkurenčných firiem na Slovensku dosahuje 0,78%).</p>
			<p>ČEZ Slovensko, ako dcérska spoločnosť významnej medzinárodnej energetickej spoločnosti, je veľkou výzvou na profesionálnu formu komunikácie. Momentálne sa nám úspešne darí vytvárať imidž spoločnosti v rámci stanovenej komunikačnej stratégie a angažovať užívateľov Facebook-u získaním si ich dôvery ku značke ČEZ Slovensko. Sociálne siete majú v marketingovej stratégii ČEZ Slovensko významné miesto pre budúci rozvoj spoločnosti a sme radi, že môžeme byť ich súčasťou a plniť stanovené ciele. </p>

		</div>
	</div>

	<br />
	<br />

	<div class="parallaxblock">
		<div class="content-wrapper text-center">
			<img class="img-fluid" data-aos="zoom-out-right" data-aos-easing="linear" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/cez/mac.png" alt="" />
		</div>
	</div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Stratégia na mieru'); ?>

<?php get_footer(); ?>