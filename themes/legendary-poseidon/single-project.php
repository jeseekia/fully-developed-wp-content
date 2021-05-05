<?php get_header(); ?>
  <?php
    if(have_posts()):
      while(have_posts()): the_post();
        the_title('<h1>', '</h1>');
        the_content('<p>', '<p>'); ?>
        <a href="<?php the_field('url') ?>">View live</a>
      <?php endwhile;
    else:
      _e("No matching pages found", "textdomain");
    endif;
   ?>
<?php get_footer(); ?>
