    <body>

        <body class="home page-template-default page page-id-12 ascend wpb-js-composer js-comp-ver-4.12.1 responsive" data-footer-reveal="false" data-header-format="default" data-footer-reveal-shadow="none" data-dropdown-style="classic" data-cae="easeOutCubic" data-cad="650" data-aie="none" data-ls="pretty_photo" data-apte="standard" data-hhun="0" data-fancy-form-rcs="default" data-form-style="default" data-form-submit="default" data-is="minimal" data-button-style="default" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="true" data-full-width-header="false" data-slide-out-widget-area="false" data-slide-out-widget-area-style="fullscreen" data-user-set-ocm="off" data-loading-animation="none" data-bg-header="true" data-ext-responsive="true" data-header-resize="1" data-header-color="custom" data-transparent-header="false" data-smooth-scrolling="0" data-permanent-transparent="false" data-responsive="1">

            <div id="header-secondary-outer" data-full-width="false" data-permanent-transparent="false">
                <div class="container">
                    <nav>
                        <ul id="social">
                            <?php if(!empty($SettingSocial->facebook)){ ?>
                            <li><a target="_blank" href="<?= $SettingSocial->facebook ?>"><i class="fa fa-facebook"></i> </a></li>
                        <?php } ?>
                        <?php if(!empty($SettingSocial->instagram)){ ?>
                            <li><a target="_blank" href="<?= $SettingSocial->instagram ?>"><i class="fa fa-instagram"></i> </a></li>
                        <?php } ?>
                        </ul>
                        <ul class="sf-menu sf-js-enabled sf-arrows">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-451"><a href="#about">
                                <?php if(!empty($SettingBusiness->start_d)){echo substr($SettingBusiness->start_d,0,2); } ?> – <?php if(!empty($SettingBusiness->end_d)){echo substr($SettingBusiness->end_d,0,2); } ?> <?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->open_hour; } ?></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-305">
                                <!-- <a href="#kontakt"><?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->address_line_3; } ?> | <?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->address_line_2; } ?> | <?php if(!empty($SettingBusiness->start_d)){echo $SettingBusiness->address_line_1; } ?></a> -->
                                <a href="#kontakt"><?php if(!empty($SettingBusiness->start_d)){echo $SettingContact->address; } ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="header-space" data-header-mobile-fixed="false"></div>

            <div id="header-outer" data-has-menu="true" data-mobile-fixed="false" data-ptnm="false" data-lhe="default" data-user-set-bg="#ffffff" data-format="default" data-permanent-transparent="false" data-cart="false" data-transparency-option="0" data-shrink-num="20" data-full-width="false" data-using-secondary="1" data-using-logo="1" data-logo-height="70" data-m-logo-height="50" data-padding="28" data-header-resize="1">
                <header id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col span_3">
                                <a id="logo" href="<?= $this->Url->build('/',true) ?>">
                                    <img class="stnd default-logo dark-version" alt="PiPaPo Marktrestaurant" src="<?= $this->Url->build('/home',true) ?>/img/pipapo-logo.png">
                                    <img class="retina-logo dark-version" alt="PiPaPo Marktrestaurant" src="<?= $this->Url->build('/home',true) ?>/img/pipapo-logo-hd.png">
                                </a>
                            </div>
                            <!--/span_3-->
                            <div class="col span_9 col_last">
                                <div class="slide-out-widget-area-toggle mobile-icon std-menu fullscreen" data-icon-animation="simple-transform">
                                    <div>
                                        <a id="toggle-nav" href="#sidewidgetarea" class="closed"> <span> <i class="lines-button x2"> <i class="lines"></i> </i> </span> </a>
                                    </div>
                                </div>
                                <nav>
                                    <ul class="sf-menu sf-js-enabled sf-arrows">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item"><a href="<?= $this->Url->build('/',true)?>#home">Home</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $this->Url->build('/',true)?>#about">About</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $this->Url->build('/',true)?>#menu">Menü</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $this->Url->build('/',true)?>#gallery">Gallery</a></li>
                                         <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $this->Url->build('/',true)?>#appshop">App & Shop</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $this->Url->build('/',true)?>#kontakt">Anfahrt &amp; Kontakt</a></li>
                                    </ul>
 
                                </nav>

                            </div>
                            <!--/span_9-->

                        </div>
                        <!--/row-->

                    </div>
                    <!--/container-->

                </header>

            </div>
            <!--/header-outer-->

            <div id="mobile-menu" data-mobile-fixed="false" style="display: none;">

                <div class="container">
                    <ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-313"><a href="#home">Home</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-314"><a href="#about">About</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-315"><a href="#menu">Menü</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-316"><a href="#gallery">Gallery</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-317"><a href="#kontakt">Anfahrt &amp; Kontakt</a></li>
                        <li id="mobile-search">
                            <form action="https://pipapo.at" method="GET">
                                <input type="text" name="s" value="" placeholder="Search..">
                            </form>
                        </li>
                    </ul>
                </div>

            </div>

            <div id="ajax-loading-screen" data-disable-fade-on-click="0" data-effect="standard" data-method="standard" class="loaded hidden">

                <div class="loading-icon none">
                    <span class="default-loading-icon spin"></span>
                </div>
            </div>