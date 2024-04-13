<?php /* Template Name: Portfolio */ ?>

<?php get_header(); ?>

<?php
global $post;
$post = get_post( 43, OBJECT );
setup_postdata( $post );

include('_hero.php');
?>

<style>
	@media only screen and (max-width: 1000px) {
		body.post-type-archive-portfolio .header {
			min-height: 800px;
		}
	}

	@media only screen and (max-width: 650px) {
		body.post-type-archive-portfolio .header {
			min-height: 1000px;
		}
	}

	@media only screen and (width: 320px) and (height: 568px) {
		.header {
			min-height: 1030px !important;
		}
	}

	@media only screen and (max-height: 940px) {
		body.post-type-archive-portfolio .header {
			min-height: 930px;
		}
	}
</style>
<div class="content-wrapper content-wrapper--littleoverlap content-wrapper--wide">

	<div class="grid portfolio">

		<?php
		query_posts(array(
			'post_type' => 'portfolio',
			'posts_per_page' => -1
		) );
		?>
		<?php while (have_posts()) : the_post(); ?>

			<?php
			$index = $wp_query->current_post + 1;
			$post = get_post();
			$categories = get_the_category($post->ID);
			?>

			<div class="grid-item portfolio__item portfolio <?php if($index == 1) echo'first'; else if($index == 2) echo'second'; ?> <?php echo isset($categories[0]) ? $categories[0]->slug : ''; ?>">
				<div class="shadow-box">
					<div class="shadow-box__content">

						<?php
						$redirect_to = get_post_meta($post->ID, 'redirect_to', true);
						?>

						<div class="shadow-box__content--overflowhidden">

							<a href="<?php if(isset($redirect_to) && $redirect_to != '') { echo $redirect_to; } else { echo the_permalink(); } ?>" class="portfolio__item__wrp">
								<span class="portfolio__item__wrp__cover">
									<span class="portfolio__item__wrp__title">
										<?= get_field('client') ?  get_field('client') : get_the_title(); ?>
									</span>
									<span class="portfolio__item__wrp__info">
										<?=get_field('service') ? get_field('service').'<br>' : ''?>
										PORTFOLIO
									</span>
								</span>
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'portfolio'); ?>" alt="" />
							</a>

						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>

		<?php
		query_posts(array(
			'post_type' => 'case-study',
			'showposts' => -1
		) );
		?>
		<?php while (have_posts()) : the_post(); ?>

			<?php
			$index = $wp_query->current_post + 1;
			$post = get_post();
			$categories = get_the_category($post->ID);
			?>

			<div class="grid-item portfolio__item case-study <?php if($index == 1) echo'first'; else if($index == 2) echo'second'; ?> <?php echo isset($categories[0]) ? $categories[0]->slug : ''; ?>">
				<div class="shadow-box">
					<div class="shadow-box__content">

						<?php
						$redirect_to = get_post_meta($post->ID, 'redirect_to', true);
						?>

						<div class="shadow-box__content--overflowhidden">

							<a href="<?php if(isset($redirect_to) && $redirect_to != '') { echo $redirect_to; } else { echo the_permalink(); } ?>" class="portfolio__item__wrp">
								<span class="portfolio__item__wrp__cover">
									<span class="portfolio__item__wrp__title">
										<?= get_field('client') ?  get_field('client') : get_the_title(); ?>
									</span>
									<span class="portfolio__item__wrp__info">
										<?=get_field('service')?> <br>
										CASE STUDY
									</span>
								</span>
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'portfolio'); ?>" alt="" />
							</a>

						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>

	</div>
</div>

<div class="contact__padding-fix">
    <?php echo generateContactForm(''); ?>
</div>

<?php get_footer(); ?>
