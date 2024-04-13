<?php /* Template Name: Orange template */ ?>

<?php
get_header();
?>

<div class="content-wrapper content-wrapper--orange">
	<div class="header clearfix" style="">


		<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			echo '<img src="';
			echo the_post_thumbnail_url('full');
			echo '" alt="" />';
		}
		?>


	</div>

	<div class="inner">

		<hgroup class="headergroup headergroup--white">
			<h1 class="headergroup__title bighead"><?php echo the_title(); ?></h1>
			<br>
		</hgroup>

		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>
</div>

<?php echo generateContactForm(''); ?>

<?php get_footer(); ?>