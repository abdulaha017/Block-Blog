<?php get_header(); ?>
	
	<div class="blog-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php if(have_posts()) : ?>
					    <?php while(have_posts()) : the_post(); ?>
					    	<?php get_template_part('formats/content', get_post_format()); ?>
					    <?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
					
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
