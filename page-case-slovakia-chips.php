<?php /*
Template Name: Case Study - Slovakia Chips
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'slovakia-chips';
get_header('casestudy');
?>

<article>

	<!-- header -->
	<div class="header clearfix" style="background-color: #c1a47f; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/slovakia-chips/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Slovakia Chips</h1>
				<h2 class="headergroup__title headergroup__title--marginer">webové riešenia | development</h2>
			</div>



		</div>
	</div>

	<div class="content-wrapper">
		<img class="projecttop img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/slovakia-chips/header-pic.png" alt="" />

		<br />
		<br />

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/slovakia-chips/logo.png" alt="" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p>Intersnack Slovensko a.s. patrí medzi kľúčových hráčov na slovenskom trhu slaných snackov. Spoločnosť, ktorá pôsobí na trhu už od roku 1994, zastrešuje značky ako SLOVAKIA, Chio, Pom-Bär. Intersnack Slovensko je dcérskou spoločnosťou Intersnack Group, ktorá je popredným výrobcom slaných snackov v Európe so 16 dcérskymi spoločnosťami, 26 výrobnými závodmi a 6000 zamestnancami.</p>
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
					<p class="small-top">Intersnack Slovensko a.s. nás v roku 2012 oslovilo v záujme o spoluprácu pri vytvorení webovej stránky pre prezentáciu produktov SLOVAKIA. Cieľom bolo vytvoriť sviežu a modernú stránku, ktorá mala zaujať dizajnom, obsahom a technickým spracovaním.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="bookblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/slovakia-chips/img-riesenie.png" alt="" />
			</div>

			<div class="wysiwyg" style="min-height: inherit;">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext mt0">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
						<p class="">Redizajn stránky prebehol v duchu najnovších trendov a možností tak, aby zmeny odzrkadlovali reálne potreby a nároky spoločnosti. Využili sme kombináciu HTML/CSS, flash/javascript elementov a pripravili sme dynamickú stránku so štandardnými podsekciami a navigačným menu. V rámci stránky sme vytvorili pútavé zobrazenie produktov s použitím dynamických elementov pre ich zvýraznenie a upútanie používateľa.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

    <br />
    <br />

    <div class="content-wrapper">
        <img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/slovakia-chips/img-sumarizacia.png" alt="" />
    </div>

	<br />
	<br />
	<br />

	<div class="content-wrapper">
		<div class="wysiwyg" style="padding-top: 0;">
			<h2 class="bigtext marginbottom">Sumarizácia</h2>
			<p class="small-top">Stránka SLOVAKIA sa stala pútavou aj vďaka dynamickému zobrazeniu produktov a láka používateľa preklikať sa ďalšími podstránkami. Pri vytváraní webu pre klienta vždy zohľadňujeme charakter samotnej značky, konkrétne požiadavky a snažíme sa ich pretaviť do výsledku, ktorý uspokojí klienta, reprezentuje značku a zaujme návštevníka.</p>
		</div>
	</div>

	<br />
	<br />
	<br />
	<br />
	<?php echo generateSimilarCaseStudies(get_the_ID()); ?>


</article>

<?php echo generateContactForm('Web na mieru'); ?>

<?php get_footer(); ?>