<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/panel.css">
<script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<!-- Main -->
<div id="page">

	<!-- Main -->
	<div id="main" class="container"><br/>
		<div class="row">
			<div class="12u">
				<section>
					<header>
						<h2><?php echo get_the_category()[0]->name; $i=0; ?></h2>
					</header>
					<div class="container">
						<div class="panel-group" id="accordion">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php $i=$i+1;$idHtml="collapse".$i; ?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $idHtml; ?>"><?php the_title(); ?></a>
											</h4>
										</div>
										<div id="<?php echo $idHtml; ?>" class="panel-collapse collapse">
											<div class="panel-body">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								<?php endwhile;
							else : ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- Main -->

</div>
<!-- /Main -->

<?php get_footer(); ?>