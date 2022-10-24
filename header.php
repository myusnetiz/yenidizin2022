<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
<?php echo $ipt_theme_op_settings['integration']['header']; ?>
<meta name="keywords" content="hptnc , dizin sitesi , web list," />
<meta name="description" content="World Web List" />
<meta name="copyright" content="&copy; HPTNC" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
<script src="https://www.google.com/recaptcha/api.js?render=6LdQw-MUAAAAANQcXS2Lq0SwE4s4XGexnHX9PpUl"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute("6LdQw-MUAAAAAF6hs69fFjVJlSWe8HsfqwBruoBE", {action: "homepage"}).then(function(token) {
         ...
      });
  });
</script>

<!-- Admatic imageplus x Ad Code START -->
<ins data-publisher="adm-pub-149720679927" data-ad-type="imageplus" class="adm-ads-area" data-ad-network="117175119791" data-ad-sid="400"></ins>
<script src="//cdn2.admatic.com.tr/showad/showad.js" async></script>
<!-- Admatic imageplus x Ad Code END -->

<!-- Admatic interstitial 800x600 Ad Code START -->
<ins data-publisher="adm-pub-149720679927" data-ad-type="interstitial" class="adm-ads-area" data-ad-network="117175119791" data-ad-sid="209" data-ad-width="800" data-ad-height="600"></ins>
<script src="//cdn2.admatic.com.tr/showad/showad.js" async></script>
<!-- Admatic interstitial 800x600 Ad Code END -->

<!-- Admatic inpage x Ad Code START -->
<ins data-publisher="adm-pub-149720679927" data-ad-type="inpage" class="adm-ads-area" data-ad-network="117175119791" data-ad-sid="600"></ins>
<script src="//cdn2.admatic.com.tr/showad/showad.js" async></script>
<!-- Admatic inpage x Ad Code END -->

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(61265383, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/61265383" style="position:absolute; left:-9999px;" alt="img" /></div></noscript> <!-- /Yandex.Metrika counter -->	  

	</head>
	<body>
		<div id="wrapper">
			<nav id="custom-header-menu" class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if (get_option('an_logo') == "" ) { ?><img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /><?php } else { ?><img alt="<?php bloginfo('name'); ?>" height="50" src="<?php echo get_option('an_logo'); ?>" /><?php } ?></a>
					<p class="navbar-text hidden-md hidden-sm hidden-xs"><?php if (get_option('an_slogan') == "" ) { ?><?php } else { ?><?php echo get_option('an_slogan'); ?><?php } ?></p>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	  
					<?php
						wp_nav_menu( array(
							'menu'              => 'top-left',
							'theme_location'    => 'top-left',
							'depth'             => 2,
							'container'			=> false,
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
					<form method="get" id="searchform" class="navbar-form navbar-left hidden-md hidden-sm" role="search" action="<?php bloginfo('home'); ?>" >
						<div class="form-group">
							<input id="s" type="text" name="s" class="form-control" placeholder="anahtar kelimeni yaz...">
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Ara</button>
					</form>
					<?php
						wp_nav_menu( array(
							'menu'              => 'top-right',
							'theme_location'    => 'top-right',
							'depth'             => 2,
							'container'			=> false,
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
