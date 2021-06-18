            <div id="ajax-content-wrap" class="at-content">

                <div class="container-wrap">

                    <div class="container main-content">

                        <div class="row">

                            <div id="home" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-section standard_section " style="padding-top: 0px; padding-bottom: 0px; ">
								<div class="row-bg-wrap">
									<div class="row-bg  " style="" data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="col-sm-12 wpb_column column_container column_container col no-extra-padding" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-inner">
											<div class="wpb_wrapper">
												<div style="height: 650px" data-transition="slide" data-overall_style="classic" data-flexible-height="" data-animate-in-effect="none" data-fullscreen="true" data-button-sizing="regular" data-button-styling="btn_with_count" data-autorotate="" data-parallax="false" data-full-width="true" class="nectar-slider-wrap " id="ns-id-5d357b92568de">
													<div style="height: 650px" class="swiper-container" data-tho="auto" data-tco="auto" data-pho="auto" data-pco="auto" data-loop="false" data-height="650" data-min-height="" data-arrows="false" data-bullets="false" data-bullet_style="see_through" data-desktop-swipe="false" data-settings="">
														<div class="swiper-wrapper">
															<div class="swiper-slide" data-bg-alignment="center" data-color-scheme="light" data-x-pos="centered" data-y-pos="middle">
																<div class="image-bg" style="background-image: url(<?= $this->Url->build('/home',true) ?>/content/<?php if(!empty($SettingHome->background_image)){echo $SettingHome->background_image; } ?>);"> &nbsp; </div>
																<div class="container">
																	<div class="content">
																		<h2><?php if(!empty($SettingHome->title)){echo $SettingHome->title; } ?></h2>
																		<p><span class="bannerP"><?php if(!empty($SettingHome->subtitle)){echo $SettingHome->subtitle; } ?></span></p>
																		<div class="buttons">
																			<div class="button solid_color">
																				<a class="primary-color" href="#menu"><?php if(!empty($SettingHome->button1)){echo $SettingHome->button1; } ?></a>
																			</div>
																			<div class="button transparent">
																				<a class="primary-color" href="#zeiten"><?php if(!empty($SettingHome->button2)){echo $SettingHome->button2; } ?></a>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/container--><a href="#" class="slider-down-arrow"><i class="icon-salient-down-arrow icon-default-style"> <span class="ie-fix"></span> </i></a>
																<div class="video-texture "> <span class="ie-fix"></span> </div>
															</div>
															<!--/swiper-slide-->
														</div>
														<div class="nectar-slider-loading "> <span class="loading-icon none">   </span> </div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div id="about" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-content standard_section" style="padding-top: 30px; padding-bottom: 10px;">
                                <div class="row-bg-wrap instance-1">
                                    <div class="row-bg using-image no-cover" style="background-image: url(<?= $this->Url->build('/home',true) ?>/img/bg_beige_1v1.jpg); background-position: left top; background-repeat: repeat; " data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
                                </div>
                                <div class="col span_12 dark left">
                                    <div class="col-sm-12 wpb_column column_container column_container col centered-text padding-5-percent instance-1" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_text_column ">
                                                    <div class="wpb_wrapper">
                                                        <h1><?php if(!empty($SettingAbout->title)){echo $SettingAbout->title; } ?></h1>
                                                    </div>
                                                </div>

                                                <div data-midnight="" data-bg-mobile-hidden="" class="wpb_row row-fluid row standard_section">
                                                    <div class="row-bg-wrap">
                                                        <div class="row-bg"></div>
                                                    </div>
                                                    <div class="col span_12 left">
                                                        <div class="col-sm-2 wpb_column column_container column_container col no-extra-padding instance-2" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8 wpb_column column_container column_container col no-extra-padding instance-3" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">
																	<div class="divider-wrap">
																		<div style="height: 20px;" class="divider"></div>
																	</div>
																	<div class="wpb_text_column">
																		<div class="wpb_wrapper">
<h4 style="text-align: center;">
    <span style="color: #808080;">
        <?php if(!empty($SettingAbout->content)){echo $SettingAbout->content; } ?>
    </span>
</h4>
<h4 style="text-align: center;">
    <span style="color: #808080;">
      <?php if(!empty($SettingAbout->content2)){echo $SettingAbout->content2; } ?>
    </span>
</h4>

																		</div>
																	</div>
																	<div class="divider-wrap">
																		<div style="height: 40px;" class="divider"></div>
																	</div>
																	<div class="wpb_text_column">
																		<div class="wpb_wrapper">
<blockquote>
	<p>
		<em>
            <span style="color: #e2001a;">
                <i class="icon-default-style fa fa-quote-left accent-color"></i>
                <span style="margin-left: 70px; margin-right: 70px;">
                     <?php if(!empty($SettingAbout->motto)){echo $SettingAbout->motto; } ?>
                </span>
                <i class="icon-default-style fa fa-quote-right accent-color"></i>
            </span>
        </em>
	</p>
</blockquote>

																		</div>
																	</div>

																</div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-2 wpb_column column_container column_container col no-extra-padding instance-4" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="zeiten" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-section  row-o-equal-height row-flex  row-o-content-top standard_section" data-using-ctc="true" style="padding: 80px 171px; color: rgb(255, 255, 255);">
								<div class="row-bg-wrap instance-2">
									<div class="row-bg  using-bg-color" style="background-color: #e2001a; " data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
								</div>
								<div class="col span_12 custom left">
									<div class="col-sm-4 wpb_column column_container column_container col centered-text no-extra-padding instance-5" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-inner">
											<div class="wpb_wrapper">
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<h1 style="text-align: center; font-size: 3.5em;">Anfahrt</h1>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 30px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<i class="icon-default-style fa fa-map-marker extra-color-1"></i>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<p style="text-align: center;"><a class="nectar-button medium see-through has-icon" href="#kontakt" data-color-override="#ffffff" data-hover-color-override="false" data-hover-text-color-override="#fff" style="visibility: visible; color: rgb(255, 255, 255); border-color: rgba(255, 255, 255, 0.75);"><span>SO FINDEN SIE UNS!</span><i class="fa fa-map-marker" style="color: rgb(255, 255, 255);"></i></a></p>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4 wpb_column column_container column_container col centered-text no-extra-padding instance-6" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-inner">
											<div class="wpb_wrapper">
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<h1 style="text-align: center; font-size: 3.5em;">Öffnungszeiten</h1>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 30px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<i class="icon-default-style fa fa-clock-o extra-color-1"></i>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 10px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
<div class="wpb_wrapper">
	<p><strong style="margin-top: 20px; font-size: 1.3em;">
         <?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->start_d; } ?>
         bis 
         <?php if(!empty($SettingBusiness->end_d)){echo $SettingBusiness->end_d; } ?>
    </strong>
		<br><?php if(!empty($SettingBusiness->open_hour)){echo $SettingBusiness->open_hour; } ?></p>

</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4 wpb_column column_container column_container col centered-text no-extra-padding instance-7" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-inner">
											<div class="wpb_wrapper">
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<h1 style="text-align: center; font-size: 3.5em;">Reservierung</h1>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 30px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<i class="icon-default-style fa fa-bookmark extra-color-1"></i>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
												<div class="wpb_text_column">
													<div class="wpb_wrapper">
														<p style="text-align: center;"><a class="nectar-button medium see-through has-icon" href="tel:<?php if(!empty($SettingAbout->reservation_contact)){echo str_replace('–','',str_replace(' ','',$SettingAbout->reservation_contact)); } ?>" data-color-override="#ffffff" data-hover-color-override="false" data-hover-text-color-override="#fff" style="visibility: visible; color: rgb(255, 255, 255); border-color: rgba(255, 255, 255, 0.75);"><span>RUFEN SIE UNS AN!</span><i class="fa fa-phone" style="color: rgb(255, 255, 255);"></i></a></p>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 20px;" class="divider"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div id="menu" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-section standard_section " data-using-ctc="true" style="padding: 160px 90px; color: rgb(255, 255, 255); margin-left: -90px; visibility: visible; z-index: 100;">
                                <div class="row-bg-wrap instance-3">
                                    <div class="row-bg" style="" data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
                                </div>
                                <div class="video-color-overlay" data-color="#353535" style="opacity: 0.7; background-color: rgb(53, 53, 53);"></div>

                                <div class="mobile-video-image" style="background-image: url(<?= $this->Url->build('/home',true) ?>/img/preview.jpg)"></div>
                                <div class="nectar-video-wrap" data-bg-alignment="" style="opacity: 1; width: 1349px; height: 663px;">
                                    <video class="nectar-video-bg" width="100%" height="100%" preload="auto" loop="" autoplay="" muted="" style="visibility: visible; width: 1349px; height: 759px; opacity: 1;">
                                        <source src="<?= $this->Url->build('/home',true) ?>/content/<?php if(!empty($SettingMenu->background_content)){echo $SettingMenu->background_content; } ?>" type="video/mp4">
                                    </video>
                                </div>
                                <div class="col span_12 custom center">
                                    <div style=" color: #ffffff;" class="col-sm-12 wpb_column column_container column_container col centered-text padding-5-percent instance-8" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_text_column">
                                                    <div class="wpb_wrapper">
                                                        <h1 style="text-align: center; font-size: 6em; line-height: 90px;"><?php if(!empty($SettingMenu->title)){echo $SettingMenu->title; } ?></h1>

                                                    </div>
                                                </div>
                                                <div class="divider-wrap">
                                                    <div style="height: 20px;" class="divider"></div>
                                                </div>
                                                <div class="wpb_text_column">
                                                    <div class="wpb_wrapper">
                                                        <h4 style="text-align: center;"><?php if(!empty($SettingMenu->subtitle)){echo $SettingMenu->subtitle; } ?></h4>

                                                    </div>
                                                </div>
                                                <div class="divider-wrap">
                                                    <div style="height: 40px;" class="divider"></div>
                                                </div>
                                                <div class="wpb_text_column">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;"><a class="nectar-button large see-through-2 has-icon" target="_blank" href="<?= $this->Url->build('/home/content/',true) ?><?php if(!empty($SettingMenu->menu_file)){echo $SettingMenu->menu_file; } ?>" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff" style="visibility: visible; color: rgb(255, 255, 255); border-color: rgba(255, 255, 255, 0.75);"><span><?php if(!empty($SettingMenu->download_button_title)){echo $SettingMenu->download_button_title; } ?></span><i class="fa fa-cutlery" style="color: rgb(255, 255, 255);"></i></a></p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="gallery" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-section standard_section " data-using-ctc="true" style="padding: 40px 90px; color: rgb(255, 255, 255); margin-left: -90px; visibility: visible;">
                                <div class="row-bg-wrap instance-4">
                                    <div class="row-bg using-image   no-cover" style="background-image: url(<?= $this->Url->build('/home',true) ?>/img/bg_darko_1v1-dunkler-1.jpg); background-position: left top; background-repeat: repeat; " data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
                                </div>
                                <div class="col span_12 custom left">
                                    <div style=" color: #ffffff;" class="col-sm-12 wpb_column column_container column_container col padding-5-percent instance-9" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_text_column">
                                                    <div class="wpb_wrapper">
                                                        <h1 style="text-align: center; font-size: 5em; line-height: 80px;">
<?php if(!empty($SettingGallery->title)){echo $SettingGallery->title; } ?>
                                                        </h1>

                                                    </div>
                                                </div>
                                                <div class="divider-wrap">
                                                    <div style="height: 20px;" class="divider"></div>
                                                </div>
                                                <div class="wpb_text_column">
                                                    <div class="wpb_wrapper">
                                                        <h4 style="text-align: center;"><span style="color: #808080;">
<?php if(!empty($SettingGallery->subtitle)){echo $SettingGallery->subtitle; } ?>
                                                        </span></h4>

                                                    </div>
                                                </div>
                                                <div class="divider-wrap">
                                                    <div style="height: 40px;" class="divider"></div>
                                                </div>

<div class="wpb_gallery  clearfix">
    <div class="wpb_wrapper">
        <div class="wpb_gallery_slidesimage_grid" data-interval="5">

            <div class="portfolio-wrap ">

                <div class="row portfolio-items no-masonry " data-starting-filter="" data-gutter="default" data-masonry-type="default" data-ps="3" data-categories-to-show="" data-col-num="cols-3" instance="0" style="position: relative; height: 741.657px;">

<?php if(!empty($Gallery->toArray()))
{
    foreach ($Gallery as $image) { ?>
                    <div class="col span_4  element" data-project-cat="" data-default-color="true" data-title-color="" data-subtitle-color="" style="position: absolute; left: 715px; top: 494px;">
                        <div class="inner-wrap" data-animation="none">
                            <div class="work-item style-3">
                                <img class="" src="<?= $this->Url->build('/',true) ?>Gallery/<?= $image->thumb ?>" width="600" height="400" alt="ppp_gallery_11" title="ppp_gallery_11" style="transform: matrix(1.005, 0, 0, 1.005, 0, 0);">
                                <div class="work-info-bg" style="opacity: 0.45;"></div>
                                <div class="work-info">
                                    <div class="vert-center">
                                    </div>
                                    <a href="<?= $this->Url->build('/',true) ?>Gallery/<?= $image->image ?>" class="" rel="prettyPhoto[1995_gal]" style="display: inline;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
<?php 
}
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




<div id="appshop" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-content standard_section" style="padding-top: 80px; padding-bottom: 10px; margin-left: -90px; width: 1357px; height: 450px; visibility: visible;">
                                <div class="row-bg-wrap instance-1">
                                    <div class="row-bg using-image no-cover" style="background-color:#e2001a; background-position: left top; background-repeat: repeat; " data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
                                </div>
                                <div class="col span_12 dark left">
                                    <div class="col-sm-12 wpb_column column_container column_container col centered-text padding-5-percent instance-1" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">

                                                <div class="wpb_text_column ">
                                                    <div class="wpb_wrapper">
                                                        <h1 style="color:#fff">kommt bald..</h1>
                                                    </div>
                                                </div><br>

                                                <div data-midnight="" data-bg-mobile-hidden="" class="wpb_row row-fluid row standard_section">
                                                    <div class="row-bg-wrap">
                                                        <div class="row-bg"></div>
                                                    </div>
                                                    <div class="col span_12 left">
                                                        <div class="col-sm-2 wpb_column column_container column_container col no-extra-padding instance-2" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8 wpb_column column_container column_container col no-extra-padding instance-3" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">
																	
																	
																	<div class="divider-wrap">
																		<div style="height: 40px;" class="divider"></div>
																	</div>
																	<div class="wpb_text_column">
																		<div class="wpb_wrapper">
																		<blockquote>
																		<div class="wpb_text_column">
																		<div class="wpb_wrapper">
																			<h4 style="text-align: center;"><span style="color: #fff;">
																			Bald könnt ihr bei uns schnell & einfach im Webshop und der APP</span></h4>
																			<h4 style="text-align: center;"><span style="color: #fff;">bestellen und von vielen Vorteilen profitieren!</span></h4>
																		</div>
																		</div>
																		</blockquote>

																		</div>
																	</div>

																</div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-2 wpb_column column_container column_container col no-extra-padding instance-4" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div id="kontakt" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row row-fluid row full-width-content standard_section" style="padding-top: 40px; padding-bottom: 40px; visibility: visible;">
								<div class="row-bg-wrap instance-5">
									<div class="row-bg using-image   no-cover" style="background-image: url(<?= $this->Url->build('/home',true) ?>/img/bg_beige_1v2-heller.jpg); background-position: left top; background-repeat: repeat; " data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
								</div>
								<div class="col span_12 dark left">
									<div class="col-sm-12 wpb_column column_container column_container col padding-5-percent instance-10" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
										<div class="column-inner">
											<div class="wpb_wrapper">

												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h1 style="text-align: center; font-size: 3.5em; line-height: 60px;">
<?php if(!empty($SettingContact->title)){echo $SettingContact->title; } ?>
                                                    </h1>

													</div>
												</div>
												<div class="divider-wrap">
													<div style="height: 60px;" class="divider"></div>
												</div>
												<div id="fws_5d377c2598707" data-midnight="" data-bg-mobile-hidden="" class="wpb_row row-fluid row  row-o-equal-height row-flex  row-o-content-middle standard_section   " style="padding-top: 0px; padding-bottom: 0px; ">
													<div class="row-bg-wrap">
														<div class="row-bg   " style=""></div>
													</div>
													<div class="col span_12  left">
					<?php if(!empty($SettingContact->map)){ ?>
														<div class="col-sm-9 wpb_column column_container column_container col padding-2-percent instance-11" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0" style="padding-top: 28.625px; padding-bottom: 28.625px;">
															<div class="column-inner">
																<div class="wpb_wrapper">

																	<div class="wpb_text_column wpb_content_element ">
																		<div class="wpb_wrapper">

																			<p>

<iframe style="border: 0px; width: 100%; height: 300px; opacity: 1; visibility: visible;" src="https://www.google.com/maps/embed?pb=<?php if(!empty($SettingContact->map)){echo $SettingContact->map; } ?>" width="800" height="600" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

																			</p>

																		</div>
																	</div>

																</div>
															</div>
														</div>
<?php }else{ ?>
<div class="col-sm-6 wpb_column column_container column_container col no-extra-padding instance-12" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-inner" style="justify-content: normal;">
																<div class="wpb_wrapper">
																	<div class="divider-wrap">
																		<div style="height: 20px;" class="divider"></div>
																	</div>
																	<div class="wpb_text_column wpb_content_element  custom_1487170704250">
<div class="wpb_wrapper">
	<p style="font-family: Oswald;font-size: 17px!important;"><i class="icon-tiny fa fa-map-marker accent-color"></i> 
    Brauquartier 7,
		<br>8055 Graz, Österreich</p>
	<p><a href="tel:0316244913"><i class="icon-tiny fa fa-phone accent-color"></i>0316/244913</a>
</p>

</div>
																	</div>
																	<div class="divider-wrap">
																		<div style="height: 20px;" class="divider"></div>
																	</div>
																</div>
															</div>
														</div>
<?php } ?>
														<div class="col-sm-<?php if(!empty($SettingContact->map)){echo 3;}else{echo 6;} ?> wpb_column column_container column_container col no-extra-padding instance-12" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
															<div class="column-inner">
																<div class="wpb_wrapper">
																	<div class="divider-wrap">
																		<div style="height: 20px;" class="divider"></div>
																	</div>
																	<div class="wpb_text_column wpb_content_element  custom_1487170704250">
<div class="wpb_wrapper">
	<h3><?php if(!empty($SettingBusiness->address_line_3)){echo $SettingBusiness->address_line_3; } ?></h3>
	<h2><?php if(!empty($SettingBusiness->name)){echo $SettingBusiness->name; } ?></h2>
	<p style="font-family: Oswald;font-size: 17px!important;"><i class="icon-tiny fa fa-map-marker accent-color"></i> 
    <?php if(!empty($SettingContact->address)){echo $SettingContact->address; } ?>
		<br>
		<!-- <?php if(!empty($SettingBusiness->address_line_2)){echo $SettingBusiness->address_line_2; } ?> <?php if(!empty($SettingBusiness->address_line_3)){echo $SettingBusiness->address_line_3; } ?> -->
	</p>
        <?php 
        $tel='';
        if(!empty($SettingContact->contact)){
            $tel=str_replace('–','',str_replace(' ','',$SettingContact->contact)); 
            $tel=str_replace('/','',str_replace(' ','',$tel)); 
        } ?>
      <p style="font-family: Oswald;font-size: 17px!important;">
      	Bei Anfahrt mit dem Auto stehen einige Gratis-Außenparkplätze zur Verfügung. Zusätzlich kann 30 min. gratis und eine weitere Stunde um 1,00 € in der Brauquartier Tiefgarage direkt neben dem Eingang zum PiPaPo geparkt werden.<br>
Anfahrt mit öffentlichen Verkehrsmitteln:<br><br>
<a href="https://www.holding-graz.at/graz-linien/fahrplaene/bim/linie-5.html">Straßenbahn Linie 5 Haltestelle Brauquartier</a><br>
<a href="https://www.oebb.at/de/dam/jcr:a938b175-64d3-4fd0-8e08-2296a94c5276/kif502.pdf">S-Bahn ÖBB Bahnhof Graz Puntigam</a>
      </p>
	<p><a href="tel:<?= $tel ?>"><i class="icon-tiny fa fa-phone accent-color"></i><?php if(!empty($SettingContact->contact)){echo $SettingContact->contact; } ?></a>
		<br>
		<a href="mailto:<?php if(!empty($SettingBusiness->email)){echo $SettingBusiness->email; } ?>"><i class="icon-tiny fa fa-envelope accent-color"></i> <?php if(!empty($SettingBusiness->email)){echo $SettingBusiness->email; } ?></a></p>

</div>
																	</div>
																	<div class="divider-wrap">
																		<div style="height: 20px;" class="divider"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

                        </div>
                        <!--/row-->

                    </div>
                    <!--/container-->

                </div>
                <!--/container-wrap-->
				