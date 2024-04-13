<?php /*
Template Name: Case Study - Little Lane
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'littlelane';
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

			var number1 = new CountUp("counter1", 1, 61, 0, 5, options);
			var number2 = new CountUp("counter2", 1, 56662, 0, 5, options);
			var number3 = new CountUp("counter3", 0, 96, 0, 5, options);

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
	<div class="header clearfix" style="background-color: #468528; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/littlelane/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Little Lane</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Sociálne Médiá</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/littlelane/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/littlelane/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p>LittleLane je ucelený súbor zábavných a edukačných online hier, aplikácií a pomôcok určených na pomoc pri výučbe detí navštevujúcich základné a materské školy. LittleLane je slovenský startup, ktorý predstavuje modernizáciu edukačného systému pre deti. Dokazuje to aj rôznymi oceneniami, ktoré získalo, ako napríklad <strong>víťaz v Startup Awards 2015 v kategórii Art & Design.</strong></p>
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
					<p class="small-top">LittleLane nás oslovilo s potrebou pomôcť im zasiahnuť viac potenciálnych zákazníkov pomocou sociálnych sietí a <strong>vytvoriť si tak povedomie o relatívne mladej značke a produktoch.</strong> LittleLane bolo v tom čase aktívne na sociálnej sieti Facebook, ale nemalo vytvorenú žiadnu komunikačnú stratégiu. Svoje príspevky publikovali neucelene a neapelovali na vhodnú cieľovú skupinu. Bolo potrebné zvoliť adekvátne cieľové skupiny a <strong>vypracovať komunikačnú stratégiu</strong>, ktorá by vedela vybudovať dôveru užívateľov ku značke a produktom LittleLane.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="bookblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/littlelane/screen.jpg" alt="" />
			</div>

			<div class="wysiwyg" style="min-height: inherit;">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext mt0">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
						<p class="">Po detailnej analýze trhu a konkurencie bola vypracovaná online komunikačná stratégia a boli zvolené krátkodobé a dlhodobé ciele. Začala prebiehať štrukturovaná komunikácia firmy LittleLane na sociálnej sieti Facebook.</p>

					</div>
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
						<div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="300">
							<div class="infobox__desc">fans</div>
							<div class="infobox__counter">
								+<span class="number" id="counter1">0</span>%
							</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">

					<div class="animabox animabox--type2">
						<div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="500">
							<div class="infobox__desc">zásah za Júl 2017</div>
							<div class="infobox__counter">
								<span class="number" id="counter2">0</span>
							</div>
							<div class="infobox__shadow"></div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">

					<div class="animabox animabox--type3">
						<div class="infobox infobox--type3" data-aos="flip-right" data-aos-delay="700">
							<div class="infobox__desc">pagekarma</div>
							<div class="infobox__counter">
								<span class="number" id="counter3">0</span>%
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
		<div class="wysiwyg" style="padding-top: 0;">

			<h2 class="bigtext marginbottom">Aktuálny stav</h2>
			<p class="notop">Po troch mesiacoch publikovania príspevkov a moderovania Facebook stránky LittleLane sa počet fanúšikov zvýšil o 61%. V poslednom mesiaci (júl 2017) stránka zasiahla 56 662 užívateľov, pričom najúspešnejší príspevok mal zásah 35 500 užívateľov (1258 reakcií, 158 zdieľaní s cenou za podporu reklamou 9,35 EUR). Podľa analyzačného nástroja fanpagekarma.com, zaznamenáva Facebook stránka LittleLane momentálny výkonnostný index 96%.</p>
			<br />
			<p><strong class="to-upper">Sumarizácia</strong></p>
			<br />
			<p>LittleLane je mladá progresívna firma, ktorá chce využívať moderné prostriedky tak, aby zasiahla svojich užívateľov. Ako startup si LittleLane iba buduje užívateľskú základňu a predstavuje svoj produkt na trh. Spôsob, akým sa v tejto fáze prezentuje, je veľmi dôležitý a sme radi, že si ako svojho partnera vybrala práve nás.</p>

		</div>
	</div>

	<br />
	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Získajte fanúšikov'); ?>

<?php get_footer(); ?>