<?php
	get_header();
	$post = $wp_query->post;
?>

<style>
	.contact-form .fancyheader {
		display: none;
	}

	.headergroup__title.title {
		margin-top: 0 !important;
		font-size: 3em;
		line-height: 1.1em;
	}
</style>

    <!-- header -->
    <div class="header clearfix">
        <div class="vertical-align content-wrapper">

        <img class="headergroup__ico" src="<?php echo get_bloginfo( 'template_directory' );?>/img/head_kariera.svg" alt="" />

		<div class="headergroup headergroup--white">
			<h1 class="headergroup__title bighead">Kariéra</h1>
			<h2 class="text-center lead-text">Momentálne hľadáme šikovných ľudí na tieto pozície</h2>
		</div>

        </div>

		<style>
			.header {
				min-height: 723px;
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

			@media only screen and (max-height: 650px) {
				.headergroup__title {
					font-size: 40px !important;
					line-height: 1.1em;
				}
			}

		</style>

	</div>

	<div class="content-wrapper content-wrapper--whiteoverlap">

		<div class="wysiwyg">
			<h1 class="headergroup__title bighead title"><?php echo $post->post_title; ?></h1>
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>

		<?php echo generateContactForm(''); ?>
	</div>

<?php get_footer(); ?>
