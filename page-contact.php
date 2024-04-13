<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

	<!-- header -->
	<div class="header clearfix">
        <div class="vertical-align content-wrapper">

		<div class="headergroup headergroup--white">
			<h1 class="headergroup__title bighead">Napíšte nám</h1>
			<h2 class="text-center lead-text">Ak potrebujete pomoc s&nbsp;online marketingovou stratégiou alebo web developmentom, neváhajte nás kontaktovať.</h2>
			<h1 class="headergroup__title write-form">Vyplňte formulár</h1>
		</div>

<!--		<hgroup class="headergroup headergroup--white">-->
<!--		</hgroup>-->

        </div>

		<style>
			.header {
				min-height: 660px;
				height: auto !important;
			}

			@media only screen and (max-width: 1001px) {
				.header {
					min-height: 415px !important;
				}
			}

			@media only screen and (max-height: 650px) {
				.header {
					min-height: 415px !important;
				}
			}

			.contact-form { padding-top: 50px; padding-bottom: 35px; }
			.contact-form > br { display: none; }
			.contact-form .fancyheader { display: none; }
		</style>

	</div>

	<div class="content-wrapper content-wrapper--whiteoverlap">
		<?php echo generateContactForm(''); ?>
	</div>

<?php get_footer(); ?>
