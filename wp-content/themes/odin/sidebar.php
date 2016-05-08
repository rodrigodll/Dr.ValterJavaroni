<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<aside id="sidebar" class="<?php echo odin_classes_page_sidebar_aside(); ?>" role="complementary">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-aside.png" class="img-responsive" title="Informações" alt="Informações">
	<?php bloginfo( 'name' ); ?>
	<br>
	<?php echo esc_attr( get_bloginfo( 'telefone', 'display' ) ); ?>
	<br>

	<?php bloginfo( 'description' ); ?>
	<?php
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
		}
	?>
</aside><!-- #sidebar -->
