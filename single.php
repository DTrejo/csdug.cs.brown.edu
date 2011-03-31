<?php get_header(); ?>



	<?php while(have_posts()) : the_post(); ?>

		<div class="post" id="<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		</div> <!-- .post -->
		
		<div id="comment-area">
			<?php comments_template(); ?>
		</div>

	<?php endwhile; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>