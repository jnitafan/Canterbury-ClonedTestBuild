<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<footer class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h1>Canterbury International Hotel</h1>
                                </div>
                                <div class="col-md-auto">
                                </div>
                                <div class="col col-lg-4">
                                    <h1>+61 3 9879 4111</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Address</h4>
                                    <p>326-330 Canterbury Road</p>
                                    <p>Forest Hill, Victoria 3131</p>
                                    <br>
                                    <h4>Opening Hours</h4>
                                    <p>Monday - Sunday</p>
                                    <p>24 hours</p>
                                </div>
                                <div class="col">
                                    <h4>Oliver's Restaraunt</h4>
                                    <p>326-330 Canterbury Road</p>
                                    <p>Forest Hill, Victoria 3131</p>
                                    <br>
                                    <h4>Opening Hours</h4>
                                    <p>Call the number for bookings</p>
                                    <p><b>TODO</b></p>
                                </div>
                                <div class="col-md-auto">
                                </div>
                                <div class="col col-lg-4">
                                    <h4>Follow Us</h4>
                                    <p><b>TODO, book now, tripadvisor and socials</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <p><b>TODO hotels, tripadviser, wotif images & href links</b></p>
                            </div>
                        </div>
                        <p style="text-align: center"><small>&#169 2021 Canterbury International Hotel all rights reserved</small>
                        <br><small><b>TODO: Terms & Conditions | Privacy Policy</b></small></p>
                    </footer>
					
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

