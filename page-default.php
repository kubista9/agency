<?php /* Template Name: Default template */ ?>

<?php
get_header();
?>

	<!-- header -->
	<div class="header clearfix">

		<br />
		<br />
		<div class="headergroup headergroup--white">
			<h1 class="headergroup__title bighead"><?php echo the_title(); ?></h1>
		</div>

		<style>
			.header {
				min-height: 415px;
				height: auto !important;
			}

			.content-wrapper--whiteoverlap {
				min-height: 220px;
			}

			@media only screen and (max-width: 1001px) {
				.header {
					min-height: 200px !important;
				}
			}

			@media only screen and (max-height: 650px) {
				.header {
					min-height: 200px !important;
				}
			}

			.contact-form { padding-top: 50px; padding-bottom: 35px; }
			.contact-form > br { display: none; }
			.contact-form .fancyheader { display: none; }
		</style>

	</div>

	<div class="content-wrapper content-wrapper--whiteoverlap">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>

<?php get_footer(); ?>