<?php get_header(); ?>

  <div class="main">
    <div class="content">
      <div class="post">
        <h2>Page Not Found</h2>
        <p>Looks like the page you're looking for isn't here anymore. Try browsing from the <a href="<?php esc_attr( bloginfo('url') ); ?>">home page</a> or using the search box below.</p>
        <p><?php include(TEMPLATEPATH . '/searchform.php'); ?></p>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
