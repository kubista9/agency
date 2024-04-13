<?php /*
Template Name: Case Study - Mabo.sk
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'mabo';
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

			var number1 = new CountUp("counter1", 1, 512, 0, 5, options);
			var number2 = new CountUp("counter2", 1, 203, 0, 5, options);
			var number3 = new CountUp("counter3", 0, 15, 0, 5, options);

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

					}, 600);
				}

			});
		});
	</script>


	<!-- header -->
	<div class="header clearfix" style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/header.jpg);">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">mabo.sk</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Performance marketing</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p>Spoločnosť Mabo vznikla v roku 1997 ako distribútor alkoholických nápojov. V roku 2008 sa Mabo, už ako stabilný partner pre profesionálnych GASTRO zákazníkov, rozhodlo spustiť online eshop aj pre maloobchodných zákazníkov. V roku 2015 nás mabo.sk oslovilo na pomoc s online predajom ich produktov.</strong></p>
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
					<p class="small-top">Eshop mabo.sk nemal dovtedy nasadený eCommerce ani žiadne iné meranie konverzií. Dôsledkom toho sme nemohli vykonať detailnú analýzu dát spojených s predajom cez eshop. Eshop zaznamenával aj napriek 7. rokom na trhu a cenám porovnateľným s konkurenciou, nízky predaj. Sales funnel na webstránke nebol optimalizovaný. 63% návštevnosti stránky pochádzalo z organického vyhľadávania na Googli a 30% z priamej návštevnosti stránky. Stránka vytvárala iba minimálny a necielený obsah. Najväčšou výzvou pre tento eshop boli a stále sú obmedzenia pri promovaní predaja alkoholických nápojov na rôznych online kanáloch, ako napríklad Google.</p>
				</div>
			</div>

		</div>
	</div>

	<br />
	<br />
	<br />

	<div class="counterblock">
		<div class="content-wrapper">
			<div class="row">

				<div class="col-md-4 col-sm-12">
					<div class="animabox animabox--type1">
						<div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="150">
                            <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/img-predaj.png" alt="Predaj" /></div>
							<div class="infobox__desc">predaj</div>
							<div class="infobox__counter">
								+<span class="number" id="counter1">0</span>%
							</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">
					<div class="animabox animabox--type2">
						<div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="300">
                            <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/img-navstevnost.png" alt="Návštevnosť" /></div>
							<div class="infobox__desc">návštevnosť</div>
							<div class="infobox__counter">
								+<span class="number" id="counter2">0</span>%
							</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">
					<div class="animabox animabox--type3">
						<div class="infobox infobox--type3" data-aos="flip-right" data-aos-delay="450">
                            <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/img-miera-odchodov.png" alt="Miera odchodov" /></div>
							<div class="infobox__desc">miera odchodov</div>
							<div class="infobox__counter">
								-<span class="number" id="counter3">0</span>%
							</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<br />
	<br />

    <div class="content-wrapper">
        <div class="wysiwyg">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bigtext bigtext--no-top">Riešenie</h2>
                    <br />
                    <br />
                </div>
                <div class="col-md-8">

                    <p>Ako prvé sme <strong>implementovali na stránku eCommerce a meracie kódy</strong> tak, aby sme mali možnosť identifikovať uskutočnené nákupy cez eshop. Definovali sme ďalšie merateľné ciele, ako vloženia produktu do košíka alebo čas strávený na stránke. Optimalizovali sme a presnejšie <strong>nastavili Google Analytics ako aj Google Search Console a Google Merchant Center.</strong> Optimalizovali sme sales funnel na stránke.</p>
                    <p class="small-top">Po optimalizácii a nastaveniach prišlo na rad zvýšenie predaja. Pre klienta sme vytvorili <strong>online marketingovú stratégiu</strong>, v ktorej bola zahrnutá detailná analýza konkurencie, spôsob komunikácie a navrhovaný optimálny marketingový mix.</p>
                    <p class="small-top">Nastavili sme online reklamné kampane podľa novej marketingovej stratégie cez viaceré kanály – <strong>Google, Facebook, Heureka, Pricemania, Bing</strong>. Začali sme cielene vytvárať nový obsah ako na sociálnych sieťach, tak aj na stránke mabo.sk, kde sme za týmto účelom vytvorili novú sekciu - blog.</p>

                </div>
            </div>

        </div>
    </div>

    <br />
    <br />

    <div class="fullwidth-block">
        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/mabo/img-stav.png" data-aos="fade-in" alt="Aktuálny stav" />
    </div>

    <br />
    <br />

	<div class="content-wrapper">
		<div class="wysiwyg" style="padding-top: 0;">

			<h2 class="bigtext marginbottom">Aktuálny stav</h2>
            <p class="small-top">Po 2 rokoch starostlivosti o online reklamné kampane pre mabo.sk sa <strong>zvýšil predaj o 512%</strong> (prvý mesiac po začatí spolupráce s mabo.sk a implementácii meracieho kódu v porovnaní s posledným fakturačným mesiacom s rovnakým počtom dní). <strong>Návštevnosť na stránke sa zvýšila o 203%. Miera odchodov sa znížila o 15%.</strong></p>
            <p>Keďže kampane našich klientov neustále optimalizujeme a zlepšujeme, nie je tomu inak ani s Mabom. Za posledných 12 mesiacov sa predaj zvýšil o 144%, pričom miera konverzií narástla o neuveriteľných 16% (z 3% na 3,5%). Návštevnosť stránky sa zvýšila o 68%. Miera odchodov klesla o 5,4%.</p>
			<br />
			<p><strong class="to-upper">Sumarizácia</strong></p>
			<br />
			<p>Mabo je pre nás veľmi zaujímavý klient, nakoľko tu môžeme aplikovať množstvo rôznych online marketingových riešení. Komunikácia s klientom je bezproblémová a teší nás jeho otvorenosť voči novým nápadom a stratégiám. Výzvou je tiež obmedzený budget klienta, s ktorým musíme mesačne pracovať veľmi efektívne, aby sme maximalizovali prínos pre klienta. S eshopom mabo.sk máme vysoké ciele stať sa úplným lídrom na slovenskom trhu s predajom alkoholu online, a zatiaľ sa takýmto smerom aj úspešne uberáme.</p>

		</div>
	</div>

	<br />
	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Chcem viac predať'); ?>

<?php get_footer(); ?>