<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package topcat-lite
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php
	if ( is_active_sidebar( 'sidebar-footer' ) ) {
		?>
		<div id="sidebar-footer" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
		</div>
	<?php } ?>
	<div class="site-info">
		<div class="copyright">

			<?php
			$topcat_lite_enable_copyright = kirki_get_option( 'topcat_lite_enable_copyright' );
			$topcat_lite_copyright        = kirki_get_option( 'topcat_lite_copyright' );
			if ( isset( $topcat_lite_enable_copyright ) && ( $topcat_lite_enable_copyright == 1 ) ) {
				echo $topcat_lite_copyright;
			}
			?>
		</div>
		<div class="credit-info">
			<?php $topcat_lite_enable_poweredby = kirki_get_option( 'topcat_lite_enable_poweredby' );
			if ( isset( $topcat_lite_enable_poweredby ) && ( $topcat_lite_enable_poweredby == 1 ) ) {
				?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'topcat-lite' ) ); ?>"
				   title="<?php esc_attr_e( 'Powered by WordPress', 'topcat-lite' ); ?>">
					<?php printf( __( 'Powered by %s', 'topcat-lite' ), 'WordPress' ); ?>
				</a>
			<?php } ?>
		</div>
		<div class="created-by">
			<?php printf( __( 'Created by', 'topcat-lite' ) ); ?>
			<a href="<?php echo esc_url( __( 'http://www.dejanmarkovic.com/', 'topcat-lite' ) ); ?>">
				<?php printf( __( 'Dejan Markovic', 'topcat-lite' ) ); ?>
			</a>
		</div>
	</div>
	<!-- .site-info -->
</footer>
</div>
<?php
wp_footer();
?>

</body>
</html>
