<?php /* Template Name: Služby */ ?>

<?php
get_header();
?>

<style>
	.header {
		min-height: 800px;
	}

	@media only screen and (width: 320px) and (height: 568px) {
		.header {
			min-height: 1050px !important;
		}
	}

	@media only screen and (max-width: 650px) {
		.header {
			min-height: 960px;
		}
	}


</style>

	<!-- header -->
	<div class="header clearfix">
		<div class="vertical-align content-wrapper">

			<img class="headergroup__ico" src="<?php echo get_bloginfo( 'template_directory' );?>/img/head_sluzby.svg" alt="" />

			<hgroup class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead">Služby</h1>
                <br><br>
				<h3 class="text-center lead-text">
					Online je náš svet. Nechajte si poradiť a využite naše odborné znalosti a dlhoročné skúsenosti z oblasti online marketingu a developmentu. Ponúkame širokú škálu na mieru šitých riešení akejkoľvek náročnosti.
				</h3>
			</hgroup>
            <div class="page-filter button-group filter-button-group">
                <a href="#marketing" class="page-filter__item selected scroll-to" style="border-bottom: 1px solid white;"><?php echo __('Online marketing', 'kremsa'); ?></a>
                <a href="#development" class="page-filter__item scroll-to"><?php echo __('Development', 'kremsa'); ?></a>
            </div>

		</div>
	</div>

	<div class="content-wrapper content-wrapper--whiteoverlap">
		<br />
		<h2 id="marketing" class="headergroup__title text-center">Online marketing</h2>
		<br />

		<!-- performance marketing -->
		<div class="leadbox" id="performancemarketing">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico coll">
					<img class="leadbox__ico leadbox__ico--ico1" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_target.svg" alt="Performance Marketing" />
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col colr">
					<div class="leadbox__wrap">
						<h4 class="leadbox__title">Performance Marketing (Výkonnostný marketing)</h4>
						<p class="leadbox__text">Ponúkame výkonnostný marketing zameraný na dosahovanie
							merateľných výsledkov a predaja produktov a služieb online</p>
						<a href="/case-study/mabo-sk/" class="lead_button">Case study</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //performance marketing -->

		<div class="separatorline">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-2.svg" alt="" />
		</div>

		<!-- online strategia -->
		<div class="leadbox" id="onlinestrategy">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col coll">
					<img class="leadbox__ico mobile__fallback" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_strategy.svg" alt="Online stratégia a analýza" />
					<div class="leadbox__wrap leadbox__wrap--right">
						<h4 class="leadbox__title">Online stratégia a analýza</h4>
						<p class="leadbox__text">Ponúkame analýzu online trhu a vypracovanie online marketingovej stratégie zameranej na dosahovanie stanovených cieľov</p>
						<a href="/case-study/cez-slovensko/" class="lead_button">Case study</a>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico colr">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_strategy.svg" alt="Online stratégia a analýza" />
				</div>
			</div>
		</div>
		<!-- //online strategia -->

		<div class="separatorline separatorline--type2">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-1.svg" alt="" />
		</div>

		<!-- content marketing -->
		<div class="leadbox" id="contentmarketing">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico coll">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_content.svg" alt="Content Marketing" />
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col colr">
					<div class="leadbox__wrap">
						<h4 class="leadbox__title">Content Marketing (Vytváranie obsahu)</h4>
						<p class="leadbox__text">Pre klientov vytvárame hodnotný obsah. Naše slová si u zákazníkov vytvárajú dôveru</p>
						<a href="/case-study/legrand/" class="lead_button">Case study</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //content marketing -->

		<div class="separatorline separatorline--type3">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-2.svg" alt="" />
		</div>

		<!-- socialne media -->
		<div class="leadbox" id="socialmedia">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col coll">
					<img class="leadbox__ico leadbox__ico--ico1 mobile__fallback" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_social.svg" alt="Sociálne médiá" />
					<div class="leadbox__wrap leadbox__wrap--right">
						<h4 class="leadbox__title">Sociálne médiá</h4>
						<p class="leadbox__text">Spravujeme, moderujeme a optimalizujeme firemné profily na sociálnych sieťach</p>
						<a href="/case-study/little-lane/" class="lead_button">Case study</a>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico colr">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_social.svg" alt="Sociálne médiá" />
				</div>
			</div>
		</div>
		<!-- //socialne media -->

		<div class="separatorline separatorline--type2">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-1.svg" alt="" />
		</div>

		<!-- leady -->
		<div class="leadbox">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico coll">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_lead.svg" alt="Získavanie kontaktov (Lead generation)" />
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col colr">
					<div class="leadbox__wrap">
						<h4 class="leadbox__title">Lead Generation (Získavanie kontaktov)</h4>
						<p class="leadbox__text">Ponúkame reklamné kampane, zamerané na získavanie relevantných kontaktov podľa úzkeho a špecifického cielenia
							na súvisiacu skupinu užívateľov</p>
						<a href="/case-study/top-auto-bratislava/" class="lead_button">Case study</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //leady -->

		<br />
		<br />
		<br />
		<br />
		<br id="development" />
		<h2 class="headergroup__title text-center">Development</h2>
		<br />


		<!-- development -->
		<div class="leadbox">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col coll">
					<img class="leadbox__ico leadbox__ico--ico1 mobile__fallback" data-aos="zoom-out-down"  src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_web.svg" alt="Webové riešenia" />
					<div class="leadbox__wrap leadbox__wrap--right">
						<h4 class="leadbox__title">Webové riešenia</h4>
						<p class="leadbox__text">Vytvárame webstránky podľa daných potrieb a možností klienta</p>
						<a href="/case-study/audi-centrum-bratislava/" class="lead_button">Case study</a>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico colr">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_web.svg" alt="Webové riešenia" />
				</div>
			</div>
		</div>
		<!-- //development -->

		<div class="separatorline separatorline--type3">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-1.svg" alt="" />
		</div>

		<!-- leady -->
		<div class="leadbox">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico coll">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_intranet.svg" alt="Intranetové riešenia" />
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col colr">
					<div class="leadbox__wrap">
						<h4 class="leadbox__title">Intranetové riešenia</h4>
						<p class="leadbox__text">Vytvárame riešenia na mieru, ktoré zvyšujú výkon a optimalizujú vnútrofiremné procesy</p>
						<a href="/case-study/rajo/" class="lead_button">Case study</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //leady -->

		<div class="separatorline separatorline--type4">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-2.svg" alt="" />
		</div>

		<!-- mobile -->
		<div class="leadbox">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col coll">
					<img class="leadbox__ico leadbox__ico--ico1 mobile__fallback" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_mobil.svg" alt="Mobilné a Facebook aplikácie" />
					<div class="leadbox__wrap leadbox__wrap--right">
						<h4 class="leadbox__title">Mobilné a Facebook aplikácie</h4>
						<p class="leadbox__text">Vytvárame mobilné a Facebook aplikácie na podporu firemných aktivít</p>
						<a href="/case-study/stock-slovensko/" class="lead_button">Case study</a>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico colr">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_mobil.svg" alt="Mobilné a Facebook aplikácie" />
				</div>
			</div>
		</div>
		<!-- //mobile -->

		<div class="separatorline separatorline--type4">
			<img class="separatorline__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sep_line-1.svg" alt="" />
		</div>


		<!-- hosting -->
		<div class="leadbox">
			<div class="row">
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col leadbox__col-ico coll">
					<img class="leadbox__ico leadbox__ico--ico1" data-aos="zoom-out-down" src="<?php echo get_bloginfo( 'template_directory' );?>/img/ico_intranet.svg" alt="Intranetové riešenia" />
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 leadbox__col colr">
					<div class="leadbox__wrap">
						<h4 class="leadbox__title">Hostingové služby</h4>
						<p class="leadbox__text">Ponúkame hostingové služby podľa osobitných požiadaviek klienta s personalizovanou podporou</p>
						<a href="/case-study/amoeba-music/" class="lead_button">Case study</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //hosting -->

		<br />
		<br />
		<br />
		<br />
		<br />
		<br />

	</div>

    <div class="content-wrapper content-wrapper--whiteoverlap">
        <?php echo generateContactForm(''); ?>
    </div>

<?php get_footer(); ?>
