<?php /*
Template Name: Case Study - TOP Auto Bratislava
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'top-auto-bratislava';
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

			var number1 = new CountUp("counter1", 1, 500, 0, 2, options);
			var number2 = new CountUp("counter2", 1, 239, 0, 2, options);

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
	<div class="header clearfix" style="background-color: #054173; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">T.O.P. Auto Bratislava</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Lead generation</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/logo.png" alt="TOP Auto Bratislava" />
				</div>
				<div class="col-md-8 col-sm-8">
					<p class="notop">Spoločnosť T.O.P. Auto Bratislava pôsobí na slovenskom automobilovom trhu už 21 rokov a je najväčším a najskúsenejším autorizovaným predajcom a servisným strediskom automobilov prémiových značiek <strong>Volvo, Jaguar a Land Rover</strong> v Slovenskej Republike.</p>
				</div>
			</div>

			<hr class="divider" />

			<div class="row">
				<div class="col-md-4">
					<h2 class="bigtext bigtext--notop">Výzva</h2>
				</div>
				<div class="col-md-8">
					<p class="notop">Naša spolupráca s T.O.P. Auto Bratislava nastala v roku 2016, kedy nás klient oslovil s potrebou vytvoriť reklamnú kampaň zameranú na predaj skladových vozidiel Volvo V40.</p>
                </div>
			</div>

		</div>
    </div>

    <div class="content-wrapper content-wrapper--no-overflow">
        <div class="imgwrap">
            <img class="img-fluid" data-aos="slide-up" data-aos-delay="200" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/pic-riesenie.png" alt="" />
        </div>
    </div>

    <div class="counterblock">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="animabox animabox--type1">
                        <div class="infobox infobox--type1" data-aos="flip-left" data-aos-delay="300">
                            <div class="infobox__desc">zásah vyše</div>
                            <div class="infobox__counter">
                                <span class="number" id="counter1">0</span>k
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="animabox animabox--type2">
                        <div class="infobox infobox--type2" data-aos="flip-left" data-aos-delay="500">
                            <div class="infobox__desc">počet leadov</div>
                            <div class="infobox__counter">
                                <span class="number" id="counter2">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p class="notop">Klientovi sme navrhli riešenie predaja formou získavania relevantných leadov, akými boli kontakty na potenciálnych zákazníkov, ktorí prejavili záujem o kúpu vozidla. Vytvorili sme unikátnu <strong>mikrostránku zbierajúcu kontaktné údaje</strong> užívateľov a podporujúcu predaj konkrétneho vozidla Volvo V40. Kampaň sme časovo obmedzili pre zvýšenie záujmu zo strany užívateľov. <strong>Na propagáciu stránky sme použili kanály Google a Facebook.</strong></p>
                </div>
            </div>
        </div>

    </div>

    <div class="content-wrapper content-wrapper--no-overflow">
        <div class="status-images">
            <img data-aos="zoom-out-right" data-aos-delay="300" class="status-images__image-1" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/pic-stav1.png" />
            <img data-aos="flip-right" data-aos-delay="500" class="status-images__image-2" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/top-auto-bratislava/pic-stav2.png" />
        </div>
    </div>

	<div class="content-wrapper">
		<div class="wysiwyg">

			<h2 class="bigtext marginbottom">Finálny stav</h2>
            <p class="notop">Mesačná kampaň na podporu predaja vozidiel zasiahla celkovo viac ako <strong>500 000 užívateľov a vygenerovala 239 konkrétnych leadov</strong>. Všetky skladové vozidlá sa aj pomocou našej online kampane podarilo predať.</p>
            <p><strong class="to-upper">Sumarizácia</strong></p>
            <p>Cieľ kampane bol splnený a všetky skladové vozidlá našli svojich nových majiteľov. Klientovi sa spolupráca natoľko páčila, že s nami pokračoval na <strong>ďalších 7 kampaniach v priebehu 1 roka</strong>. Generovanie leadov postupne zdokonaľujeme a pri posledných kampaniach sme dokonca podstúpili aj <strong>osobnú kvalifikáciu leadov</strong>, aby sme odčlenili tie menej relevantné. Tým sme docielili, že klient už dostáva iba finálny zoznam užívateľov s vysokým záujmom o kúpu špecifického modelu.</p>

		</div>
	</div>

	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Potrebujem leady'); ?>

<?php get_footer(); ?>