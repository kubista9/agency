<?php /* Template Name: Homepage */ ?>
<head>
	<style>
* {
  box-sizing: border-box;
}
/* Whole style is created for header demostration only*/
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 800px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:1530px){
	.middle-column{
		display: none !important;
	}
}
</style>
</head>
<?php get_header(); ?>

<div class="hero">

	<div class="row">
	  <div class="col-md-4">
	    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/Kremsa-header-img.png" alt="">
	  </div>
	  <div class="col-md-4 middle-column">
	  </div>
	  <div class="col-md-4">
	    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/Kremsa-header-text.png" alt="">

	  </div>
	</div>

	</br>
	</br>

	<p><?=nl2br(strip_tags($post->post_content))	?></p>

</div>

	<div class="content-wrapper">

		<!-- showcase grid -->

		<div class="clearfix force-block">

			<div class="row">

				<div class="grid-card col-md-4">

					<!-- showcase 1 -->

					<div class="shadow-box" data-aos="fade-right">

						<div class="shadow-box__content">

							<a href="/case-study/jack-daniels-make-it-count/" class="case-study-grid">

								<div class="image">

									<img src="/wp-content/uploads/2021/02/thumb-JD2.jpg" alt="">

								</div>

								<div class="description">

									<div class="vertical-horizontal-center">

										<div class="cell">

											<h3><?php echo __('Jack Daniel’s Kampaň', 'kremsa'); ?></h3>

											<p>

												<?php echo __('Marketingová kampaň na podporu predaja v čase korona krízy', 'kremsa'); ?>

											</p>

											<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/project-grid-arrow.png" alt="">

										</div>

									</div>

								</div>

							</a>

						</div>

					</div>

					<!-- //showcase 1 -->

				</div>

				<div class="grid-card col-md-4">

					<!-- showcase 2 -->

					<div class="shadow-box" data-aos="fade-right">

						<div class="shadow-box__content">

							<a href="/case-study/highrent-prenajom-luxusnych-aut/" class="case-study-grid">

								<div class="image">

									<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/portfolio/portfolio_highrent.png" alt="">

								</div>

								<div class="description">

									<div class="vertical-horizontal-center">

										<div class="cell">

											<h3><?php echo __('HIGHRENT - Prenájom luxusných áut', 'kremsa'); ?></h3>

											<p>

												<?php echo __('Kompletné služby v rámci performance a content marketingu', 'kremsa'); ?>

											</p>

											<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/project-grid-arrow.png" alt="">

										</div>

									</div>

								</div>

							</a>

						</div>

					</div>

					<!-- //showcase 1 -->

				</div>

				<div class="grid-card col-md-4">

					<!-- showcase 3 -->

					<div class="shadow-box" data-aos="fade-right">

						<div class="shadow-box__content">

							<a href="case-study/audi-centrum-bratislava/" class="case-study-grid">

								<div class="image">

									<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/portfolio/audicentrum.png" alt="">

								</div>

								<div class="description">

									<div class="vertical-horizontal-center">

										<div class="cell">

											<h3><?php echo __('AUDI CENTRUM BRATISLAVA', 'kremsa'); ?></h3>

											<p>

												<?php echo __('Na mieru vytvorená web stránka pre Audi Centrum Bratislava reflektuje jednotný komunikačný vizuál značky Audi', 'kremsa'); ?>

											</p>

											<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/project-grid-arrow.png" alt="">

										</div>

									</div>

								</div>

							</a>

						</div>

					</div>

					<!-- //showcase 2 -->

				</div>

				<div class="grid-card col-md-4">

					<!-- //showcase 2 -->

				</div>

			</div>

			<hgroup class="headergroup">

				<!-- <h1 class="headergroup__title"><a href="/portfolio">všetky práce</a></h1> -->
				<h1 class="btn"><a href="https://calendly.com/kremsa" style="color: #fff; padding: 0 10px">Dohodnime si stretnutie</a></h1>

			</hgroup>

		</div>

		<!-- //showcase grid -->

	</div>

	<!-- testimonials -->

	<section class="testimonials">

		<div class="content-wrapper">

			<div class="slider">

				<div>

					<div class="testimonials__content" onclick="void(0)">

						<img class="testimonials__image" src="<?php echo get_bloginfo( 'template_directory' );?>/img/testimonial-mitsu.png" alt="" />

						<p class="testimonials__text">

							S digitálnou agentúrou Kremsa Digital sme obzvlášť spokojní. Svedčí o tom niekoľko úspešných online kampaní, ktoré prispeli k zvýšeniu predaja produktov značky Mitsubishi. Profesionálny prístup agentúry, perfektný time management, promptné dodanie služieb, na ktorých sme sa vždy vzájomne dohodli, sú hlavnými znakmi, ktorými sa Kremsa Digital môže smelo pochváliť. Ich servis môžeme len odporučiť.

						</p>

						<div class="testimonials__namebox">

							Zuzana Kubíková <span class="testimonials__namebox__position">marketing manager Mitsubishi Motors SR</span>

						</div>

					</div>

				</div>

				<div>

					<div class="testimonials__content" onclick="void(0)">

						<img class="testimonials__image" src="<?php echo get_bloginfo( 'template_directory' );?>/img/testimonial-ikar.png" alt="" />

						<p class="testimonials__text">

							Spoločnosť Kremsa Digital vždy reaguje promptne. Využíva viacero nástrojov, ktoré nachádzajú uplatnenie v jednotlivých kampaniach. Prináša taktiež riešenia pre špeciálne projekty online predajne, ako aj celého knižného vydavateľstva. Niekoľkoročná spolupráca a spokojnosť pokračuje aj naďalej.

						</p>

						<div class="testimonials__namebox">

							Tomas Galierik <span class="testimonials__namebox__position">e-commerce manager vydavateľstva IKAR, a.s.</span>

						</div>

					</div>

				</div>

				<div>

					<div class="testimonials__content" onclick="void(0)">

						<img class="testimonials__image" src="<?php echo get_bloginfo( 'template_directory' );?>/img/testimonial-bmw.png" alt="" />

						<p class="testimonials__text">

							So spoločnosťou Kremsa Digital spolupracujeme už viac ako dva roky. Okrem vysoko profesionálnej práce na bežných kampaniach oceňujeme najmä nové kreatívne prístupy, za ktoré sme boli chválení aj samotným importérom značky BMW na Slovensku. Oceňujeme snahu optimalizovať naše investície do online reklamy. Kremsa Digital je našim partnerom v oblasti online a máme v nich absolútnu dôveru.

						</p>

						<div class="testimonials__namebox">

							Christian Malchárek <span class="testimonials__namebox__position">vykonny riaditel BMW Group M</span>

						</div>

					</div>

				</div>

				<div>

					<div class="testimonials__content" onclick="void(0)">

						<img class="testimonials__image" src="<?php echo get_bloginfo( 'template_directory' );?>/img/testimonial-auto-palace.png" alt="" />

						<p class="testimonials__text">

							S agentúrou Kremsa Digital spolupracujeme už viac ako 5 rokov. Poskytujú nám kompletný servis online kampaní pre naše dílerstvo a značku Mitsubishi. Počas obdobia spolupráce je cítiť neustály progres a inovácie, ktoré posúvajú naše výsledky ďalej. Pozitívom je aj plynulá a bezproblémová komunikácia s našou accountkou Kristínou Konečnou.

						</p>

						<div class="testimonials__namebox">

							Ivana Balážová <span class="testimonials__namebox__position">marketing manager Auto Palace Panonska</span>

						</div>

					</div>

				</div>

				<div>

					<div class="testimonials__content" onclick="void(0)">

						<img class="testimonials__image" src="<?php echo get_bloginfo( 'template_directory' );?>/img/testimonial-sfz.png" alt="" />

						<p class="testimonials__text">

							Kremsa Digital nie je pre nás len bežnou agentúrou, ktorá si vyžiada zadanie a podľa neho "niečo urobí". Je pre nás partnerom a najmä obrovskou pridanou hodnotou v tom, ze sa aktívne zapája už do procesu tvorby zadania samotného a prináša tak veľmi potrebný pohľad zvonka. Projekty tak získavajú hodnotu, ktorú by sme im sami s najväčšou pravdepodobnosťou neboli schopní v plnom rozsahu dodať len ako klient. Samotná realizácia a najmä pomer cena/výkon v zmysle prínosu je na úrovni 10/10.

						</p>

						<div class="testimonials__namebox">

							Jaroslav Šišolák <span class="testimonials__namebox__position">managing director SFZ Marketing s.r.o.</span>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- //testimonials -->

	<!-- client logos -->

	<section class="client-logos">

		<div class="content-wrapper">

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/bond.png" alt="BOND Reality">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/audi.png" alt="Audi">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/legrand.png" alt="Legrand">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/mitsubishi.png" alt="Mitsubishi Motors">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/topauto.png" alt="T.O.P. Auto Bratislava">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/koft.png" alt="koft">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/volvo.png" alt="Volvo">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/ford.png" alt="Ford">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/bmw.png" alt="BMW">

			</div>

			<div>

				<img src="/wp-content/themes/kremsa/img/clientlogos/amoeba.png" alt="Amoeba Music">

			</div>

		</div>

	</section>

	<!-- client logos -->

<center><div class="contact__spacer" style="margin-top: 60px;">
	<span class="text" style="font-family:Roboto,Arial,sans-serif; text-align: center; font-size: 16px;"> Chcete sa s nami stretnúť? Radi vás spoznáme. Naplánujme si stretnutie.</span>
    
<div class="contact__spacer" style="margin-top: 30px; color: #ffffff;">
<form method="get" action="https://calendly.com/kremsa"><button type="submit" style="display: inline-block; color:white; background-color:#f26228; border: 8px; font-size: 16px; color:white;font-family:Roboto,Arial,sans-serif; text-transform: uppercase; min-width: 300px; line-height: 60px; font-weight: bold; align: center;">Odkaz na náš kalendár</button></form>
</div></center>

<?php include('inc/contact_form.php'); ?>

<?php get_footer(); ?>