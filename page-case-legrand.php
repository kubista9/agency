<?php /*
Template Name: Case Study - Legrand
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'legrand';
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

			var number1 = new CountUp("counter1", 1, 64, 0, 2, options);
			var number2 = new CountUp("counter2", 1, 19, 0, 2, options);
			var number3 = new CountUp("counter3", 0, 4500, 0, 2, options);

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
	<div class="header clearfix" style="background-color: #e1061b; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Legrand</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Content marketing</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-md-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8">
					<p class="notop">Spoločnosť Legrand je svetovým lídrom v oblasti elektrickej a digitálnej infraštruktúry budov. Legrand je francúzska nadnárodná spoločnosť, ktorá vznikla v roku 1860 a v súčasnosti má svoje zastúpenie v 80 krajinách sveta, pričom zamestnáva viac ako 36 tis. ľudí. Na Slovensku má svoje zastúpenie už od roku 1996 a orientuje sa na technicky dokonalé, inovačné a dizajnovo prepracované riešenia.</p>
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
					<p class="small-top">S Legrand Slovensko sme nadviazali spoluprácu v roku 2016. Klient mal záujem o zlepšenie online komunikácie. Online komunikácia slovenského oddelenia spoločnosti dovtedy spočívala iba v necielenom a nepravidelnom vytváraní obsahu na svojej Facebook stránke. Bolo potrebné zapojiť do komunikácie aj iné online kanály a vytvoriť marketingovú stratégiu, ktorá by zjednotila komunikáciu a podporila zvýšenie povedomia o značke Legrand na Slovensku.</p>
				</div>
			</div>

		</div>

    </div>

	<div class="solutionblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/pic-riesenie.png" alt="" />
			</div>

			<div class="wysiwyg">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
                        <p class="notop">Prvým krokom bolo vytvorenie online dotazníka, pomocou ktorého sme získali potrebné informácie od potenciálnych zákazníkov o tom ako vnímajú značku Legrand. Na základe zozbieraných informácií sme vytvorili online stratégiu zamieravajúcu sa na súvisiace odvetvia, ktoré sú pre zákazníkov najrelevantnejšie. Začali sme cielene vytvárať obsah a komunikovať s užívateľmi cez Facebook, newsletter a blogové články. Vytvorili sme 3 produktové mikrostránky, ktoré podporujú informovanosť užívateľov o najžiadanejších produktových radách značky Legrand. Najnovšie pre Legrand vyvíjame produktový e-katalóg vo forme mikrostránky pre pobočky Legrand v strednej Európe.</p>

					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="counterblock">
		<div class="content-wrapper">
			<div class="row">

				<div class="col-md-4 col-sm-12 col-xs-12">

					<div class="animabox animabox--type1">
						<div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="300">
							<div class="infobox__counter">
								<span class="number" id="counter1">0</span>%
							</div>
							<div class="infobox__desc">výkonnosť<br />facebook<br />profilu</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">

					<div class="animabox animabox--type2">
						<div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="500">
							<div class="infobox__counter">
								<span class="number" id="counter2">0</span>k
							</div>
							<div class="infobox__desc">priemerný<br />dosah<br />príspevkov</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">

					<div class="animabox animabox--type3">
						<div class="infobox infobox--type3" data-aos="flip-right" data-aos-delay="700">
							<div class="infobox__counter">
								+<span class="number" id="counter3">0</span>
							</div>
							<div class="infobox__desc">fanúšikov<br />za&nbsp;posledných<br />12&nbsp;mesiacov</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="content-wrapper">
		<div class="wysiwyg">

			<h2 class="bigtext marginbottom">Aktuálny stav</h2>
            <p class="notop">Momentálne sa staráme o <strong>úplné vytváranie a moderovanie obsahu na sociálnych sieťach</strong> Legrand Slovensko. Emailová komunikácia sa rozrástla z pôvodne jedného newslettra na <strong>štyri posielané newslettre mesačne</strong>, pričom priemernú mieru otvorenia emailu sme za posledných 12 mesiacov zachovali takmer nezmenenú na cca. 30% (priemer pre daný sektor je cca. 16%). Mesačne vytvárame blogové články, ako podporu predaja špecifických produktov Legrand. Mesačne taktiež komunikujeme a moderujeme obsah formou influencerov na cudzích webstránkach a sociálnych sieťach.</p>
            <p><strong class="to-upper">Sumarizácia</strong></p>
            <p>Zaviedli sme šikovné marketingové riešenia na základe vyhodnotených dát, ktoré po viac ako roku spolupráce môžeme označiť ako úspešné. Predom stanovené ciele sa nám podarilo naplniť a presiahnuť. S klientom neustále komunikujeme a množstvo ponúkaných služieb sa nám priebežne navyšuje. Legrand Slovensko je naozaj perspektívny klient, ktorý má vysoké ciele a svojím otvoreným prístupom k novým možnostiam pre nás predstavuje výzvu k neustálemu zlepšovaniu sa.</p>

		</div>
	</div>

	<br />
	<br />

    <div class="content-wrapper images-status">
        <img class="img-fluid images-status__image1" data-aos="zoom-out-right" data-aos-delay="200" data-aos-easing="linear" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/pic-stav1.png" alt="" />
        <img class="img-fluid images-status__image2" data-aos="flip-right" data-aos-delay="400" data-aos-easing="linear" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/legrand/pic-stav2.png" alt="" />
    </div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Content aj pre Vás'); ?>

<?php get_footer(); ?>