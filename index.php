<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
				<div class="page-header">
					<h1 class="text-center text-kirmizi"><?php if (get_option('an_hometitle') == "" ) { ?>Web Dizin<?php } else { ?><?php echo get_option('an_hometitle'); ?><?php } ?></h1>
				</div>
				<?php if (get_option('an_homedescription') == "" ) { ?><?php } else { ?><p class="text-justify"><?php echo get_option('an_homedescription'); ?></p><?php } ?>
			</div>
			<div class="row" id="content">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Anasayfa") ) : ?>

				<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>
