<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
				<div class="page-header">
					<h1 class="text-center text-kirmizi"><?php single_cat_title(); ?></h1>
				</div>
				<?php if (get_option('an_showbreadcrumb') == "Evet" ) { ?>
				<div class="breadcrumb">
					<?php the_breadcrumb(); ?>
				</div>
				<?php } else { ?>
				<?php } ?>
				<p class="text-justify"><?php echo trim(strip_tags(category_description())); ?></p>
			</div>
			<div class="row" id="content">
				<div class="col-sm-12">
				<dl class="dl-horizontal">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<dt><a href="<?php $values = get_post_custom_values("ana_website_url"); echo $values[0]; ?>" target="_blank"><?php the_title(); ?></a></dt>
					<dd><?php echo $post->post_content; ?></dd>							
					<?php endwhile; ?>
					<?php endif; ?>					
			   </dl>	
				</div>	
				<div class="col-sm-12">
					"<strong><?php single_cat_title(); ?></strong>" için aramalar:
					<a rel="nofollow" href="https://search.brave.com/search?q=<?php single_cat_title(); ?>" target="_blank">Brave</a> <i class='fas fa-star' style='color:#0066FF;'></i>
					<a rel="nofollow" href="https://search.yahoo.com/search?p=<?php single_cat_title(); ?>" target="_blank">Yahoo</a> <i class='fas fa-star' style='color:#0066FF;'></i>
					<a rel="nofollow" href="https://www.yandex.com/yandsearch?text=<?php single_cat_title(); ?>" target="_blank">Yandex</a> <i class='fas fa-star' style='color:#0066FF;'></i>
					<a rel="nofollow" href="https://www.baidu.com/s?ie=<?php single_cat_title(); ?>" target="_blank">Baidu</a> <i class='fas fa-star' style='color:#0066FF;'></i>
					<a rel="nofollow" href="https://www.google.com/search?q=<?php single_cat_title(); ?>" target="_blank">Google</a>	
				</div>
			</div>
		</div>
<?php get_footer(); ?>
