<?php get_header(); ?>

  <!-- Here we go with the hacky stuff -->
  <!-- Not sure how to best do this so it doesn't conflict with other pages -->
  <!-- Attach orbit CSS+JS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/orbit-1.2.3.css">
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.5.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.orbit-1.2.3.min.js"></script>
  <!-- [if IE]>
       <style type="text/css">
        .timer { display: none !important; }
        div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
      </style>
  <![endif]-->

  <!-- Run orbit -->
  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit();
    });
  </script>

  <div class="showcase">
    <div class="content">
      <div id="featured">
        <div class="content" style="background: url(<?php bloginfo('template_url'); ?>/images/dummy-images/coffee.jpg);">
          <h2>Orbit does content now.</h2>
          <h3>Highlight me...I'm text.</h3>
        </div>
        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/dummy-images/overflow.jpg" /></a>
        <img src="<?php bloginfo('template_url'); ?>/images/dummy-images/captions.jpg" data-caption="#htmlCaption" />
        <img src="<?php bloginfo('template_url'); ?>/images/dummy-images/features.jpg"  />
      </div>
      <!-- Captions for Orbit -->
      <span class="orbit-caption" id="htmlCaption"><strong>I'm A Badass Caption:</strong> I can haz <a href="#">links</a>, <em>style</em> or anything that is valid markup :)</span>

      <!-- <img src="rapt.png">
      <h2>Robots Are People Too</h2>
      <p>Robots Are People Too (RAPT) is a complex and challenging HTML5 platformer. The exit to each level is blocked by enemies that roll, jump, fly, and shoot to prevent escape at all costs. Gameplay is exclusively two-player and uses a unique split-screen mechanic. The levels and enemies are designed to promote cooperation between players.</p>
      <p><a href="#">More info...</a></p>
      <div class="clear"></div> -->

    </div> <!-- end orbit -->
    <div class="shadow-bottom"></div>
  </div>

  <div class="main">
    <div class="content">
      <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="<?php the_ID(); ?>">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>

      <?php next_posts_link('&laquo; Older Entries') ?>
      <?php previous_posts_link('Newer Entries &raquo;') ?>
    </div>
  </div>

<?php get_footer(); ?>
