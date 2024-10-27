<?php
// Подключение стилей и скриптов
add_action('wp_enqueue_scripts', function () {
  // Подключение стилей
  wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Roboto:100,300,regular,500,700");
  wp_enqueue_style('swiper', "https://unpkg.com/swiper/swiper-bundle.min.css");
  wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css");

  // Подключение скриптов
  wp_enqueue_script('swiper', "https://unpkg.com/swiper/swiper-bundle.min.js", array(), '', true);
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('swiper'), '', true); // 'swiper' в зависимостях

  // Получение значения цвета кнопок
  $button_color = get_theme_mod('mytheme_button_color', '#000000');

  // Генерация встроенного CSS
  $custom_css = "
        .btn {
            background-color: {$button_color};
        }
    ";
  // Добавление встроенного CSS
  wp_add_inline_style('style', $custom_css);
});

// Включение поддержки изображений и других функций
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter('upload_mimes', 'svg_upload_allow');

// Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
  $mimes['svg']  = 'image/svg+xml';
  return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

// Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
  // WP 5.1 +
  if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
    $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
  } else {
    $dosvg = ('.svg' === strtolower(substr($filename, -4)));
  }

  if ($dosvg) {
    if (current_user_can('manage_options')) {
      $data['ext']  = 'svg';
      $data['type'] = 'image/svg+xml';
    } else {
      $data['ext']  = false;
      $data['type'] = false;
    }
  }
  return $data;
}

// Регистрация настроек кастомизатора
function mytheme_customize_register($wp_customize)
{
  $wp_customize->add_section('mytheme_button_settings_section', array(
    'title' => __('Настройки цвета кнопок', 'mytheme'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('mytheme_button_color', array(
    'default' => '#000000', // Значение по умолчанию
    'sanitize_callback' => 'sanitize_hex_color', // Функция для очистки ввода
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mytheme_button_color_control', array(
    'label' => __('Цвет кнопок', 'mytheme'),
    'section' => 'mytheme_button_settings_section',
    'settings' => 'mytheme_button_color',
  )));
}

add_action('customize_register', 'mytheme_customize_register');

// Функция для добавления мета-тегов
function mytheme_add_meta_tags()
{
?>
  <!-- Мета-тег для описания -->
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />

  <!-- Мета-тег для ключевых слов -->
  <meta name="keywords" content="Киберпанк, Cyberpunk 2077, приключенческая ролевая игра, Найт-Сити, киберпанковская эстетика, технологии будущего, мир будущего, игры" />

  <!-- Мета-тег для авторов -->
  <meta name="author" content="Ваше Имя или Название Компании" />
<?php
}

// Добавление функции к хуку wp_head
add_action('wp_head', 'mytheme_add_meta_tags');
