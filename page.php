<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="page-header">
					<h1 class="text-center text-kirmizi"><?php the_title(); ?></h1>
				</div>
				<?php the_content(); ?>					
			<?php endwhile; ?>
			<?php endif; ?>	
			</div>			
		</div>
<?php get_footer(); ?>