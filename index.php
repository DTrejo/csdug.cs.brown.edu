<?php get_header(); ?>

	<div class="showcase">
		<div class="content">
			<img src="rapt.png">
			<h2>Robots Are People Too</h2>
			<p>Robots Are People Too (RAPT) is a complex and challenging HTML5 platformer. The exit to each level is blocked by enemies that roll, jump, fly, and shoot to prevent escape at all costs. Gameplay is exclusively two-player and uses a unique split-screen mechanic. The levels and enemies are designed to promote cooperation between players.</p>
			<p><a href="#">More info...</a></p>
			<div class="clear"></div>
		</div>
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
