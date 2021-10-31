<?php get_header(); ?>


<!-- Main -->
<div id="page">

	<!-- Main -->
	<div id="main" class="container">
		<div class="row">
			<div class="12u">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section>
							<?php the_content(); ?>
						</section>
					<?php endwhile;
				else : ?>
					<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Main -->

</div>
<!-- /Main -->

<?php get_footer(); ?>