# Cyberpunk 2077 — WordPress Theme

Промо-лендинг для Cyberpunk 2077 на WordPress. Вёрстка интегрирована в кастомную тему с нуля, без конструкторов (Elementor, Divi и др.). Весь контент и медиа управляются через ACF Pro, цвет акцентных элементов меняется через встроенный кастомайзер темы.

- **Демо (статическая верстка):** [lelyaler.github.io/Cyberpunk-only-html-css-js-/](https://lelyaler.github.io/Cyberpunk-only-html-css-js-/)
- **Репозиторий верстки:** [github.com/Lelyaler/Cyberpunk-only-html-css-js-](https://github.com/Lelyaler/Cyberpunk-only-html-css-js-)
- **Плагин мета-тегов:** [github.com/Lelyaler/custom-meta-tags-manager](https://github.com/Lelyaler/custom-meta-tags-manager)
- **Плагин cookie-уведомления:** [github.com/Lelyaler/wp-cookie-notice](https://github.com/Lelyaler/wp-cookie-notice)

![Превью темы](screenshot.png)

## Стек

- WordPress 6.x / PHP 8.1+
- Advanced Custom Fields Pro (Local JSON & Gutenberg Blocks)
- Gutenberg Block Editor (`acf_register_block_type`)
- SCSS (BEM), Vanilla JS (ES6+)
- Swiper.js (3D Cube effect)
- Contact Form 7

## Структура файлов

```
├── acf-json/               # Схема полей ACF Pro и блоков Gutenberg (автосинхронизация)
├── assets/
│   ├── css/                # SCSS исходники и собранный style.css
│   ├── js/app.js           # Инициализация Swiper и анимации на IntersectionObserver
│   └── img/                # Графика (WebP + SVG)
├── template-parts/
│   └── blocks/             # Шаблоны кастомных блоков Gutenberg
├── functions.php           # Хуки, регистрация блоков Gutenberg, кастомайзер, фильтры SVG
├── header.php              # Шапка, OpenGraph и SEO мета-теги, соцсети из ACF
├── home.php                # Шаблон главной страницы (Template Name: Home)
├── single.php              # Шаблон отдельной страницы (правила / лицензия)
├── footer.php              # Подвал сайта, динамический копирайт
├── docker-compose.yml      # Стек для локальной разработки (WP + MySQL)
└── .wp-env.json            # Конфигурация для @wordpress/env
```

## Архитектура и особенности реализации

- **Кастомные блоки Gutenberg (ACF Blocks):** регистрация независимых блоков редактора через `acf_register_block_type()` с шаблонизацией в `template-parts/blocks/`. Блоки поддерживают предпросмотр в редакторе, параметры выравнивания и версионирование полей в Local JSON.
- **Управление контентом через ACF:** все блоки (первый экран, галерея, розыгрыш, характеристики монитора HP, комплектация издания и ссылки на соцсети) вынесены в кастомные метаполя. Схема полей экспортирована в `acf-json/group_cyberpunk_homepage.json` и автоматически синхронизируется в админке при установленном ACF Pro.
- **Theme Customizer:** в `functions.php` зарегистрирована секция кастомизатора с `WP_Customize_Color_Control`. Цвет кнопок задается из админки и подключается инлайн-стилем через `wp_add_inline_style` с санитизацией значения (`sanitize_hex_color`).
- **Безопасная загрузка SVG:** добавлены хуки `upload_mimes` и `wp_check_filetype_and_ext` с проверкой прав `manage_options`, что позволяет загружать векторные логотипы только администратору и исключает XSS.
- **Оптимизация производительности:**
  - Изображения переведены в WebP и подключены через тег `<picture>` с брейкпоинтами под экраны 320px, 768px и 1024px.
  - Анимации появления блоков работают через нативный `IntersectionObserver` — без сторонних библиотек и без перегрузки скролла.
  - Скрипты подключаются в футере (`$in_footer = true`) с указанием явных зависимостей (`array('swiper')`).
  - Google PageSpeed Insights: 95+ баллов в мобильной и десктопной версиях.

## Локальный запуск

### Вариант 1: Docker (рекомендуется)

В проекте есть готовый `docker-compose.yml` (WordPress 6.6 + PHP 8.2 + MySQL 8.0):

```bash
git clone https://github.com/Lelyaler/Cyberpunk-wordpress.git
cd Cyberpunk-wordpress
docker compose up -d
```

После старта сайт доступен по адресу `http://localhost:8080`.

### Вариант 2: wp-env

Если локально установлен Node.js и запущен Docker:

```bash
npx @wordpress/env start
```

Окружение поднимется на `http://localhost:8888` (логин: `admin`, пароль: `password`).

### Вариант 3: Ручная установка (OpenServer / LocalWP / MAMP)

1. Склонируйте тему в каталог тем:
   ```bash
   git clone https://github.com/Lelyaler/Cyberpunk-wordpress.git wp-content/themes/cyberpunk
   ```
2. В админ-панели перейдите в **Внешний вид → Темы** и активируйте **Cyberpunk**.
3. Перейдите в **Страницы → Добавить новую**, укажите название (например, «Главная»), справа в атрибутах страницы выберите шаблон **Home** и опубликуйте.
4. В **Настройки → Чтение** переключите отображение главной на статическую страницу и выберите созданную страницу.
5. При установленном плагине ACF перейдите в **Custom Fields** и нажмите **Sync**, чтобы применились все поля.
