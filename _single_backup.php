<?php get_header('blog'); ?>

	<?php $post = $wp_query->post; ?>

	<!-- header -->
	<div id="slider" data-type="background" data-speed="3" class="header parallax header__blog clearfix header--blog"
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				echo 'style="background-image: url(';
				echo the_post_thumbnail_url('blog-cover');
				echo '); background-attachment: fixed;"';
			}
		?>>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="header__blog__cover"></div>
		<?php endif; ?>

		<div class="vertical-align content-wrapper">
			<hgroup class="headergroup headergroup--white text-center">
				<h1 class="headergroup__title headergroup__title--fixwide bighead"><?php echo $post->post_title; ?></h1>
				<p class="headergroup__date">
					<span><?php echo get_the_date(); ?></span>
				</p>
			</hgroup>

		</div>
	</div>

	<div class="content-wrapper content-wrapper--whiteoverlap">
		<div class="wysiwyg">
			<article>

				<div class="animate-wrap-blog">
					<div class="headergroup__title bighead"><?php echo $post->post_title; ?></div>
					<?php if(isset($post->post_excerpt) && $post->post_excerpt != '') : ?>
						<div class="excerpt">
							<?php echo $post->post_excerpt; ?>
						</div>
					<?php endif; ?>

					<br />
					<div style="" class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				</div>

				<?php the_content(); ?>

				<div class="fb-quote"></div>
			</article>
		</div>
	</div>

	<div class="content-wrapper">
		<div class="wysiwyg pt0f" style="min-height: inherit;">
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-597730222452d8fb"></script>
			<div class="addthis_inline_share_toolbox"></div>
		</div>
	</div>

	<br />
	<br />
	<div class="content-wrapper">
		<div class="wysiwyg pt0f" style="min-height: 100%;">
			<!-- promo ebook -->
			<a href="https://kremsa.sk/ebook2/" class="ebookpromo">
				<div class="row">
					<div class="c col-md-2 col-sm-3">

						<img class="img-fluid pic" src="<?php echo get_bloginfo( 'template_directory' );?>/img/content-marketing.png" alt="" />

					</div>
					<div class="c col-md-8 col-sm-6">
						<h4 class="title">eBook Content Marketing</h4>
						<p class="desc">Priemerný zákazník je denne vystavený viac ako 5 000 marketingovým správam.</p>
						<p class="desc2">Ako správne vytvárať hodnotný obsah sa dozviete v našom ebooku.</p>
					</div>
					<div class="c col-md-2 col-sm-3">

						<div class="buttonn"><strong>Stiahnuť</strong> ebook</div>

					</div>


				</div>

			</a>
			<!-- //promo ebook -->
		</div>
		<br />
		<br />

		<div class="wysiwyg pt0f">
			<!-- comments -->
			<h3 class="headergroup__title" style="font-size: 30px; color: black;"><?php echo __('Komentáre', 'kremsa'); ?></h3>
			<?php comments_template(); ?>
			<br />
			<br />
			<!-- //comments -->
		</div>
	</div>

    <!-- related articles -->
    <?php $orig_post = $post;
    global $post;

    $tags = wp_get_post_tags($post->ID);

    if ($tags) {

        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

        $args = array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=> 10, // Number of related posts to display.
            'ignore_sticky_posts'=> 1
        );

        $my_query = new wp_query( $args );

        if($my_query->have_posts()) {
            echo'<h4 class="related-articles__title">'. __('Súvisiace články', 'kremsa') .'</h4>';
            echo'<div class="related-articles">';

            while( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <div class="shadow-box normal">
                    <div class="shadow-box__lb-square"></div>
                    <div class="shadow-box__rt-square"></div>
                    <div class="shadow-box__content">
                        <div class="shadow-box__content--overflowhidden">
                            <div class="related-articles__item">
                                <a title="<?php the_title(); ?>" class="related-articles__item__link" href="<?php the_permalink()?>">
                                    <span class="related-articles__item__cover"><?php the_title(); ?></span>
                                    <?php the_post_thumbnail('related-image'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;

            echo'</div>';
        }
    }

    $post = $orig_post;

    wp_reset_query(); ?>
    <!-- //related articles -->

    <br />
    <br />
    <br />

<?php get_footer(); ?>

<style>
	.contact-form {
		display: none;
	}
</style>
