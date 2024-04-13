<?php get_header('blog'); ?>

	<?php
		$post = $wp_query->post;
	?>

<style>
	.header {
		height: auto !important;
	}
</style>

<!-- header -->
<?php if($cover = get_field('cover', get_the_ID())) { ?>
	<div class="header clearfix" style="background-color: #054173; background-image: url(<?=$cover['url']?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead"><?= $post->post_title; ?></h1>
				<h2 class="headergroup__title headergroup__title--marginer"><?= $post->post_excerpt; ?></h2>
			</div>

		</div>
	</div>
<?php } else { ?>
	<div class="header clearfix" style="background-color: #054173; background-image: url(<?=the_post_thumbnail_url('original')?>); background-position: center center; background-repeat: no-repeat; background-size: cover;">
		<div class="vertical-align content-wrapper">

			<div class="headergroup headergroup--white">
				<h1 class="headergroup__title bighead"><?= $post->post_title; ?></h1>
				<h2 class="headergroup__title headergroup__title--marginer"><?= $post->post_excerpt; ?></h2>
			</div>

		</div>
	</div>
<?php } ?>
<!-- // header -->

<div class="content-wrapper">
	<?php if($picture = get_field('picture', get_the_ID())) { ?>
		<style>
			.case-header-img {
				display: block;
				margin: -200px auto -30px
			}
			@media (max-width: 768px) {
				.case-header-img {
					width: 50%;
					margin: -20px auto -30px
				}
			}
		</style>
		<!-- Header Image - Books -->
		<img class="case-header-img img-fluid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" src="<?=$picture['url']?>" alt="" />
	<?php } ?>

	<div class="wysiwyg">
		<?php echo wpautop($post->post_content); ?>
	</div>
</div>


<?php get_footer(); ?>

<style>
	.contact-form {
		display: none;
	}
</style>
