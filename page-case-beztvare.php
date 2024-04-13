<?php /*
Template Name: Case Study - Ikar (Obeť bez tváre)
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'beztvare';
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

			var number1 = new CountUp("counter1", 1, 4000, 0, 2, options);
			var number2 = new CountUp("counter2", 1, 10000, 0, 2, options);

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

					}, 600);
				}

			});
		});
	</script>


	<!-- header -->
	<div class="header clearfix" style="background-color: #000; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/background.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Obeť bez tváre</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Lead generation / development</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/header.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-md-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8">
					<p class="notop">IKAR je vydavateľský dom, ktorý vznikol v roku 1990. Produkciu tvoria tituly nie len domácich autorov, ale aj preklady zvučných zahraničných mien. Dnes nájdete
						v ponuke pestrý žánrový výber kníh pre všetky vekové kategórie: romány, sci-fi, fantasy, krimi, trillery, zbierky básní, rozprávky, kuchárske knihy, encyklopédie, hobby, literatúru pre mužov, ženy, deti, a iné. Za obdobie od vzniku pôsobenia Ikaru
						na knižnom trhu, bolo vydaných vyše 4 600 titulov domácich aj zahraničných autorov, z ktorých sa dovedna predalo viac ako 27,5 milióna výtlačkov.</p>
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
					<p class="small-top">Severské krimi je v rámci beletrie veľmi obľúbený segment a aj z tohto dôvodu sme
						v záplave knižiek potrebovali dostať do popredia nový titul s názvom “Obeť bez tváre” od Ahnhema Stefana. V spolupráci s cestovnou kanceláriou BUBO bola preto dohodnutá <strong>hlavná cena vo forme 8 dňového spoznávacieho zájazdu metropolami škandinávie.</strong> Cieľom na odomknutie a žrebovanie tejto výhry však bola účasť aspoň 4000 registrovaných hráčov.</p>
				</div>
			</div>

		</div>

    </div>

	<div class="solutionblock">
		<div class="content-wrapper">
			<div class="wysiwyg">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext">Riešenie</h2>
						<br />
						<img class="img-fluid bigpic" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/nastenka.png" alt="" />
					</div>
					<div class="col-md-8">
                        <p class="notop">
	                        Navrhli sme súťažnú aplikáciu, ktorá vychádza z tematiky a motívu knižky.
                        </p>

						<p class="special">Spoiler: Vyšetrovateľ rieši vraždu, pričom obeťou bol jeden z jeho dávnych spolužiakov. Má vrah plán? Je na jeho zozname aj samotný vyšetrovateľ?</p>

                        <p>V zozname fotografií, ktoré boli umiestnené na školskom table, súťažiaci klikali
	                        na fotografie spolužiakov a hádali, ktorý z nich je vrah. Ak sa im ani na tretí krát nepodarilo náhodne vraha odhaliť, spustili sme dynamickú nápovedu, ktorá pomáhala pri ďalších neúspešných pokusoch. Pri každom spustení hry bol vrahom niekto iný
	                        a nápoveda sa teda generovala podľa toho. Celkovo mal hráč 7 pokusov na odhalenie vraha v každej hre.</p>
						<p>Súťažiaci, okrem dobrého výsledku, ktorý neovplyvňoval šancu na výhru, mohli pre zvýšenie šance výhry zdieľať unikátnu linku na súťaž, pričom ak sa do súťaže zapojil niekto cez ich zdieľanie, dostal súťažiaci, ktorý linku zdieľal, odmenu v podobe bonusových žrebov.
	                        V rámci súťaže sme okrem hlavnej výhry odmenili aj ďalších 100 výhercov knihou
	                        z oblasti severského krimi podľa vlastného výberu.
                        </p>

					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="counterblock">
		<div class="content-wrapper">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-xs-12">

					<div class="animabox animabox--type1">
						<div class="infobox infobox--type1" data-aos="zoom-in" data-aos-delay="300">
							<div class="infobox__counter">
								<span class="number" id="counter1">0</span>
								<div class="minitext">hráčov</div>

								<img class="img-fluid icons" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/ico1.png" alt="" />
							</div>

						</div>
					</div>

				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">

					<div class="animabox animabox--type2">
						<div class="infobox infobox--type2" data-aos="zoom-in" data-aos-delay="500">
							<div class="infobox__counter">
								<span class="number" id="counter2">0</span>
								<div class="minitext">návštev</div>

								<img class="img-fluid icons" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/ico2.png" alt="" />
							</div>

						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


	<div class="summary">
		<div class="content-wrapper">
			<div class="wysiwyg">
				<h2 class="bigtext marginbottom">Sumarizácia</h2>
				<p class="notop"><strong>Celkový počet zapojených súťažiacich prekročil požadovaných 4000 hráčov.</strong><br />
		            672 hráčov prišlo do aplikácie cez zdieľanie, pričom najaktívnejší súťažiaci pritiahol do súťaže až 55 ďalších hráčov. Počas súťaže aplikácia zaznamenala bezmála 10 tisíc návštev s priemerným stráveným časom 2,5 minúty. </p>
			</div>

			<img class="img-fluid" data-aos="fade-up" data-aos-duration="3000" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/ikar-beztvare/screens.png" alt="" />
		</div>
	</div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Leady aj pre Vás'); ?>

<?php get_footer(); ?>