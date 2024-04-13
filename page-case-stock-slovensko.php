<?php /*
Template Name: Case Study - Stock Slovensko
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'stock-slovensko';
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
	<div class="header clearfix" style="background-color: #000; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/header.jpg); background-position: top center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Goldenka</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Facebook aplikácie</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/logo.jpg" alt="Stock Slovensko" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p>Spoločnosť STOCK Slovensko, s.r.o.  je jedným z popredných slovenských dodávateľov alkoholických nápojov a lídrom na trhu s liehovinami v strednej a východnej Európe. Už od roku 1984 sa sústreďuje na výrobu a distribúciu značkových liehovín, likérov, vín, vermutov a horko-bylinných likérov.</p>
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
                    <p class="small-top">V záujme STOCK Slovensko, s.r.o. je dlhodobé budovanie tradičných slovenských značiek a prehlbovanie ich propagácie. Spoločnosť nás preto oslovila s požiadavkou vytvorenia reklamnej kampane na ich Facebook stránke, aby zvýšila záujem u online užívateľov. Cieľom bolo získať nových fanúšikov pre ich Facebook stránku Goldenka a vytvoriť tak originálny koncept, ktorý mal nielen zaujať, ale aj presvedčiť nových užívateľov stať sa fanúšikom stránky.</p>
                    <br /><br />
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bigtext">Riešenie</h2>
                    <br />
                    <br />
                </div>
                <div class="col-md-8">
                    <p class="small-top">Pre STOCK Slovensko sme vytvorili unikátny koncept Facebook súťažnej aplikácie „Hruška do dna“.  Súťažná aplikácia bola umiestnená v záložke Facebook stránky a umožňovala užívateľom interakciu v reálnom čase. Úlohou súťažiacich bolo „prepiť sa“ na dno fľaše pomocou virtuálnych pohárikov. Každý užívateľ mal však iba obmedzený počet pohárikov a ak chcel zvýšiť svoje šance na výhru v súťaži musel pozvať na stránku svojich priateľov. Súťažná aplikácia bola taktiež podporená online reklamnou kampaňou.</p>
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
                <div class="animabox animabox--type1">
                    <div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="300">
                        <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/stock-predaj.png" alt="Predaj" /></div>
                        <div class="infobox__content">
                            <div class="infobox__content__desc">predaj</div>
                            <div class="infobox__content__counter">
                                +<span class="number" id="counter1">0</span>%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animabox animabox--type2">
                    <div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="500">
                        <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/stock-navstevnost.png" alt="Návštevnosť" /></div>
                        <div class="infobox__content">
                            <div class="infobox__content__desc">návštevnosť</div>
                            <div class="infobox__content__counter">
                                +<span class="number" id="counter2">0</span>%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animabox animabox--type3">
                    <div class="infobox infobox--type3" data-aos="flip-right" data-aos-delay="700">
                        <div class="infobox__image"><img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/stock-miera-odchodov.png" alt="Miera odchodov" /></div>
                        <div class="infobox__content">
                            <div class="infobox__content__desc">miera odchodov</div>
                            <div class="infobox__content__counter">
                                -<span class="number" id="counter3">0</span>%
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <div class="content-wrapper text-center content-wrapper--leaves">
        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/stock-slovensko/bg-listy.jpg" alt="" />
    </div>

	<br />
	<br />

	<div class="content-wrapper">
		<div class="wysiwyg" style="padding-top: 0;">

			<h2 class="bigtext marginbottom">Konečný stav</h2>
            <p class="small-top">Facebook stránka Goldenka mala pred začiatkom kampane 7 954 fanúšikov. Reklamná kampaň spojená so súťažnou aplikáciou priniesla na túto stránku <strong>7 970 nových fanúšikov</strong>. Celkovo sa tak počet fanúšikov stránky zdvojnásobil. Celkovo sa do aplikácie <strong>zapojilo 5 360 ľudí a dosiahla 4 206 zdieľaní na FB.</strong></p>
			<br />
			<p><strong class="to-upper">Sumarizácia</strong></p>
			<br />
			<p>Vývoj súťažnej aplikácie bol pre nás ozajstnou zábavou. Či už to boli brainstormingové stretnutia tímu, dizajn vizuálov alebo samotný vývoj aplikácie. Predom stanovené ciele boli splnené a prekonané a pozitívne ohlasy sme obdržali nielen zo strany klienta ale aj od samotných súťažiacich.</p>

		</div>
	</div>

	<br />
	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Chcem FB aplikáciu'); ?>

<?php get_footer(); ?>