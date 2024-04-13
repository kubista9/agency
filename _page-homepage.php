<?php /* Template Name: Homepage */ ?>
<?php get_header('homepage'); ?>

	<div class="content-wrapper--littleoverlap">
		<div class="content-wrapper">

			<hgroup class="headergroup headergroup--style2" data-aos="fade-up">
				<h1 class="headergroup__title"><?php echo __('Naše služby', 'kremsa'); ?></h1>
				<h2 class="headergroup__subtitle"><?php echo __('Dovoľte nám pomôcť a poradiť vám na ceste k úspechu', 'kremsa'); ?></h2>
			</hgroup>

			<!-- NASE SLUZBY -->
			<div class="row">
				<div class="col-md-4 text-center">

					<div class="shadow-box shadow-box--maxw350 shadow-box shadow-box--fixcorners elm1" data-aos="fade-right">
						<div class="shadow-box__lb-square"></div>
						<div class="shadow-box__rt-square"></div>
						<div class="shadow-box__content">
							<div class="shadow-box__content--overflowhidden">

								<a href="/sluzby/#marketing" class="sbutton-block square">
                                    <span class="sbutton-block__normalico sbutton-block__normalico--fixperformance">
                                        <img class="" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sluzby-performance-marketing.svg" alt="" />
                                    </span>
									<span class="sbutton-block__title">Performance Marketing</span>
								</a>

							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 text-center">

					<div class="shadow-box shadow-box--maxw350 shadow-box shadow-box--fixcorners elm2" data-aos="fade-up">
						<div class="shadow-box__lb-square"></div>
						<div class="shadow-box__rt-square"></div>
						<div class="shadow-box__content">
							<div class="shadow-box__content--overflowhidden">

								<a href="/sluzby/#development" class="sbutton-block square">
                                    <span class="sbutton-block__normalico sbutton-block__normalico--fixdeveloper">
                                        <img class="" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sluzby-development.svg" alt="" />
                                    </span>
									<span class="sbutton-block__title">Development</span>
								</a>

							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 text-center">

					<div class="shadow-box shadow-box--maxw350 shadow-box shadow-box--fixcorners elm3" data-aos="fade-left">
						<div class="shadow-box__lb-square"></div>
						<div class="shadow-box__rt-square"></div>
						<div class="shadow-box__content">
							<div class="shadow-box__content--overflowhidden">

								<a href="/sluzby/#socialmedia" class="sbutton-block square">
                                    <span class="sbutton-block__normalico sbutton-block__normalico--fixsocial">
                                        <img class="" src="<?php echo get_bloginfo( 'template_directory' );?>/img/sluzby-social-media.svg" alt="" />
                                    </span>
									<span class="sbutton-block__title">Social Media</span>
								</a>

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- //NASE SLUZBY -->

			<hgroup class="headergroup">
				<h1 class="headergroup__title"><?php echo __('Naše produkty', 'kremsa'); ?></h1>
				<h2 class="headergroup__subtitle"><?php echo __('Uľahčite si cestu k úspechu pomocou našich online produktov', 'kremsa'); ?></h2>
			</hgroup>

			<!-- NASE PRODUKTY -->
			<div class="clearfix">

				<div class="row">
					<div class="colspacer col-md-4 text-center xxcolspacer">

						<!-- hitscout -->
						<div class="flip-container">
							<div class="flipper">
								<div class="front">

									<div class="shadow-box">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<div class="cardflipper">
												<div class="cardflipper__logo cardflipper__logo--hitscout" style="background: transparent url(<?php echo get_bloginfo( 'template_directory' );?>/img/logo-hitscout.svg) center center no-repeat; background-size: contain !important;"></div>
											</div>

										</div>
									</div>

								</div>
								<div class="back">

									<a href="http://main.hitscout.com/" target="_blank" class="shadow-box" style="display: inline-block;">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<div class="cardflipper">
												<div class="cardflipper__card-content">
													<div class="cardflipper__card-content__inside">
														<h2 class="cardflipper__card-content__title">Hitscout</h2>
														<span class="cardflipper__card-content__desc">
                                                                    <strong><?php echo __('Marketingová platforma na stránke Twitch.tv', 'kremsa'); ?></strong>
                                                                </span>
													</div>
													<div class="row cardflipper__card-content__nav">
														<div class="col-md-12">
															<div class="cardflipper__card-content__nav__link"><?php echo __('Navštíviť web', 'kremsa'); ?></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</a>

								</div>
							</div>
						</div>
						<!-- //hitscout -->

					</div>
					<div class="col-md-4 text-center">

						<!-- boosterberg -->
						<div class="flip-container">
							<div class="flipper">
								<div class="front">

									<div class="shadow-box">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<div class="cardflipper">
												<div class="cardflipper__logo" style="background: transparent url(<?php echo get_bloginfo( 'template_directory' );?>/img/logo-boosterberg.svg) center center no-repeat; background-size: contain !important;"></div>
											</div>

										</div>
									</div>

								</div>
								<div class="back">


									<div class="shadow-box" style="display: inline-block;">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<a href="https://boosterberg.com/" target="_blank" class="cardflipper">
												<div class="cardflipper__card-content">
													<div class="cardflipper__card-content__inside">
														<h2 class="cardflipper__card-content__title">Boosterberg</h2>
														<span class="cardflipper__card-content__desc">
                                                                    <strong><?php echo __('Automatický nástroj pre podporu Facebook príspevkov platenou reklamou', 'kremsa'); ?></strong>
                                                                </span>
													</div>
													<div class="row cardflipper__card-content__nav">
														<div class="col-md-12">
															<div class="cardflipper__card-content__nav__link cardflipper__card-content__nav__link--borderseparator"><?php echo __('Navštíviť ', 'kremsa'); ?>web</div>
														</div>
													</div>
												</div>
											</a>

										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- //boosterberg -->

					</div>
					<div class="col-md-4 text-center">

						<!-- poll -->
						<div class="flip-container">
							<div class="flipper">
								<div class="front">

									<div class="">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<div class="cardflipper">
												<div class="cardflipper__logo cardflipper__logo--poll" style="background: transparent url(<?php echo get_bloginfo( 'template_directory' );?>/img/logo-poll.svg) center center no-repeat; background-size: 120px auto !important;"></div>
											</div>

										</div>
									</div>

								</div>
								<div class="back">

									<div class="shadow-box" style="display: inline-block;">
										<div class="shadow-box__lb-square"></div>
										<div class="shadow-box__rt-square"></div>
										<div class="shadow-box__content">

											<a href="http://fans.vote/" target="_blank" class="cardflipper">
												<div class="cardflipper__card-content">
													<div class="cardflipper__card-content__inside">
														<h2 class="cardflipper__card-content__title">Poll</h2>
														<span class="cardflipper__card-content__desc">
                                                                    <strong><?php echo __('Nástroj na tvorbu Facebook ankiet', 'kremsa'); ?></strong>
                                                                </span>
													</div>
													<div class="row cardflipper__card-content__nav">
														<div class="col-md-12">
															<div class="cardflipper__card-content__nav__link"><?php echo __('Navštíviť web', 'kremsa'); ?></div>
														</div>
													</div>
												</div>
											</a>

										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- //poll -->

					</div>
				</div>
			</div>
			<!-- //NASE PRODUKTY -->

			<br />
			<hgroup class="headergroup" data-aos="fade-up">
				<h1 class="headergroup__title">Vybrané case studies</h1>
				<h2 class="headergroup__subtitle">Zoznámte sa s našou prácou</h2>
			</hgroup>

			<!-- showcase grid -->
			<div class="clearfix force-block">
				<div class="row">
					<div class="col-md-6">

						<!-- showcase 1 -->
						<div class="shadow-box" data-aos="fade-right">
							<div class="shadow-box__lb-square"></div>
							<div class="shadow-box__rt-square"></div>
							<div class="shadow-box__content">

								<a href="/case-study/mabo-sk/" class="showcase-block" style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/portfolio/portfolio_mabo2.jpg);">
									<img class="showcase-block__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/portfolio/portfolio_mabo2.jpg" alt="" />
									<span class="showcase-block__cover">
	                                    <div class="showcase-block__cover__typo">
	                                        <h3 class="showcase-block__cover__typo__title"><?php echo __('MABO - online obchod s nápojmi', 'kremsa'); ?></h3>
	                                        <p class="showcase-block__cover__typo__desc"><?php echo __('Kompletné služby v rámci performance marketingu', 'kremsa'); ?></p>
	                                        <div class="showcase-block__cover__typo__button"><?php echo __('Pozrieť case study', 'kremsa'); ?></div>
	                                    </div>
	                                </span>
								</a>

							</div>
						</div>
						<!-- //showcase 1 -->

					</div>
					<div class="col-md-6">

						<!-- showcase 2 -->
						<div class="shadow-box" data-aos="fade-left">
							<div class="shadow-box__lb-square"></div>
							<div class="shadow-box__rt-square"></div>
							<div class="shadow-box__content">

								<a href="case-study/stock-slovensko/" class="showcase-block" style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/img/portfolio/portfolio_goldenka2.jpg);">
									<img class="showcase-block__img" src="<?php echo get_bloginfo( 'template_directory' );?>/img/portfolio/portfolio_goldenka2.jpg" alt="" />
									<span class="showcase-block__cover">
                                        <div class="showcase-block__cover__typo">
                                            <h3 class="showcase-block__cover__typo__title"><?php echo __('Stock Slovensko – Goldenka', 'kremsa'); ?></h3>
                                            <p class="showcase-block__cover__typo__desc"><?php echo __('Vývoj súťažnej aplikácie na Facebook', 'kremsa'); ?></p>
                                            <div class="showcase-block__cover__typo__button"><?php echo __('Pozrieť case study', 'kremsa'); ?></div>
                                        </div>
                                    </span>
								</a>

							</div>
						</div>
						<!-- //showcase 2 -->

					</div>
				</div>

			</div>
			<!-- //showcase grid -->

		</div>
	</div>
	<div class="force-block">

		<?php echo generateContactForm('Kontaktujte nás'); ?>

		<br />
		<br />
		<br />


	</div>


<?php get_footer(); ?>