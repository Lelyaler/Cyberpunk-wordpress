<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="main">
  <section class="intro">
    <div class="intro-block__img swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php bloginfo("template_url");  ?> /assets/img/header/11.webp" alt="header1" />
        </div>
        <div class="swiper-slide">
          <img src="<?php bloginfo("template_url");  ?> /assets/img/header/2.webp" alt="header2" />
        </div>
        <div class="swiper-slide">
          <img src="<?php bloginfo("template_url");  ?> /assets/img/header/3.webp" alt="header3" />
        </div>
      </div>
    </div>
    <div class="intro__container container">
      <div class="intro-content cut-box">
        <h1 class="intro-content__title"><?php the_field('content__title'); ?></h1>
        <button class="intro-content__button btn" id="learnMoreButton">
          <?php the_field('content__button'); ?>
        </button>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about__container container">
      <h2 class="about__title"><?php the_field('about__title'); ?></h2>
      <?php the_field('about_text'); ?>
      <div class="about-items">
        <div class="about-item__box">
          <div class="item__box cut-box">
            <img src="<?php the_field('item__box'); ?>" />
          </div>
          <div class="item__box cut-box">
            <img src="<?php the_field('item__box2'); ?>" />
          </div>
        </div>
        <picture class="about-item cut-box">
          <source
            srcset="<?php the_field('item__box3_mobil'); ?>"
            media="(max-width: 320px)" />
          <source
            srcset="<?php bloginfo("template_url");  ?> /assets/img/about/mini/602.jpg"
            media="(max-width: 1024px)" />
          <img
            class="about-item__img"
            src="<?php the_field('item__box3'); ?>"
            alt="night about" />
        </picture>
      </div>
    </div>
  </section>
  <section class="draw">
    <div class="draw__container container">
      <img class="draw__star" src="<?php the_field('draw_star'); ?>" />
      <h2 class="draw__title"><?php the_field('draw__title'); ?></h2>
      <?php the_field('draw_text'); ?>
      <div class="draw__info">
        <?php echo do_shortcode('[contact-form-7 id="98b0783" title="Контактная форма"]'); ?>
        <picture>
          <source srcset="<?php the_field('image__info_mobail'); ?>" media="(max-width: 768px)" />
          <source srcset="<?php the_field('image__info_decktop'); ?>" media="(max-width: 1024px)" />
          <img class="image__info" src="<?php the_field('image__info'); ?>" />
        </picture>
      </div>
    </div>
  </section>
  <section class="display">
    <div class="display__container container">
      <div class="display-hp">
        <img
          class="display-hp__image"
          src="<?php the_field('display-hp__image'); ?>"
          alt="hp" />
        <div class="display-hp__logos">
          <a class="hp__logo" href="#">
            <img src="<?php bloginfo("template_url");  ?> /assets/img/hp/hp-2_logo.svg" alt="logo hp" />
          </a>
          <a class="hp__logo" href="#">
            <img src="<?php bloginfo("template_url");  ?> /assets/img/hp/Group_235.svg" alt="logo hp" />
          </a>
          <a class="hp__logo" href="#">
            <img src="<?php bloginfo("template_url");  ?> /assets/img/hp/yellow.svg" alt="logo hp" />
          </a>
        </div>
      </div>
      <div class="display-info">
        <h3 class="display-hp__title"><?php the_field('display-hp'); ?></h3>
        <?php the_field('display-hp__text'); ?>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/hp/color_lens.svg" alt="color_lens" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php the_field('item-hp__info1'); ?></p>
            </div>
          </div>
        </div>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/hp/auto_awesome.svg" alt="auto_awesome" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php the_field('item-hp__info2'); ?></p>
            </div>
          </div>
        </div>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/hp/auto_awesome_motion.svg" alt="auto_awesome_motion" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php the_field('item-hp__info3'); ?></p>
            </div>
          </div>
        </div>

        <button class="display__button btn"><?php the_field('display__button'); ?></button>
      </div>
    </div>
  </section>
  <section class="get" id="get">
    <picture>
      <source srcset="<?php the_field('get-content__image_mob'); ?>" media="(max-width: 320px)" />
      <source srcset="<?php the_field('get-content__image_dec2'); ?>" media="(max-width: 768px)" />
      <source srcset="<?php the_field('get-content__image_dec'); ?>" media="(max-width: 1024px)" />
      <img class="get-content__image" src="<?php the_field('get-content__image'); ?>" alt="Cyberpunk" />
    </picture>

    <div class="get__containar container">
      <div class="get__block">
        <h3 class="get__title"><?php the_field('get__title'); ?></h3>
        <p class="get__subtitle">В комплект входит:</p>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php bloginfo("template_url");  ?> /assets/img/get/disk.svg" alt="disk" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title"><?php the_field('get__subtitle'); ?></p>
            </div>
          </div>
        </div>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php bloginfo("template_url");  ?> /assets/img/get/wysiwyg.svg" alt="wysiwyg" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title">
                <?php the_field('get__subtitle2'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php bloginfo("template_url");  ?> /assets/img/get/collections.svg" alt="collections" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title">
                <?php the_field('get__subtitle3'); ?>
              </p>
            </div>
          </div>
        </div>
        <p class="get__subtitle">Выберите платформу:</p>
        <ul class="get-platform">
          <li class="get-platform__list">
            <a href="#"><img src="<?php bloginfo("template_url");  ?> /assets/img/get/Frame_13.svg" alt="pc" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php bloginfo("template_url");  ?> /assets/img/get/xbox-one-3_logo.svg" alt="xbox" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php bloginfo("template_url");  ?> /assets/img/get/stadia_logo.svg" alt="stadia" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php bloginfo("template_url");  ?> /assets/img/get/Group.svg" alt="ps4" /></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>