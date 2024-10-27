<footer class="footer">
  <div class="footer-block">
    <div class="footer-block__logo">
      <?php the_custom_logo(); ?>
      <a href="#" class="block__logo">
        <img src="<?php bloginfo("template_url");  ?> /assets/img/footer/CD_Projekt_logo_1.svg" alt="Projekt_logo" />
      </a>
    </div>
    <div class="footer-block__info">
      <a class="block__info" href="<?php echo get_page_link(97); ?>">Лицензия</a>
      <a class="block__info" href="<?php echo get_page_link(97); ?>">Политика конфиденциальности</a>
    </div>
  </div>
  <div class="footer__copy">
    <small class="copyright"><?php the_field('copy'); ?></small>
  </div>
</footer>
</main>
<?php wp_footer(); ?>

</div>
</body>

</html>