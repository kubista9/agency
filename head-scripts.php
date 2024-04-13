<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
	var isIE = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
</script>

<?php if ( is_post_type_archive( 'portfolio' ) ): ?>
	<title>Portfólio | Kremsa Digital</title>
<?php else : ?>
	<title><?php wp_title(); ?></title>
<?php endif; ?>

<?php if (is_post_type_archive('portfolio')) : ?>
	<meta name="description" content="Na našu prácu sme hrdí. Naše výsledky nielen spĺňajú ale predstihujú stanovené ciele a očakávania. Úspech a spokojnosť klienta sú u nás na prvom mieste.">
<?php endif; ?>

<?php wp_head();?>

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' );?>/img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo( 'template_directory' );?>/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo( 'template_directory' );?>/img/fav/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' );?>/img/fav/manifest.json">
<link rel="mask-icon" href="<?php echo get_bloginfo( 'template_directory' );?>/img/fav/safari-pinned-tab.svg" color="#f57d22">
<meta name="theme-color" content="#f57d22">

<script>
	(function () {
		var e,i=["https://fastbase.com/fscript.js","EHvOLJqMxi","script"],a=document,s=a.createElement(i[2]);
		s.async=!0,s.id=i[1],s.src=i[0],(e=a.getElementsByTagName(i[2])[0]).parentNode.insertBefore(s,e)
	})();
</script>