<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right') ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <?php wp_body_open(); ?>
