<?php get_header( ); ?>
		

	

<!-- Main -->
<div id="page">

	<!-- Main -->
	<div id="main" class="container">
		<div class="row">
			<div class="12u">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section>
							<header>
								<h2><?php the_title(); ?></h2>
							</header>
							<?php the_content(); ?>
						</section>
					<?php endwhile;
				else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Main -->

</div>
<!-- /Main -->


<?php get_footer( ); ?>