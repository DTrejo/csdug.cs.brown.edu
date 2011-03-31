<?php get_header(); ?>

  <!-- Run orbit -->
  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit({
           animation: 'horizontal-push',    // fade, horizontal-slide, vertical-slide, horizontal-push
           animationSpeed: 800,             // how fast animations are
           timer: false,                     // true or false to have the timer
           advanceSpeed: 5000,              // if timer is enabled, time between transitions
           pauseOnHover: false,             // if you hover pauses the slider
           startClockOnMouseOut: false,     // if clock should start on MouseOut
           startClockOnMouseOutAfter: 1000, // how long after MouseOut should the timer start again
           directionalNav: true,            // manual advancing directional navs
           captions: true,                  // do you want captions?
           captionAnimation: 'fade',        // fade, slideOpen, none
           captionAnimationSpeed: 800,      // if so how quickly should they animate in
           bullets: false,                  // true or false to activate the bullet navigation
           bulletThumbs: false,             // thumbnails for the bullets
           bulletThumbLocation: '',         // location from this file where thumbs will be
           afterSlideChange: function(){}   // empty function
      });
    });
  </script>

  <div class="showcase">
    <div class="content">
      <div id="featured">
        <a href=""><img src="<?php bloginfo('template_url'); ?>/images/dummy-images/overflow.jpg" /></a>
        <!-- start auto-generated posts -->
        <?php while (have_posts()) : the_post(); if (!(has_tag('featured'))) { continue; } ?>
          <div class="content" style="background: url(<?php bloginfo('template_url'); ?>/images/dummy-images/coffee.jpg);">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
              <!-- <img src="<?php the_post_thumbnail() ?>" alt="Thumbnail for <?php the_title(); ?>"> -->
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; ?>
        <!-- end auto-generated posts -->

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
