<?php /* Template Name: Podcast */ ?>

<?php get_header(); ?>

<?php
include('_hero.php');
?>

<div class="content-wrapper">
	<div class="podcast-listing podcast-listing-podcast">

		<?php
		$args = array(
			'post_status' => array( 'publish' ),
			'post_type' => 'podcast',
		);

		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$date_format = get_option( 'date_format' );
		$post_query = new WP_Query($args);
		$iter = 0;
		if($post_query->have_posts() ) {
			while($post_query->have_posts() ) {
				$iter++;
				$post_query->the_post();
				?>

				<div class="podcast-listing__item">
					<div class="row">
						<div class="col1 col-sm-12">
							<div class="podcast-listing__item_head">
								<?php the_post_thumbnail('medium'); ?>
								<div class="embed">
									<input type="text" value="<?=htmlentities(get_post_meta($post->ID, 'Soundcloud', true))?>"/>
								</div>

								<h2 class="podcast-listing__item__title">
									<?php the_title(); ?>
								</h2>
								<a href="" class="btn btn-play">Prehrať</a>
							</div>
							<div class="podcast-listing__item_body">
								<p><?php echo the_content(); ?></p>
							</div>
						</div>
					</div>
				</div>

			<?php }
		} ?>
		<div class="clear"></div>
	</div>
</div>

<?php include('inc/contact_form.php'); ?>

<?php get_footer(); ?>