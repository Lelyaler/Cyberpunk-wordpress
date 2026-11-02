<?php
/**
 * Main Template File
 *
 * @package Cyberpunk
 */

if (is_front_page() || is_home()) {
  locate_template('home.php', true);
  return;
}

get_header();
?>

<main class="main">
  <div class="container" style="padding: 120px 20px 80px; color: #fff; max-width: 1200px; margin: 0 auto;">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_title('<h1 style="font-family: Archangelsk, sans-serif; font-size: 36px; margin-bottom: 24px; color: #f8f200;">', '</h1>');
        the_content();
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>
