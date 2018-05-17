

	</div><!-- #content -->

	<footer id="footer" class="site-footer">

	<?php if (is_active_sidebar('footer_widget1') ) : ?>
	<div id="footer_widget1" class="footer_widget"> 
		<?php dynamic_sidebar('footer_widget1'); ?>
	</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget2') ) : ?>
	<div id="footer_widget1" class="footer_widget"> 
		<?php dynamic_sidebar('footer_widget2'); ?>
	</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget3') ) : ?>
	<div id="footer_widget1" class="footer_widget"> 
		<?php dynamic_sidebar('footer_widget3'); ?>
	</div>
<?php endif; ?>

<?php if (is_active_sidebar('footer_widget4') ) : ?>
	<div id="footer_widget1" class="footer_widget"> 
		<?php dynamic_sidebar('footer_widget4'); ?>
	</div>
<?php endif; ?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>