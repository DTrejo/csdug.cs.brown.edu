<?php get_header(); ?>

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

<?php get_footer(); ?>
