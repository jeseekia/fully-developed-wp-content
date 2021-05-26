<?php get_header(); ?>
  <?php
    if(have_posts()):
      while(have_posts()): the_post();
        the_title('<h1>', '</h1>');
        the_content('<p>', '<p>'); ?>
        <a href="<?php the_field('live-url') ?>">View live</a>
        <?php if(get_field('code-url')) { ?>
          <a href="<?php the_field('code-url') ?>">View code</a>
        <?php  }?>
      <?php endwhile;
    else:
      _e("No matching pages found", "textdomain");
    endif;
   ?>
<?php get_footer(); ?>
