<footer class="footer">
  <div class="footer-block">
    <div class="footer-block__logo">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/Cyberpunk_2077_logo_2.svg" class="custom-logo" alt="<?php bloginfo('name'); ?>" />
        </a>
      <?php endif; ?>
      <a href="https://www.cdprojektred.com" target="_blank" rel="noopener noreferrer" class="block__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/CD_Projekt_logo_1.svg" alt="Projekt_logo" />
      </a>
    </div>
    <div class="footer-block__info">
      <a class="block__info" href="<?php echo esc_url(get_privacy_policy_url() ?: '#'); ?>">Лицензия</a>
      <a class="block__info" href="<?php echo esc_url(get_privacy_policy_url() ?: '#'); ?>">Политика конфиденциальности</a>
    </div>
  </div>
  <div class="footer__copy">
    <small class="copyright"><?php cyberpunk_the_field('copy', 'CD PROJEKT®, Cyberpunk®, Cyberpunk 2077® являются зарегистрированными товарными знаками компании CD PROJEKT S.A. © 2024 CD PROJEKT S.A. Все права сохранены.'); ?></small>
  </div>
</footer>
</main>
<?php wp_footer(); ?>

</div>
</body>

</html>