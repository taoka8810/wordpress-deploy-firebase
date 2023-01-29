<?php get_header(); ?>

<h1>Hello WordPress by Firebase!!</h1>
<div class="logos">
  <img class="wp-logo" src="<?php echo get_template_directory_uri() ?>/image/WordPress-logotype-wmark.png" alt="">
  <span class="cross">×</span>
  <img class="firebase-logo" src="<?php echo get_template_directory_uri() ?>/image/logo-logomark.png" alt="">
</div>
<div class="container">
  <?php 
    $args = array(
      "posts_per_page" => 20,
    );
    $my_posts = get_posts($args);
    foreach($my_posts as $post): setup_postdata($post);
  ?>
  <a href="<?php echo get_the_permalink(); ?>">
    <h3><?php echo get_the_title(); ?></h3>
  </a>
  <?php endforeach; ?>
</div>

<?php get_footer();  ?>