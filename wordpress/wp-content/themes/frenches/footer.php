<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Frenches
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="row">
			<div class="site-info col-lg-4">
				<a href="<?php echo esc_url( __( 'http://levraiinteractive.com/', 'frenches' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'copyright &copy; 2017 %s', 'frenches' ), 'Le Vrai Interactive Ltd.' );
				?></a>
			</div><!-- .site-info -->
			<div class="col-lg-4">
				<p>71 - 75 Shelton Street London WC2H 9JQ</p>
			</div>
			<div class="col-lg-4">
				<p>T: 0203 086 9027 | E: <a href="mailto:info@levraiinteractive.com">info@levraiinteractive.com</a></p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
(function() {
  'use strict';

  document.querySelector('.menu-btn').addEventListener('click', function(e) {
    var mainNav = document.querySelector('.main-nav');

		e.preventDefault();
    if (mainNav.classList.contains('main-nav--hidden')) {
      mainNav.classList.remove('main-nav--hidden', 'fadeOut');
			mainNav.classList.add('animated', 'fadeIn');
      this.classList.add('is-active');
    } else {
      mainNav.classList.add('animated', 'fadeOut');
			setTimeout(function() {
				mainNav.classList.add('main-nav--hidden');
			}, 1000);
			mainNav.classList.remove('fadeIn');
      this.classList.remove('is-active');
    }
	}, false);
})();
</script>

</body>
</html>
