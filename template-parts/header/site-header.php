<?php
/**
 * Displays the site header.
 *
 * @package Greenfire
 */
?>
<?php
/*
Template Name: Header Template
*/
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Quonn Bernard Dev Test</title>
  <meta name="description" content="Greenfire dev test">
  
  <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/quonnbernard.wordpresstemplate/siteicon.png">
  <?php wp_head();?>

</head>

<body>
    <?php get_template_part( 'template-parts/header/header-nav' ); ?>