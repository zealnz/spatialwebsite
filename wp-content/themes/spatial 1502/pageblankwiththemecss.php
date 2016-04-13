<div style="display:none;" >
< ?php
/*
Template Name: Page Blank with theme CSS
*/
?>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {
header("X-UA-Compatible: IE=7");} ?>


<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE7? />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />


	<?php wp_head(); ?>
</head>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>



		<?php endwhile; endif; ?>
