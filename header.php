<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>

<body>
<div class="blogtitle">
<div class="blogtitlehead"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></div>
<p id="description"><?php bloginfo('description'); ?></p>
</div>
<div class="blogtitleline"></div>