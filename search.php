<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
				<div class="page-header">
					<h1 class="text-center text-kirmizi">Arama Sonuçları</h1>
				</div>
			</div>
			<div class="row" id="content">
				<div class="col-sm-12">
				<dl class="dl-horizontal">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php if (is_search() && ($post->post_type=='page')) continue; ?>
					<dt><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></dt>
					<dd><?php echo $post->post_content; ?></dd>							
			<?php endwhile; ?>
			<?php else : ?>
	
			<h4 class="text-center"><i class='fa fa-exclamation'></i> Sonuç bulunamadı. Başka bir <i class="fa fa-search"></i> arama?</h4>
			<?php endif; ?>					
			   </dl>	
				</div>	
			</div>
		</div>
<?php get_footer(); ?>
