<?php /* Template Name: Career_Page */ ?>

<?php get_header(); ?>

	<?php
	global $post;
	$post = get_post( 1555, OBJECT );
	setup_postdata( $post );

	include('_hero.php'); ?>

	<div class="content-wrapper">

		<div class="career-list">

			<?php
			query_posts(array(
				'post_type' => 'kariera',
				'showposts' => -1
			) );
			?>

			<?php if(!have_posts()) : ?>
				<br />
				<br />
				<br />
				<br />
				<div class="text-center">
					<i class="fa fa-briefcase" aria-hidden="true" style="font-size: 80px;"></i>
					<br />
					<h3>Momentálne nemáme otvorené nové pozície...</h3>
				</div>
				<br />
				<br />
				<br />
				<br />
				<br />
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php
				$index = $wp_query->current_post;
				$post = get_post();
				$categories = get_the_category($post->ID);
				?>

				<div class="col-block">
					<div class="shadow-box">
						<div class="shadow-box__content">

							<?php $redirect_to = get_post_meta($post->ID, 'redirect_to', true); ?>

							<a href="<?php if(isset($redirect_to) && $redirect_to != '') { echo $redirect_to; } else { echo the_permalink(); } ?>" class="career-block">
								<span class="text-block">
									<?php the_title(); ?>
									<span class="more"><img src="/wp-content/themes/kremsa/img/arrow-right.png" alt=""> more info</span>
								</span>
							</a>

							<p>
								<?php the_excerpt(); ?>
							</p>


						</div>
					</div>
				</div>

			<?php endwhile;?>

		</div>

		<br />
		<p class="text-center" style="position: relative; bottom: -30px;">Nenašli ste vhodnú pozíciu, no aj tak ste presvedčený, že budete pre náš tím prínosom.<br />
		Pošlite nám vaše CV a napíšte pár viet o sebe.</p>

		<?php echo generateContactForm('Pracujte s nami'); ?>
	</div>

<?php get_footer(); ?>
