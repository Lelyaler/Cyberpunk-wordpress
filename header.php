<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php if (!function_exists('cmt_add_meta_tags')) : ?>
    <?php if (is_single() || is_page()) : ?>
      <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>" />
    <?php else : ?>
      <meta name="description" content="Погрузитесь в мир Cyberpunk 2077, приключенческой ролевой игры с открытым миром в Найт-Сити." />
    <?php endif; ?>
    <meta name="keywords" content="Cyberpunk 2077, игра, ролевые игры, Найт-Сити, киберпанк" />
    <meta name="author" content="Ваше имя или название компании" />
  <?php endif; ?>

  <?php wp_head(); ?>

  <title><?php wp_title(); ?></title>
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <div class="header__logo">
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/Cyberpunk_2077_logo1.svg" class="custom-logo" alt="<?php bloginfo('name'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <nav class="header__social">
          <a class="header__social_icon" href="<?php cyberpunk_the_field('youtube_link', 'https://www.youtube.com', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/youtube_logo.svg" alt="youtube logo" />
          </a>
          <a class="header__social_icon" href="<?php cyberpunk_the_field('vk_link', 'https://vk.com', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/vk_logo.svg" alt="vk logo" />
          </a>
          <a class="header__social_icon" href="<?php cyberpunk_the_field('facebook_link', 'https://facebook.com', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/facebook-rect_logo.svg" alt="facebook" />
          </a>
          <a class="header__social_icon" href="<?php cyberpunk_the_field('twit_link', 'https://twitter.com', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/twitter-square_logo.svg" alt="twitter" />
          </a>
          <a class="header__social_icon" href="<?php cyberpunk_the_field('twitch_link', 'https://twitch.tv', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/twitch_logo.svg" alt="twitch" />
          </a>
          <a class="header__social_icon" href="<?php cyberpunk_the_field('inst_link', 'https://instagram.com', 'url'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/instagram-square_logo.svg" alt="instagram" />
          </a>
        </nav>
      </div>
    </header>