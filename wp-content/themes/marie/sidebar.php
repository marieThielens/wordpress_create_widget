<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marie
 */


if (is_active_sidebar('droite_twitter') ) : ?>
<div id="droite_twitter" class="droite_twitter"> 
	<?php dynamic_sidebar('droite_twitter'); ?>
</div>
<?php endif;
?>


<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
