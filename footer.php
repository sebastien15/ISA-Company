<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agroteck
 */

?>

		<!--footer start-->
		<?php
		if (get_field('footer')) :
			$footer_section = get_field('footer');

		?>
			<footer class="footer widget-footer clearfix">


				<div class="second-footer ttm-textcolor-white">
					<div class="container">
						<div class="row" style="justify-content: space-between;">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
								<div class="widget widget_text  clearfix">
									<h3 class="widget-title"><?= $footer_section['title'] ?></h3>
									<div class="">
										<p><?= $footer_section['desc1'] ?></p>
										<p><?= $footer_section['desc2'] ?></p>
										<hr>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
								<div class="widget link-widget clearfix">
									<h3 class="widget-title"><?= $footer_section['link_text'] ?></h3>
									<ul id="menu-footer-services">
										<li><a href="#about">About Us</a></li>
										<li><a href="#services">Our Services</a></li>
										<li><a href="#projects">Projects</a></li>
										<li><a href="#team">Our Team</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
								<div class="contact-form">
									<h2>Contact Us</h2>
									<form action="#" method="post">
										<label for="name">Name</label>
										<input type="text" id="name" name="name" required>

										<label for="email">Email</label>
										<input type="email" id="email" name="email" required>

										<label for="message">Message</label>
										<textarea id="message" name="message" rows="4" required></textarea>

										<input type="submit" value="Send Message">
									</form>
								</div>
							</div>


							<?php
							if (get_field('get_in_touch')) :
								$get_in_touch_section = get_field('get_in_touch');
								var_dump($get_in_touch_section);

							?>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
									<div class="widget contact-widget">
										<h3 class="widget-title"><?= $get_in_touch_section['title'] ?></h3>
										<ul class="contact-widget-wrapper">
											<li><i class="fa fa-map-marker"></i><?= $get_in_touch_section['location'] ?> <br> <?= $get_in_touch_section['location_town'] ?></li>
											<li><i class="fa fa-phone"></i><?= $get_in_touch_section['call_number'] ?></li>
											<li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank"><?= $get_in_touch_section['email'] ?></a></li>
										</ul>
										<div class="social-icons circle social-hover">
											<ul class="list-inline">
												<li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
												<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>


				<div class="bottom-footer-text ttm-textcolor-white">
					<div class="container">
						<div class="row copyright">
							<div class="col-md-12">
								<div class="text-center">
									<span><?= $footer_section['copyright'] ?>&nbsp;<a href="#"><?= $footer_section['companys_name'] ?></a> Template by<a href="https://themetechmount.com/" target="_blank"> Themetechmount</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		<?php endif; ?>
		<!--footer end-->

		<!--back-to-top start-->
		<a id="totop" href="#top">
			<i class="fa fa-angle-up"></i>
		</a>
		<!--back-to-top end-->

	</div><!-- page end -->

	<!-- Javascript -->

	<script src="<?= get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/tether.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery.easing.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery-waypoints.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery-validate.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/slick.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/numinate.min6959.js?ver=4.9.3"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

	<!-- Revolution Slider -->
	<script src="<?= get_template_directory_uri(); ?>/revolution/js/revolution.tools.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/revolution/js/rs6.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/revolution/js/slider.js"></script>

	<!-- Javascript end-->



<?php wp_footer(); ?>

</body>
</html>
