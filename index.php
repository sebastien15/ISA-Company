<?php
/* Template Name: homepage */
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.net/html/agrotek/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 10:48:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="keywords" content=" Agrotek | Agriculture, Dairy farm and Gardening HTML Template,  Agritek - Agriculture, Dairy farm and Gardening WordPress Theme, unlimited colors available, ui/ux, ui/ux design, best html template, html template, html, woocommerce, shopify, prestashop, eCommerce, JavaScript, best CSS theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, Preyan Technosys Pvt.Ltd, cymol themes, themetech mount, Web 3.0, multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme, services, web design and development, agriculture, agro tourism, dairy farm, ecology, farm services, farmer, farming, food producers, gardening, milk, multi business, organic farming, organic food, agriculture life, farming life, agricultural business, agro culture worldwide, agronomy farming simulator, agriculture world">
	<meta name="description" content="Agrotek – Agriculture HTML Template" />
	<meta name="author" content="https://www.themetechmount.com/" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Agrotek – Agriculture HTML Template</title>

	<!-- favicon icon -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.png" />

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" />

	<!-- animate -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/animate.css" />

	<!-- slick-slider -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/slick.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/slick-theme.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/font-awesome.css" />

	<!-- themify -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/themify-icons.css" />

	<!-- flaticon -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/flaticon.css" />


	<!-- REVOLUTION LAYERS STYLES -->

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/revolution/css/rs6.css">

	<!-- prettyphoto -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/prettyPhoto.css">

	<!-- shortcodes -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/shortcodes.css" />

	<!-- main -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/main.css" />

	<!-- responsive -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/responsive.css" />

</head>

<body>

	<!--page start-->
	<div class="page">

		<!-- preloader start -->
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
		<!-- preloader end -->

		<!--header start-->
		<header id="masthead" class="header ttm-header-style-01">
			<!-- ttm-header-wrap -->
			<div class="ttm-header-wrap">
				<!-- ttm-stickable-header-w -->
				<div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">

					<div class="ttm-widget_header">
						<?php
						if (get_field('header')) :
							$sec = get_field('header');

						?>
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row align-items-center">
											<!-- site-branding -->
											<div class="site-branding mr-auto">
												<a class="home-link" href="<?= $sec['image']['url'] ?>" title="Agrotek" rel="home">
													<img src="<?= $sec['image']['url'] ?>" id="logo-img" class="img-center" alt="logo">
												</a>
											</div><!-- site-branding end -->
											<!-- widget-info -->
											<?php
											$contact_infos = $sec['contact_infos'];
											foreach ($contact_infos as $contact_info) :
											?>
												<div class="widget_info d-flex flex-row align-items-center justify-content-end">
													<div class="widget_icon"><i class="flaticon-call"></i></div>
													<div class="widget_content">
														<h5 class="widget_title"><?= $contact_info['text1'] ?></h5>
														<p class="widget_desc"><?= $contact_info['text2'] ?></p>
													</div>
												</div><!-- widget-info end -->
											<?php
											endforeach;
											?>

										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>

					</div>
					<div id="site-header-menu" class="site-header-menu">
						<div class="site-header-menu-inner ttm-stickable-header">
							<div class="container">

								<!--site-navigation -->
								<div id="site-navigation" class="site-navigation">
									<?php
									if (get_field('nav_link')) :
										$nav_link = get_field('nav_link');
									?>
										<div class="ttm-custombutton">
											<a href="<?= $nav_link['url'] ?>" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor"><?= $nav_link['title'] ?></a>
										</div>
									<?php endif; ?>

									<nav id="menu" class="menu">
										<ul class="dropdown">
											<li class="active"><a href="index.html">Home</a>

											</li>
											<li><a href="about">About us</a>

											</li>
											<li><a href="#services">Services</a>

											</li>
											<li><a href="Projects">Project</a>

											</li>
											<li><a href="testimonial">Testimonial</a>

											</li>
											<li><a href="blog">Shop</a>

											</li>
										</ul>
									</nav>
								</div>
								<!-- site-navigation end-->
							</div>
						</div>
					</div>
				</div><!-- ttm-stickable-header-w end-->
			</div><!--ttm-header-wrap end -->
		</header><!--header end-->

		<!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->

		<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
			<rs-module id="rev_slider_1_1" data-version="6.1.2" class="rev_slider_1_1_height">
				<?php
				if (get_field('sliders')) :
					$sliders = get_field('sliders');
				?>
					<?php
					foreach ($sliders as $slider_sec) :
					?>
						<rs-slides>
							<rs-slide data-key="rs-1" data-title="Slide" data-thumb="<?= $slider_sec['background_image']['url'] ?>" data-anim="ei:d;eo:d;s:d;r:0;t:zoomout;sl:d;">
								<img src="<?= $slider_sec['background_image']['url'] ?>" title="sliderbg-01" width="1920" height="705" class="rev-slidebg" data-no-retina>
								<rs-layer id="slider-1-slide-1-layer-1" class="head-font" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:263px,263px,159px,139px;" data-text="w:normal;s:75,75,55,35;l:85,85,60,45;fw:600;" data-frame_0="o:1;" data-frame_0_chars="o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:900;" data-frame_1_chars="e:Power4.easeInOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;sR:6600;"><?= $slider_sec['min_title'] ?>
								</rs-layer>
								<rs-layer id="slider-1-slide-1-layer-2" class="ttm-bgcolor-skincolor" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:205px,205px,122px,106px;" data-text="w:normal;s:30,30,20,17;l:30,30,18,17;fw:300;" data-padding="t:7,7,5,3;r:25,25,16,10;b:7,7,5,3;l:25,25,16,10;" data-frame_0="o:1;" data-frame_0_chars="o:0;rX:-90deg;oZ:-50;" data-frame_1="st:40;sp:700;sR:40;" data-frame_1_chars="e:Power4.easeInOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;sR:7060;"><?= $slider_sec['title'] ?>
								</rs-layer>
								<rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#bababa" data-rsp_ch="on" data-xy="x:c;xo:0,0,0,-500px;yo:359px,359px,223px,112px;" data-text="w:normal;s:17,17,14,11;l:24,24,19,15;a:center;" data-dim="w:565px,565px,388px,239px;" data-vbility="t,t,t,f" data-frame_0="y:100%;" data-frame_1="e:Linear.easeNone;st:1160;sp:500;sR:1160;" data-frame_999="o:0;st:w;sR:7340;"><?= $slider_sec['description'] ?>
								</rs-layer>


								<rs-layer id="slider-1-slide-1-layer-5" class="ttm-bgcolor-white" data-type="shape" data-rsp_ch="on" data-xy="x:c;xo:-439px,-439px,-275px,-169px;yo:304px,304px,190px,117px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:44px,44px,27px,16px;h:3px,3px,1px,1px;" data-vbility="t,t,f,f" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="e:Linear.easeNone;st:1030;sp:400;sR:1030;" data-frame_999="o:0;st:w;sR:7570;">
								</rs-layer>
								<rs-layer id="slider-1-slide-1-layer-6" class="ttm-bgcolor-white" data-type="shape" data-rsp_ch="on" data-xy="x:c;xo:441px,441px,276px,170px;yo:304px,304px,190px,117px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:44px,44px,27px,16px;h:3px,3px,1px,1px;" data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="e:Linear.easeNone;st:1570;sp:400;sR:1570;" data-frame_999="o:0;st:w;sR:7030;">
								</rs-layer>
							</rs-slide>

						</rs-slides>
					<?php
					endforeach;
					?>
				<?php endif; ?>
			</rs-module>
		</rs-module-wrap>


		<!-- END REVOLUTION SLIDER -->


		<!--site-main start-->
		<div class="site-main">

			<!-- aboutus-section -->
			<section id="about" class="ttm-row first-about-section bg-img1 clearfix">
				<div class="container">
					<?php
					if (get_field('about')) :
						$about_section = get_field('about');

					?>
						<div class="row"><!-- row -->
							<div class="col-lg-5">
								<!-- ttm_single_image-wrapper -->
								<div class="ttm_single_image-wrapper mr_95 res-991-mr-0 position-relative z-1 res-991-center">
									<img class="img-fluid" src="<?= $about_section['image']['url'] ?>" title="single-img-one" alt="single-img-one">
								</div><!-- ttm_single_image-wrapper end -->

							</div>
							<div class="col-lg-7">
								<div class="spacing-1 ttm-bgcolor-white bordertop-12px-solid skincolor-border">
									<!-- section title -->
									<div class="section-title clearfix">
										<div class="title-header">
											<h5><?= $about_section['min_title'] ?></h5>
											<h2 class="title"><?= $about_section['title'] ?></h2>
										</div>
										<div class="heading-seperator">
											<span></span>
										</div>
									</div><!-- section title end -->
									<p><?= $about_section['description'] ?></p>


									<div class="row no-gutters">
										<?php
										$what_we_do = $about_section['what_we_do'];
										foreach ($what_we_do as $what_we_do_sec) :
										?>
											<div class="col-md-6 col-lg-6 col-sm-6">
												<!--  featured-icon-box -->
												<div class="featured-icon-box style1 left-icon icon-align-top">
													<div class="featured-icon"><!--  featured-icon -->
														<div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
															<image src="<?= $what_we_do_sec['image']['url'] ?>"></image><!--  ttm-icon -->
														</div>
													</div>
													<div class="featured-content"><!--  featured-content -->
														<div class="featured-title"><!--  featured-title -->
															<h5><?= $what_we_do_sec['title'] ?></h5>
														</div>
													</div>
												</div><!--  featured-icon-box END -->
											</div>
										<?php
										endforeach;
										?>
									</div>



								</div>
							</div>
						</div>
					<?php endif; ?>

					<!-- row end -->
				</div>
			</section>
			<!-- aboutus-section end -->




			<!-- row-title-section -->
			<section id="Projects" class="ttm-row first-services-section ttm-bgcolor-grey clearfix">
				<div class="container">
					<div class="row"><!-- row -->
						<?php
						if (get_field('what_we_offer')) :
							$what_we_offer_section = get_field('what_we_offer');

						?>
							<div class="col-lg-4">

								<div class="res-991-mb-30">
									<!-- section title -->
									<div class="section-title clearfix">
										<div class="title-header">
											<h5><?= $what_we_offer_section['min_title'] ?></h5>
											<h2 class="title"><?= $what_we_offer_section['title'] ?></h2>
										</div>
										<div class="heading-seperator">
											<span></span>
										</div>
									</div><!-- section title end -->
									<p><?= $what_we_offer_section['description'] ?>,</p>

									<div class="mt-25">
										<?php
										$services = $what_we_offer_section['services'];
										foreach ($services as $service) :
										?>
											<ul class="ttm-list ttm-list-style-icon">
												<li><i class="fa fa-check-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content"><?= $service['text'] ?></span></li>
											</ul>

										<?php
										endforeach;
										?>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<?php
									$offers = $what_we_offer_section['offers'];
									foreach ($offers as $offer) :
									?>
										<div class="col-md-6">
											<!--  featured-icon-box -->
											<div class="featured-icon-box left-icon icon-align-top style3 ttm-bgcolor-white">
												<div class="featured-icon"><!--  featured-icon -->
													<div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
														<image src="<?= $offer['image']['url'] ?>"></image><!--  ttm-icon -->
													</div>
												</div>
												<div class="featured-content"><!--  featured-content -->
													<div class="featured-title"><!--  featured-title -->
														<h5 class="mb-5"><?= $offer['title'] ?></h5>
													</div>
													<div class="featured-desc"><!--  featured-desc -->
														<p><?= $offer['description'] ?></p>
													</div>
												</div>
											</div><!--  featured-icon-box END -->
										</div>

									<?php
									endforeach;
									?>
								</div>
							</div>
						<?php endif; ?>

					</div><!-- row -->
				</div>
			</section>
			<!-- row-title-section -->

			<!-- progress-section -->
			<section class="ttm-row zero-padding-section position-relative z-1 clearfix">
				<div class="container">
					<?php
					if (get_field('why_choose_us')) :
						$why_choose_us_section = get_field('why_choose_us');

					?>
						<div class="row no-gutters"><!-- row -->
							<div class="col-lg-6">
								<!-- col-img-img-one -->
								<div class="col-bg-img-one ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-left-span">
									<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
										<div class="ttm-bg-layer-inner"></div>
									</div>
									<div class="layer-content">
										<div class="spacing-2 ">
											<!-- section title -->
											<div class="section-title clearfix">
												<div class="title-header">
													<h5><?= $why_choose_us_section['min_title'] ?></h5>
													<h2 class="title"><?= $why_choose_us_section['title'] ?></h2>
												</div>
												<div class="heading-seperator">
													<span></span>
												</div>
											</div><!-- section title end -->
											<p><?= $why_choose_us_section['description'] ?></p>
											<div class="mt-40">
												<!-- progress-bar -->
												<?php
												$offers = $why_choose_us_section['offers'];
												foreach ($offers as $offer) :
												?>
													<div class="ttm-progress-bar" data-percent="100%">
														<div class="progress-bar-title"><?= $offer['text'] ?></div><!-- progress-bar-title -->
														<div class="progress-bar-inner">
															<div class="progress-bar progress-bar-color-bar_skincolor"></div>
														</div>
													</div>
												<?php
												endforeach;
												?>

											</div>
										</div>
									</div>
								</div>
								<!-- col-img-img-one -->
							</div>
							<div class="col-lg-6 mt_40 mb_40 res-991-m-0">
								<!-- col-img-img-two -->
								<div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-right-span border40-img skincolor-border res-991-d-none">
									<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
									</div>
									<div class="layer-content"></div>
								</div>
								<!-- col-img-img-two responsive-img-->
								<img src="<?= $why_choose_us_section['image']['url'] ?>" class="ttm-equal-height-image" alt="bg-image">
							</div>
						</div><!-- row -->
					<?php endif; ?>

				</div>
			</section>
			<!-- progress-section -->

			<!-- portfolio-text-section -->
			<?php
			if (get_field('projects')) :
				$projects_section = get_field('projects');

			?>
				<section class="ttm-row portfolio-text-section ttm-bgcolor-grey clearfix">
					<div class="container">
						<div class="row"><!-- row -->
							<div class="col-lg-12">
								<!-- section title -->
								<div class="section-title text-center clearfix">
									<div class="title-header">
										<h5><?= $projects_section['min_title'] ?></h5>
										<h2 class="title"><?= $projects_section['title'] ?></h2>
									</div>
									<div class="heading-seperator">
										<span></span>
									</div>
								</div><!-- section title end -->
							</div>
						</div><!-- row -->
					</div>
				</section>
				<!-- portfolio-text-section -->

				<!-- portfolio-section -->

				<section class="ttm-row topzero-padding-section clearfix">

					<div class="container">

						<div class="row multi-columns-row ttm-boxes-spacing-10px ttm-bgcolor-white mt_140"><!-- row -->
							<?php
							$projects_lists = $projects_section['projects_lists'];
							foreach ($projects_lists as $projects_list) :
							?>
								<div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
									<!-- featured-imagebox -->
									<div class="featured-imagebox featured-imagebox-portfolio style1">
										<div class="featured-thumbnail"><!-- featured-thumbnail-->
											<img class="img-fluid" src="<?= $projects_list['background_image']['url'] ?>" alt="image">
										</div><!-- featured-thumbnail END-->
										<div class="ttm-box-view-overlay"> <!-- ttm-box-view-overlay -->

											<div class="featured-content"><!-- featured-content-->
												<div class="featured-title"><!-- featured-title-->
													<h5><a href="#"><?= $projects_list['title'] ?></a></h5>
												</div>
												<div class="category"><!-- category -->
													<p><?= $projects_list['name'] ?></p>
												</div>
											</div>
										</div><!-- ttm-box-view-overlay end-->
									</div>
									<!-- featured-imagebox -->
								</div>
							<?php
							endforeach;
							?>




						</div><!-- row -->
					</div>
				</section>


			<?php endif; ?>

			<!-- portfolio-section -->



			<!-- team-section -->
			<section class="ttm-row first-team-section position-relative z-1 mt_60 res-991-mt-0 ttm-bgcolor-white clearfix">
				<?php
				if (get_field('team_members')) :
					$team_members_section = get_field('team_members');

				?>
					<div class="container">
						<div class="row"><!-- row -->
							<div class="col-lg-9 col-xl-10 col-md-9">
								<!-- section-title -->
								<div class="section-title style2 clearfix">
									<div class="title-header">
										<h5><?= $team_members_section['min_title'] ?></h5>
										<h2 class="title"><?= $team_members_section['title'] ?></h2>
									</div>
									<div class="title-desc"><?= $team_members_section['description'] ?></div>
								</div><!-- section-title end -->
							</div>

						</div>
						<!-- row end -->
						<!-- row -->
						<div class="row slick_slider ttm-boxes-spacing-15px" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots":false, "arrows":false, "autoplay":false, "infinite":true, "centerMode":false}'>
							<?php
							$members = $team_members_section['members'];
							foreach ($members as $member) :
							?>
								<div class="ttm-box-col-wrapper col-lg-12">
									<!-- featured-imagebox-team -->
									<div class="featured-imagebox featured-imagebox-team style1">
										<div class="featured-thumbnail"><!-- featured-thumbnail -->
											<img class="img-fluid" src="<?= $member['image']['url'] ?>" alt="image">

										</div>
										<div class="featured-content box-shadow">
											<div class="featured-title"><!-- featured-title -->
												<h5><a href="team-details.html"><?= $member['name'] ?></a></h5>
											</div>
											<p class="category"><?= $member['title'] ?></p><!-- category -->
										</div>
									</div><!-- featured-imagebox-team end-->
								</div>

							<?php
							endforeach;
							?>

						</div>
						<!-- row end-->
					</div>
				<?php endif; ?>

			</section>

		</div><!--site-main end-->

		<!--footer start-->
		<?php
		if (get_field('footer')) :
			$footer_section = get_field('footer');

		?>
			<footer class="footer widget-footer clearfix">


				<div class="second-footer ttm-textcolor-white">
					<div class="container">
						<div class="row">
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
										<li><a href="about">About Us</a></li>
										<li><a href="services">Our Services</a></li>
										<li><a href="Projects">Projects</a></li>
										<li><a href="testimonial">Testimonial</a></li>
										<li><a href="about">About us</a>


									</ul>
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

</body>

<!-- Mirrored from themetechmount.net/html/agrotek/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 10:50:11 GMT -->

</html>