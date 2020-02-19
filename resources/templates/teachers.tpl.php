<?php get_header(); ?>
<?php do_action('theme/index/content_before'); ?>
<section class="with-sidebar wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
            <?php if (have_posts()) : ?>
                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                            /**
                             * Functions hooked into `theme/index/post/thumbnail` action.
                             *
                             * @hooked Impact\Theme\App\Structure\render_post_thumbnail - 10
                             */
                            do_action('theme/index/teacher/article');
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php
                    /**
                     * Functions hooked into `theme/index/content/none` action.
                     *
                     * @hooked Impact\Theme\App\Structure\render_empty_content - 10
                     */
                    do_action('theme/index/content/none');
                ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>