<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php if (is_single() || is_page()) : ?>
    <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>" />
  <?php else : ?>
    <meta name="description" content="Погрузитесь в мир Cyberpunk 2077, приключенческой ролевой игры с открытым миром в Найт-Сити." />
  <?php endif; ?>

  <meta name="keywords" content="Cyberpunk 2077, игра, ролевые игры, Найт-Сити, киберпанк" />
  <meta name="author" content="Ваше имя или название компании" />

  <?php wp_head(); ?>

  <title><?php wp_title(); ?></title>
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <div class="header__logo">
          <?php the_custom_logo(); ?>
        </div>
        <nav class="header__social">
          <a class="header__social_icon" href="<?php the_field('youtube_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/youtube_logo.svg" alt="youtube logo" />
          </a>
          <a class="header__social_icon" href="<?php the_field('vk_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/vk_logo.svg" alt="vk logo" />
          </a>
          <a class="header__social_icon" href="<?php the_field('facebook_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/facebook-rect_logo.svg" alt="facebook" />
          </a>
          <a class="header__social_icon" href="<?php the_field('twit_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/twitter-square_logo.svg" alt="twitter" />
          </a>
          <a class="header__social_icon" href="<?php the_field('twitch_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/twitch_logo.svg" alt="twitch" />
          </a>
          <a class="header__social_icon" href="<?php the_field('inst_link'); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/header/instagram-square_logo.svg" alt="instagram" />
          </a>
        </nav>
      </div>
    </header>