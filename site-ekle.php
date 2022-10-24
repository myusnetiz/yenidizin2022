<?php
/*
Template Name: Site Ekle
*/
?>
<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

	if (isset($_POST['submit'])) {
    		$error = "";

    	if (!empty($_POST['websitetitle'])) {
    		$title = $_POST['websitetitle'];
   	 } else {
   	 	$error .= "Başlık, lütfen.<br />";
   	}

    	if (!empty($_POST['description'])) {
    		$description = $_POST['description'];
   	 } else {
   		$error .= "Tanım, lütfen.<br />";
   	}
	
    	if (!empty($_POST['siteurl'])) {
    		$siteurl = $_POST['siteurl'];
   	 } else {
   		$error .= "Adres, lütfen.<br />";
   	}

	    if (!empty($_POST['websiteowner'])) {
    		$websiteowner = $_POST['websiteowner'];
   	 } else {
   	 	$error .= "İsim, lütfen.<br />";
   	}
	
	    if (!empty($_POST['email'])) {
    		$email = $_POST['email'];
   	 } else {
   	 	$error .= "E-mail adresi, lütfen.<br />";
   	}
	
		$websiteowner = $_POST['websiteowner'];
		$email = $_POST['email'];
		$siteurl = $_POST['siteurl'];

		if (empty($error)) {
			$new_post = array(
			'post_title'	=>	$title,
			'post_content'	=>	$description,
			'post_category'	=>	array($_POST['cat']),  
			'post_status'	=>	'draft',  
			'post_type'	=>	'post',  
			'websiteowner'	=>	$websiteowner,	
			'siteurl'	=>	$siteurl,	
			'email'	=>	$email
		);
		
		$pid = wp_insert_post($new_post);
		$success .= "Teşekkürler. Link eklendi, yönetici onayı bekliyor.";

		add_post_meta($pid, 'ana_website_owner', $websiteowner, true);
		add_post_meta($pid, 'ana_email', $email, true);
		add_post_meta($pid, 'ana_website_url', $siteurl, true);
		} 
	} 
}

do_action('wp_insert_post', 'wp_insert_post');

?>

<?php get_header(); ?>	
		<div class="container ana">
			<div class="row">
				<div class="page-header">
					<h1 class="text-center text-kirmizi"><?php the_title(); ?></h1>
				</div>
				<?php the_content(); ?>
			</div>	
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-6 col-md-offset-3">
					<?php
						if (!empty($error)) {
							echo '<p class="text-danger"><strong>Hata(lar):</strong><br/>' . $error . '</p>';
						} elseif (!empty($success)) {
							echo '<p class="success">' . $success . '</p>';
						}
					?>
					<?php the_content(); ?>
						<form id="new_post" name="new_post" method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="fieldtitle" for="websitetitle">Site Adı*:</label>
								<input type="text" id="websitetitle" class="form-control" placeholder="Madhuri Dixit" value="" tabindex="5" name="websitetitle" />
							</div>
							<div class="form-group">
								<label class="fieldtitle" for="cat">Kategori*:</label>
								<?php wp_dropdown_categories( 'tab_index=10&taxonomy=category&hide_empty=0&class=form-control&orderby=name' ); ?>
							</div>
							<div class="form-group">
								<label class="fieldtitle" for="siteurl">Adres*:</label>
								<input type="text" id="siteurl" class="form-control" placeholder="https://www.hptnc.com" value="" tabindex="5" name="siteurl" />
							</div>
							<div class="form-group">
								<label class="fieldtitle" for="description">Tanım*:</label>
								<textarea id="description" class="form-control" tabindex="15" name="description" cols="60" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label class="fieldtitle" for="owner">Adınız*:</label>
								<input type="text" class="form-control" id="websiteowner" placeholder="Web Name " value="" tabindex="5" name="websiteowner" />
							</div>
							<div class="form-group">
								<label class="fieldtitle" for="email">Eposta*:</label>
								<input type="text" value="" class="form-control" size="30" id="email" placeholder="eposta@hptnc.com" tabindex="20" name="email" />
							</div>
								<button type="submit" tabindex="40" class="btn btn-success btn-block" id="submit" name="submit" />Gönder</button>
							<input type="hidden" name="action" value="new_post" />
							<?php wp_nonce_field( 'new-post' ); ?>
						</form>
					</div>	
			<?php endwhile; ?>
			<?php endif; ?>
		</div>	
<?php get_footer(); ?>
