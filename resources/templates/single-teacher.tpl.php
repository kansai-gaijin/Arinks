<?php get_header(); ?>
<section id="page-header" class="anim start">
    <h1 class="page-title">
      <div class="wrapper">
        <strong>教師紹介</strong>
      </div>
    </h1>
</section>
<?php do_action('theme/index/content_before'); ?>
<section class="with-sidebar wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post() ?>
                  <?php
                      /**
                       * Functions hooked into `theme/single/content` action.
                       *
                       * @hooked Impact\Theme\App\Structure\render_post_content - 10
                       */
                      do_action('theme/teacher/content');
                  ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>