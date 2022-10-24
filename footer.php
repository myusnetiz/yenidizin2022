			<hr>
			<footer class="container">
				<div class="row">
					<div class="col-xs-6">
						<?php if (get_option('an_copyright') == "" ) { ?><p><i class='fa fa-copyright'></i> 2022 <?php echo get_option('an_hometitle'); ?> - Tüm hakları saklıdır. | <a rel="nofollow" href="https://wordpressustasi.com" target="_blank" title="Kullanım ve Gizlilik Koşulları">Kullanım</a>  <a rel="nofollow" href="" target="_blank" title=""></a></p><?php } else { ?><p><?php echo get_option('an_copyright'); ?></p><?php } ?>
						
					</div>
					<?php if (get_option('an_footermenu') == "Evet" ) { ?>
					<div class="col-xs-6 footer-menu">
						<div class="dropup">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php if (get_option('an_fmtitle') == "" ) { ?>Destek<?php } else { ?><?php echo get_option('an_fmtitle'); ?><?php } ?>
							<span class="caret"></span>
						  </button>
			
							<?php
								wp_nav_menu( array(
									'menu'              => 'footer-right',
									'theme_location'    => 'footer-right',
									'depth'             => 2,
									'container'			=> false,
									'menu_class'        => 'dropdown-menu dropdown-menu-right',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
							?>
						</div>
					</div>	
					<?php } ?>
				</div>
			</footer>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
<!-- Admatic Scroll 300x250 Ad Code START -->
<ins data-publisher="adm-pub-149720679927" data-ad-type="Scroll" class="adm-ads-area" data-ad-network="117175119791" data-ad-sid="304" data-ad-width="300" data-ad-height="250"></ins>
<script src="//cdn2.admatic.com.tr/showad/showad.js" async></script>
<!-- Admatic Scroll 300x250 Ad Code END -->
<!-- Admatic inpage x Ad Code START -->
<ins data-publisher="adm-pub-149720679927" data-ad-type="inpage" class="adm-ads-area" data-ad-network="117175119791" data-ad-sid="600"></ins>
<script src="//cdn2.admatic.com.tr/showad/showad.js" async></script>
<!-- Admatic inpage x Ad Code END -->
</body>
</html>
