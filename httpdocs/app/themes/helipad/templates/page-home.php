<?php
/**
 * template name: Home Page
 */
?>

<?php get_header(); ?>

  <main id="primary" class="page">
    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'hero'); ?>
      <?php get_template_part('template-parts/content', 'skills'); ?>
      <?php get_template_part('template-parts/content', 'portfolio'); ?>
      <?php get_template_part('template-parts/content', 'contact'); ?>

    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>