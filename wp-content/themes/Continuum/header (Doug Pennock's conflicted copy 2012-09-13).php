<?php ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><head profile="http://gmpg.org/afn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?> charset==<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
		<?php bloginfo( 'name' ); ?>
    </title>

    <?php include(ABSPATH . "/head.inc"); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <style>
		<?php include("wp-css.inc" ); ?>
	</style>
</head>
<body>
<!-- header -->
<?php include(ABSPATH . "/header.inc" ); ?>
<!-- /header -->