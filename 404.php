<?php get_header(); ?>
		<br>
		<h2>Page not found :(</h2>

		<div class="post">

			<br />
			<left>
			<p>I'm sorry about that, but you can find more in <a href="/logs">{my logs}</a>  archives.</p>
			<p>Or comeback to <a href="<?php echo get_option('home'); ?>/">{homepage}</a>?</p>
			</left>

		</div> <!-- /end .post -->

	</div>  <!-- /end .container -->

	<?php wp_footer(); ?>

</body>
</html>