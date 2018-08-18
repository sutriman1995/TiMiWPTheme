<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
		<div class="post">
		<?php the_excerpt(); ?>
		</div>
		
		<!-- /end .post -->		
		<?php endwhile; ?>

		<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<p class="center">You can find more in <a href="/logs">{my logs}</a>  archives.</p>

		<?php endif; ?>
	<?php echo '<br><br>';?>
<?php get_footer(); ?>