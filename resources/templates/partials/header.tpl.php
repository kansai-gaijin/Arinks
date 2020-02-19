<header id="site-header">
  <div class="wrapper">
    <h1 class="header--logo">
      <small><?= $desc; ?></small>
      <a href="<?= $site_url ?>"><img src="<?= $logo ?>" alt="<?= $title; ?>" /></a>
    </h1>
    <nav class="header--main-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <?php if(!$logged_in): ?>
    <p class="header--new-acount-button">
      <a href="<?= $new_user_url; ?>">
        <img src="<?php get_site_url(); ?>/wp-content/uploads/2020/02/new-account-button.svg" alt="" />
      </a>
    </p>
    <?php endif; ?>
    <div class="header--mobile-actions">
      <ul>
        <li class="header--action-new">
          <a href="<?= $howto_url; ?>">
            <i class="far fa-question-circle"></i><small>初めての方</small>
          </a>
        </li>
        <?php if(!$logged_in): ?>
        <li class="header--action-login">
          <a href="<?= $login_url; ?>">
          <i class="fas fa-user"></i><small>ログイン</small>
          </a>
        </li>
        <?php else: ?>
        <li class="header--action-login">
          <button class="ham-but js-member-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <small>会員メニュー</small>
          </button>
        </li>
        <?php endif; ?>
        <li class="header--action-nav">
          <button class="ham-but js-nav-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <small>メニュー</small>
          </button>
        </li>
      </ul>
    </div>
    <div class="header--qna">
      <a href="<?= $qna_url; ?>">よくある質問</a>
    </div>
  </div>
  <?php if($logged_in): ?>
  <div class="wrap header--member-nav-area">
    <nav class="header--member-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'members' ) ); ?>
    </nav>
  </div>
  <?php endif; ?>
</header>