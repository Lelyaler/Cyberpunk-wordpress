<?php
/**
 * Block Name: Cyberpunk Promo Banner
 *
 * @param array  $block      The block settings and attributes.
 * @param string $content    The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id    The post ID the block is rendering on.
 */

$block_id = 'cyberpunk-banner-' . ( $block['id'] ?? uniqid() );
$align    = ! empty( $block['align'] ) ? 'align' . $block['align'] : '';

$title       = get_field( 'banner_title' ) ?: 'Добро пожаловать в Найт-Сити';
$subtitle    = get_field( 'banner_subtitle' ) ?: 'Город будущего ждёт своих героев.';
$button_text = get_field( 'banner_btn_text' ) ?: 'Подробнее';
$button_url  = get_field( 'banner_btn_url' ) ?: '#';
$bg_image    = get_field( 'banner_bg_image' ) ?: get_template_directory_uri() . '/assets/img/header/11.webp';
?>
<div id="<?php echo esc_attr( $block_id ); ?>" class="cyberpunk-block-banner <?php echo esc_attr( $align ); ?>">
  <div class="cyberpunk-block-banner__inner" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.85)), url('<?php echo esc_url( $bg_image ); ?>');">
    <div class="cyberpunk-block-banner__content cut-box">
      <h2 class="cyberpunk-block-banner__title"><?php echo esc_html( $title ); ?></h2>
      <p class="cyberpunk-block-banner__subtitle"><?php echo esc_html( $subtitle ); ?></p>
      <?php if ( ! empty( $button_text ) ) : ?>
        <a href="<?php echo esc_url( $button_url ); ?>" class="btn cyberpunk-block-banner__btn">
          <?php echo esc_html( $button_text ); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>
