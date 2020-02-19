<article class="susume-teacher-item col-sm-12 col-md-6 col-lg-4">
  <a href="<?= get_the_permalink(); ?>">
    <figure style="background:url(<?php the_post_thumbnail_url( 'full' ); ?>)no-repeat; background-size:cover; background-position:center;">
      <figcaption>
        <p class="name"><strong><?php echo get_the_title(); ?>教師</strong><small>(<?php echo get_post_meta(get_the_ID(  ),'wpcf-teacher-age', true); ?>才)</small></p>
        <p class="meta"><small>202名 生徒</small></p>
      </figcaption>
    </figure>
  </a>
</article>