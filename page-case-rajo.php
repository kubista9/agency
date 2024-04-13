<?php /*
Template Name: Case Study - Rajo
Template Post Type: case-study
 */ ?>

<?php
$GLOBALS['casestudy'] = 'rajo';
get_header('casestudy');
?>

<article>

	<!-- header -->
	<div class="header clearfix" style="background-color: #fff; background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/rajo/header.jpg); background-position: center center; background-repeat: no-repeat;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--red">
				<h1 class="headergroup__title bighead">Rajo partnerská zóna</h1>
				<h2 class="headergroup__title headergroup__title--marginer">Intranetové riešenie</h2>
			</div>

		</div>
	</div>

	<div class="content-wrapper">

		<div class="wysiwyg">

			<div class="row">
				<div class="col-md-4 col-sm-4 text-xs-center">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/rajo/logo.png" alt="Rajo" />
					<br />
					<br />
				</div>
				<div class="col-md-8 col-sm-8">
					<p>Rajo a.s. je jeden z najväčších slovenských producentov mliečnych výrobkov so širokým portfóliom produktov a hlbokou históriou, ktorá siaha až do roku 1886. Základom úspechu firmy na trhu je predovšetkým kvalita a dôslednosť. To potvrdzujú aj rôzne získané certifikáty kvality a ocenenia.</p>
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
					<p class="small-top">Spoločnosť Rajo a.s. sa na nás obrátila s požiadavkou na vytvorenie logistického intranetového riešenia. Našou úlohou bolo vyhotoviť samostatnú zónu, nezávislú od webovej stránky rajo.sk, ktorá  bude sprístupnená oprávneným dodávateľom a veľkoodberateľom pre správu vykladacích a nakladacích kapacít závodu. Partnerská zóna mala byť jednoduchá, prehľadná, ľahko navigovateľná a mala poskytovať logistické riešenie pre dodávku surovín, materiálu alebo odber výrobkov značky RAJO.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="bookblock">
		<div class="content-wrapper">

			<div class="imgwrap">
				<img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/rajo/rajo-riesenie.png" alt="Riešenie" />
			</div>

			<div class="wysiwyg" style="min-height: inherit;">
				<div class="row">
					<div class="col-md-4">
						<h2 class="bigtext mt0">Riešenie</h2>
						<br />
						<br />
					</div>
					<div class="col-md-8">
                        <p class="">Pre klienta sme pripravili <strong>samostatnú aplikáciu určenú zamestnancom RAJO a jej partnerom</strong>. Pre odberateľov a dodávateľov sme vytvorili možnosť rezervácie konkrétnej rampy v požadovanom čase. Dodaným riešením je prehľadný viacvrstvový kalendár s vizualizáciou voľných a rezervovaných termínov danej rampy. Samozrejmosťou je <strong>osobitné nastavenie pravidiel pre rezervácie</strong> (najbližší možný termín, možnosť zrušenia rezervácie a iné), alebo správa typov rámp (vykládky a nakládky). Systém ďalej umožňuje správu existujúcich rezervácií, overených užívateľov partnerskej zóny, prehľadov, ako aj notifikačných nástrojov administrátorov systému.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<br />
	<br />
	<br />

    <div class="content-wrapper text-center">
        <img class="img-fluid" data-aos="zoom-in" src="<?php echo get_bloginfo( 'template_directory' );?>/img/casestudies/rajo/rajo-stav.jpg" alt="Aktuálny stav" />
    </div>

	<br />
	<br />

	<div class="content-wrapper">
		<div class="wysiwyg" style="padding-top: 0;">

			<h2 class="bigtext marginbottom">Aktuálny stav</h2>
            <p class="small-top">Rajo a.s. využíva naše intranetové riešenie vďaka jeho jednoduchosti a užitočnosti. Spoločnosť tak dokázala <strong>zvýšiť plynulosť toku tovarov</strong> a zabezpečila <strong>vyššiu prehľadnosť v dodávke</strong> a odbere výrobkov. <strong>Nedochádza tak k prekrývaniu termínov</strong>, navyše je doprava plynulá a organizovaná.</p>
			<br />
			<p><strong class="to-upper">Sumarizácia</strong></p>
			<br />
			<p>Počas vyvíjania takéhoto riešenia pre Rajo a.s. prešla beta verzia testovaním, aby sme sa presvedčili o jej plnej funkčnosti. Úspešne sa nám podarilo vyhovieť spoločnosti vo všetkých požiadavkách a vytvoriť systém pre riadenie dodávok a odberov, ktorý zapadal do inovatívneho profilu spoločnosti.</p>

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