<footer id="site-footer">
  <div class="footer-nav">
    <div class="wrapper">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </div>
  </div>
  <div class="footer-branding">
    <div class="wrapper">
      <div class="footer-logo">
        <p>
          <a href="<?php get_site_url(); ?>">
            <img src="<?php get_site_url(); ?>/wp-content/uploads/2020/02/arinks-logo-temp-white.svg" alt="" />
          </a>
        </p>
      </div>
      <div class="branding-links">
        <p>
          <a href="<?php get_site_url(); ?>/law">利用契約</a>　|　<a href="<?php get_site_url(); ?>/privacy">プライバシーポリシー</a>　|　<a href="<?php get_site_url(); ?>/company">運用会社</a>
        </p>
      </div>
      <p class="copywrite">© Arinks, Inc.</p>
    </div>
  </div>
</footer>