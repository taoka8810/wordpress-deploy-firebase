<?php get_header(); ?>

<main>
  <h1>アーカイブページ</h1>
  <div class="container">
    <?php 
      $args = array(
        "posts_per_page" => 20,
      );
      $my_posts = get_posts($args);
      foreach($my_posts as $post):
        setup_postdata($post);
      ?>
    <a href="<?php echo get_the_permalink(); ?>">
      <h3><?php echo get_the_title(); ?></h3>
    </a>
    <?php endforeach; ?>
  </div>
</main>

<?php get_footer(); ?>