<?php get_header(); ?>

<main>
  <h1><?php echo get_the_title(); ?></h1>
  <div class="post-contents">
    <?php echo get_the_content(); ?>
  </div>
</main>

<?php get_footer(); ?>