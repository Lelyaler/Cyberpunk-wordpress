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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/11.webp" alt="header1" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/2.webp" alt="header2" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/3.webp" alt="header3" />
        </div>
      </div>
    </div>
    <div class="intro__container container">
      <div class="intro-content cut-box">
        <h1 class="intro-content__title"><?php cyberpunk_the_field('content__title', 'Доступно на всех платформах'); ?></h1>
        <button class="intro-content__button btn" id="learnMoreButton">
          <?php cyberpunk_the_field('content__button', 'Узнать больше'); ?>
        </button>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about__container container">
      <h2 class="about__title"><?php cyberpunk_the_field('about__title', 'Найт-Сити изменит тебя навсегда'); ?></h2>
      <?php
      $about_text = cyberpunk_get_field('about_text');
      if (!empty($about_text)) {
        echo $about_text;
      } else {
      ?>
        <p class="about__text">
          <span class="about__accent">Cyberpunk 2077</span> — приключенческая ролевая игра с открытым миром, действие которой происходит в мегаполисе Найт-Сити, где власть, роскошь и модификации тела ценятся выше всего. Ты играешь за V, наёмника в поисках уникального устройства, позволяющего обрести бессмертие.
        </p>
        <p class="about__text">
          Создавай свой стиль игры, модифицируй тело и выбирай собственный путь в городе бесконечных возможностей и неоновых огней.
        </p>
      <?php } ?>
      <div class="about-items">
        <div class="about-item__box">
          <div class="item__box cut-box">
            <img src="<?php cyberpunk_the_field('item__box', get_template_directory_uri() . '/assets/img/about/Rectangle_598.jpg', 'url'); ?>" alt="about 1" />
          </div>
          <div class="item__box cut-box">
            <img src="<?php cyberpunk_the_field('item__box2', get_template_directory_uri() . '/assets/img/about/599.jpg', 'url'); ?>" alt="about 2" />
          </div>
        </div>
        <picture class="about-item cut-box">
          <source
            srcset="<?php cyberpunk_the_field('item__box3_mobil', get_template_directory_uri() . '/assets/img/about/mini/Rectangle_606.jpg', 'url'); ?>"
            media="(max-width: 320px)" />
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/mini/602.jpg"
            media="(max-width: 1024px)" />
          <img
            class="about-item__img"
            src="<?php cyberpunk_the_field('item__box3', get_template_directory_uri() . '/assets/img/about/Rectangle_597.jpg', 'url'); ?>"
            alt="night about" />
        </picture>
      </div>
    </div>
  </section>
  <section class="draw">
    <div class="draw__container container">
      <img class="draw__star" src="<?php cyberpunk_the_field('draw_star', get_template_directory_uri() . '/assets/img/draw/star.svg', 'url'); ?>" alt="star" />
      <h2 class="draw__title"><?php cyberpunk_the_field('draw__title', 'Играй и выигрывай!'); ?></h2>
      <?php
      $draw_text = cyberpunk_get_field('draw_text');
      if (!empty($draw_text)) {
        echo $draw_text;
      } else {
      ?>
        <p class="draw__text">
          Играй в <span class="draw__accent">Cyberpunk 2077</span> и получи возможность выиграть мощный ПК или игровую приставку! Заполни форму и испытай удачу в грандиозном розыгрыше призов.
        </p>
      <?php } ?>
      <div class="draw__info">
        <?php
        $cf7_form = do_shortcode('[contact-form-7 id="98b0783" title="Контактная форма"]');
        if (!empty($cf7_form) && strpos($cf7_form, '[contact-form-7') === false) {
          echo $cf7_form;
        } else {
        ?>
          <form class="draw__form form" onsubmit="event.preventDefault(); alert('Спасибо за заявку!');">
            <div class="form__item">
              <input class="form__input" type="text" placeholder="Как тебя зовут?" required />
            </div>
            <div class="form__item">
              <input class="form__input" type="email" placeholder="Твой e-mail" required />
            </div>
            <div class="form__item form__checkbox-item">
              <label class="form__label">
                <input class="form__checkbox" type="checkbox" required checked />
                <span class="form__checkbox-text">Согласен на обработку персональных данных</span>
              </label>
            </div>
            <button class="form__button btn" type="submit">Отправить заявку</button>
          </form>
        <?php } ?>
        <picture>
          <source srcset="<?php cyberpunk_the_field('image__info_mobail', get_template_directory_uri() . '/assets/img/draw/33.png', 'url'); ?>" media="(max-width: 768px)" />
          <source srcset="<?php cyberpunk_the_field('image__info_decktop', get_template_directory_uri() . '/assets/img/draw/Group 239.png', 'url'); ?>" media="(max-width: 1024px)" />
          <img class="image__info" src="<?php cyberpunk_the_field('image__info', get_template_directory_uri() . '/assets/img/draw/Group 239.png', 'url'); ?>" alt="prizes" />
        </picture>
      </div>
    </div>
  </section>
  <section class="display">
    <div class="display__container container">
      <div class="display-hp">
        <img
          class="display-hp__image"
          src="<?php cyberpunk_the_field('display-hp__image', get_template_directory_uri() . '/assets/img/hp/c06611743_1.png', 'url'); ?>"
          alt="hp" />
        <div class="display-hp__logos">
          <a class="hp__logo" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/hp-2_logo.svg" alt="logo hp" />
          </a>
          <a class="hp__logo" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/Group_235.svg" alt="logo hp" />
          </a>
          <a class="hp__logo" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/yellow.svg" alt="logo hp" />
          </a>
        </div>
      </div>
      <div class="display-info">
        <h3 class="display-hp__title"><?php cyberpunk_the_field('display-hp', 'Полное погружение вместе с HP'); ?></h3>
        <?php
        $hp_text = cyberpunk_get_field('display-hp__text');
        if (!empty($hp_text)) {
          echo $hp_text;
        } else {
        ?>
          <p class="display-info__text">
            Погрузись в атмосферу Найт-Сити с потрясающими дисплеями HP. Почувствуй каждый неоновый отблеск и динамику сражений благодаря передовым технологиям отображения.
          </p>
        <?php } ?>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/color_lens.svg" alt="color_lens" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php cyberpunk_the_field('item-hp__info1', 'Яркая IPS-панель с реалистичной цветопередачей 99% sRGB'); ?></p>
            </div>
          </div>
        </div>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/auto_awesome.svg" alt="auto_awesome" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php cyberpunk_the_field('item-hp__info2', 'Частота обновления 165 Гц и время отклика 1 мс'); ?></p>
            </div>
          </div>
        </div>
        <div class="display__hp">
          <div class="display__item item-hp">
            <div class="item-hp__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp/auto_awesome_motion.svg" alt="auto_awesome_motion" />
            </div>
            <div class="item-hp__text">
              <p class="item-hp__info"><?php cyberpunk_the_field('item-hp__info3', 'Поддержка технологии AMD FreeSync™ Premium'); ?></p>
            </div>
          </div>
        </div>

        <button class="display__button btn"><?php cyberpunk_the_field('display__button', 'Подробнее'); ?></button>
      </div>
    </div>
  </section>
  <section class="get" id="get">
    <picture>
      <source srcset="<?php cyberpunk_the_field('get-content__image_mob', get_template_directory_uri() . '/assets/img/get/mini/1.jpg', 'url'); ?>" media="(max-width: 320px)" />
      <source srcset="<?php cyberpunk_the_field('get-content__image_dec2', get_template_directory_uri() . '/assets/img/get/Untitled-1_2.jpg', 'url'); ?>" media="(max-width: 768px)" />
      <source srcset="<?php cyberpunk_the_field('get-content__image_dec', get_template_directory_uri() . '/assets/img/get/Untitled-1_1.jpg', 'url'); ?>" media="(max-width: 1024px)" />
      <img class="get-content__image" src="<?php cyberpunk_the_field('get-content__image', get_template_directory_uri() . '/assets/img/get/1.jpg', 'url'); ?>" alt="Cyberpunk" />
    </picture>

    <div class="get__containar container">
      <div class="get__block">
        <h3 class="get__title"><?php cyberpunk_the_field('get__title', 'Купить игру Cyberpunk 2077'); ?></h3>
        <p class="get__subtitle">В комплект входит:</p>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/disk.svg" alt="disk" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title"><?php cyberpunk_the_field('get__subtitle', 'Футляр с игровыми дисками'); ?></p>
            </div>
          </div>
        </div>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/wysiwyg.svg" alt="wysiwyg" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title"><?php cyberpunk_the_field('get__subtitle2', 'Футляр с кодом для загрузки игры и саундтрека'); ?></p>
            </div>
          </div>
        </div>
        <div class="get__items">
          <div class="get__item item-get">
            <div class="item-get__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/collections.svg" alt="collections" />
            </div>
            <div class="item-get__text">
              <p class="item-get__title"><?php cyberpunk_the_field('get__subtitle3', 'Справочник с информацией об игровом мире и карта Найт-Сити'); ?></p>
            </div>
          </div>
        </div>
        <p class="get__subtitle">Выберите платформу:</p>
        <ul class="get-platform">
          <li class="get-platform__list">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/Frame_13.svg" alt="pc" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/xbox-one-3_logo.svg" alt="xbox" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/stadia_logo.svg" alt="stadia" /></a>
          </li>
          <li class="get-platform__list">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/get/Group.svg" alt="ps4" /></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
