<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="page-header">
					<h1 class="text-center text-kirmizi"><?php the_title(); ?></h1>
				</div>
				<?php if (get_option('an_showbreadcrumb') == "no" ) { ?>
				<div class="breadcrumb">
					<?php the_breadcrumb(); ?>
				</div>
				<?php } else { ?>
				<?php } ?>
				 <div class="row">
					<div class="col-sm-3 col-md-2">
					<img src="http://img.bitpixels.com/getthumbnail?code=<?php echo get_option('an_bitpixels'); ?>&size=200&url=<?php $values = get_post_custom_values("ana_website_url"); echo $values[0]; ?>" />
					</div>
					<div class="col-sm-9 col-md-10">
					<p><strong>Site Adı:</strong> <?php the_title(); ?></p>
					<p><strong>Site Tanımı:</strong> <?php echo get_the_content(); ?></p>
					<p><strong>Site Adresi:</strong> <a href="<?php $values = get_post_custom_values("ana_website_url"); echo $values[0]; ?>" target="_blank"><?php $values = get_post_custom_values("ana_website_url"); echo $values[0]; ?></a></p>
					<p>"<strong><?php the_title(); ?></strong>" için aramalar:
					<a rel="nofollow" href="https://search.brave.com/search?q=<?php the_title(); ?>" target="_blank"><i class="fa fa-search"></i> Brave</a> 
					<a rel="nofollow" href="https://search.yahoo.com/search?p=<?php the_title(); ?>" target="_blank"><i class="fa fa-search"></i> Yahoo</a> 
					<a rel="nofollow" href="https://www.yandex.com/yandsearch?text=<?php the_title(); ?>" target="_blank"><i class="fa fa-search"></i> Yandex</a> 
					<a rel="nofollow" href="https://www.google.com/search?q=<?php the_title(); ?>" target="_blank"><i class="fa fa-search"></i> Google</a> 
					<a rel="nofollow" href="https://www.baidu.com/s?ie=<?php the_title(); ?>" target="_blank"><i class="fa fa-search"></i> Baidu</a></p>	
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>	
			</div>			
		</div>
<?php get_footer(); ?>
