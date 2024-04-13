<?php /* Template Name: About */ ?>

<?php get_header(); ?>

	<?php
	include('_hero.php');
	?>

	<!-- our team -->
    <div class="page-about__wrapper">
        <div class="page-about__team">

            <?php $loop = new WP_Query(array(
                'numberposts'      => -1,
                'orderby'          => 'meta_value_num',
                'meta_key'         => 'kremsa_person_data_order_num',
                'order'            => 'ASC',
                'post_type'        => 'person',
            )); ?>

            <?php if ($loop->have_posts()) : ?>
            <?php while ($loop->have_posts()) : $loop->the_post() ?>
				<?php
				$kremsa_person_data_description = get_post_meta(get_the_ID(), 'kremsa_person_data_description');
				?>

                <div class="page-about__person">
					<img class="page-about__person__photo size-person" src="<?php the_post_thumbnail_url('person'); ?>" alt="">
                    <div class="page-about__person__hover">
						<p><?=($kremsa_person_data_description ? $kremsa_person_data_description[0] : '')?></p>
                    </div>
                </div>

            <?php endwhile ?>
            <?php endif ?>

        </div>
    </div>
	<!-- //our team -->
<?php include('inc/contact_form.php'); ?>

<?php get_footer(); ?>
