<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whc-theme-1
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info container">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'whc' ) ); ?>">
                    <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'whc' ), 'WordPress' );
				?>
                </a>
                <span class="sep"> | </span>
                <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'whc' ), 'whc', '<a href="http://underscores.me/">Alex Gutierrez</a>' );
				?>
            </div>
            <div class="col-md-6">
                <?php get_sidebar( 'footer' ); ?>
            </div>
        </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>