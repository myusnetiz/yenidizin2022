<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "an";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;
	
//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name; }
$categories_tmp = array_unshift($of_categories, "Select Category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

// Number of featured posts to display
$featured_options_select = array("2","4","6","8","10","12"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$thumbsekil= array("Solda","Şerit");
// Set the Options Array
$options = array();

$options[] = array( "name" => "Genel Ayarlar",
                    "type" => "heading");

$options[] = array( "name" => "Logo",
					"desc" => "Logo yükleyin. Yükseklik 50px.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");	

$options[] = array( "name" => "Slogan",
					"desc" => "Siteniz için bir slogan yazın.",
					"id" => $shortname."_slogan",
					"std" => "",
					"type" => "text");		

$options[] = array( "name" => "Anasayfa Başlığı",
					"desc" => "Anasyafanız için bir başlık girin.",
					"id" => $shortname."_hometitle",
					"std" => "",
					"type" => "text");	
					
$options[] = array( "name" => "Anasayfa Tanım",
					"desc" => "Anasayfanız için bir açıklama girin.",
					"id" => $shortname."_homedescription",
					"std" => "",
					"type" => "textarea");
					
$options[] = array( "name" => "Bağlantılar",
					"desc" => "Anasayfadaki kutucuklarda kaç bağlantı listelensin?",
					"id" => $shortname."_linknumber",
					"std" => "10",
					"type" => "text");					
					
$options[] = array( "name" => "Favicon",
					"desc" => "Favicon yükleyin.",
					"id" => $shortname."_favicon",
					"std" => "",
					"type" => "upload");

$options[] = array( "name" => "Breadcrumb Gösterilsin mi?",
					"desc" => "Kategori ve iç sayfalarda 'neredeyim' bağlantıları gösterilsin mi?",
					"id" => $shortname."_showbreadcrumb",
					"std" => "Evet",
					"type" => "select",
					"options" => array("Hayır","Evet"));	
					
$options[] = array( "name" => "Küçük Resimler",
					"desc" => "İç sayfalardaki ufak resimler için bitpixels.com kodunuzu giriniz.",
					"id" => $shortname."_bitpixels",
					"std" => "",
					"type" => "text");	

$options[] = array("name" => "Stil",
					"type" => "heading");
					
$options[] = array("name" => "Renk Seçimi",
					"desc" => "Temanız için bir renk seçin.",
					"id" => $shortname."_altstylesheet",
					"std" => "kirmizi",
					"type" => "select",
					"options" => $alt_stylesheets);
					
$options[] = array("name" => "Özel CSS",
					"desc" => "Özel css kodlarınızı yazabilirsiniz.",
					"id" => $shortname."_customcss",
					"std" => "",
					"type" => "textarea");										

$options[] = array( "name" => "Alt Bölüm",
                    "type" => "heading");
					
$options[] = array( "name" => "Alt Bölüm Menüsü",
					"desc" => "Alt bölümde menü kullanmak istiyor musunuz?",
					"id" => $shortname."_footermenu",
					"std" => "Evet",
					"type" => "select",
					"options" => array("Hayır","Evet"));
					
$options[] = array( "name" => "Alt Bölüm Menü Başlığı",
					"desc" => "Eğer menü kullanmak istiyorsanız, bir başlığı giriniz.",
					"id" => $shortname."_fmtitle",
					"std" => "",
					"type" => "text");	

$options[] = array( "name" => "Lisans Yazısı",
					"desc" => "Siteniz için bir lisans metni girin.",
					"id" => $shortname."_copyright",
					"std" => "",
					"type" => "textarea");
					
$options[] = array( "name" => "Analiz Kodu",
					"desc" => "Sayaç kodunuzu yapıştırın.",
					"id" => $shortname."_analytics",
					"std" => "",
					"type" => "textarea");	
					
update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>
