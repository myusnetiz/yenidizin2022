<?php
class HomepageWidget extends WP_Widget {

    function __construct() {
        $widget_options = array( 'description' => 'Anasayfa için kategori bloğu.' );
        parent::WP_Widget(false,'(HptncDizin) Anasayfa Kategorisi', $widget_options );
    }
     
    function widget($args, $instance) {
		extract($args);
		$exclude = $instance['exclude'];
		if(empty($widtitle)) {
			$widtitle = "Kategori";
		}
		echo $before_widget;
        ?>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="list-group">
				<h4 class="kat-baslik"><i class="fa fa fa-folder-open"></i>&nbsp; <?php $yourcat = get_category($exclude); if ($yourcat) { echo $yourcat->name; } ?></h4>
				<?php
				$linksnumber = get_option('an_linknumber'); 
				$recent = new WP_Query("cat=' . $exclude . '&showposts=$linksnumber"); while($recent->have_posts()) : $recent->the_post();?>
				<a class="list-group-item kat-list" href="<?php $values = get_post_custom_values("ana_website_url"); echo $values[0]; ?>" target="_blank"><i class="fa fa-chevron-circle-right"></i><?php the_title(); ?></a>	
				<?php endwhile; ?>
				<a class="list-group-item kat-list moreof" href="<?php $category_link = get_category_link( $exclude ); echo esc_url( $category_link ); ?>"><i class="fa fa-caret-right"> Devamı</i></a>	
			</div>
		</div>			

        <?php
        echo $after_widget;
		}

		function update($new_instance, $old_instance) {
			return $new_instance;
		}
    
		function form($instance) {	
		
		if(isset($instance['exclude'])) {
            $exclude = $instance['exclude'];
        }								
        ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'exclude' ); ?>"><?php _e( 'Kategori Seçin', 'textdomain' ); ?>:</label>
			<?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'exclude' ), 'selected' => $exclude ) ); ?>
		</p>
	
<?php
    }
}
register_widget( 'HomepageWidget' );
