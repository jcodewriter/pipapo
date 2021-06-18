

<div id="footer-outer" data-midnight="light" data-full-width="false" data-using-widget-area="false">

                    <div class="row" id="copyright">

                        <div class="container">

                            <div class="col span_6">

                                <p>© <?= date('Y') ?> <?= $SettingBusiness->name ?>. | <a href="<?= $this->Url->build('/impressum',true) ?>">Impressum</a> | <a href="<?= $this->Url->build('/datenschutz',true) ?>">Datenschutz</a> </p>

                            </div>
                            <!--/span_5-->

                            <div class="col span_6 col_last">
                                <ul id="social">
                                    <li><a target="_blank" href="<?= $SettingSocial->facebook ?>"><i class="fa fa-facebook"></i> </a></li>
                                    <li><a target="_blank" href="<?= $SettingSocial->instagram ?>"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!--/span_7-->

                        </div>
                        <!--/container-->

                    </div>
                    <!--/row-->

                </div>
                
                <!--/footer-outer-->

            </div>
            <!--/ajax-content-wrap-->

            <a id="to-top" class="" style="bottom: -30px;"><i class="fa fa-angle-up"></i></a>

            <script type='text/javascript' src="<?= $this->Url->build('/home',true) ?>/js/jquery.js"></script>
            <script type='text/javascript' src="<?= $this->Url->build('/home',true) ?>/js/jquery-migrate.min.js"></script>
            <script type='text/javascript' src="<?= $this->Url->build('/home',true) ?>/js/modernizr.js"></script>

            <script src="<?= $this->Url->build('/home',true) ?>/js/popper.min.js"></script>
            <script type="text/javascript">
                /* <![CDATA[ */
                var ctcc_vars = {
                  "expiry": "30",
                  "method": "1",
                  "version": "1"
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/uk-cookie-consent-js.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/prettyPhoto.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/isotope.min.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/superfish.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/bootstrap.min.js"></script>
            <script type="text/javascript">
                /* <![CDATA[ */
                var nectarLove = {
                  "ajaxurl": "https:\/\/pipapo.at\/wp-admin\/admin-ajax.php",
                  "postID": "12",
                  "rooturl": "https:\/\/pipapo.at",
                  "pluginPages": [],
                  "disqusComments": "false",
                  "loveNonce": "51f09e4ccd",
                  "mapApiKey": ""
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/init.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/tweenmax.min.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/nectar-slider.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/wp-embed.min.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/js_composer_front.min.js"></script>
            <script type="text/javascript">
                /* <![CDATA[ */
                //var mejsL10n = {"language":"de-DE","strings":{"Close":"Schlie\u00dfen","Fullscreen":"Vollbild","Turn off Fullscreen":"Vollbild beenden","Go Fullscreen":"Vollbild einschalten","Download File":"Datei herunterladen","Download Video":"Video herunterladen","Play":"Abspielen","Pause":"Pause","Captions\/Subtitles":"Beschriftungen\/Untertitel","None":"Keine","Time Slider":"Zeit-Schieberegler","Skip back %1 seconds":"%1 Sekunde(n) zur\u00fcck springen","Video Player":"Video-Player","Audio Player":"Audio-Player","Volume Slider":"Lautst\u00e4rkeregler","Mute Toggle":"Stumm schalten","Unmute":"Laut schalten","Mute":"Stumm","Use Up\/Down Arrow keys to increase or decrease volume.":"Pfeiltasten Hoch\/Runter benutzen, um die Lautst\u00e4rke zu regeln.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Benutze die Pfeiltasten Links\/Rechts, um 1 Sekunde vorzuspringen, und die Pfeiltasten Hoch\/Runter, um 10 Sekunden vorzuspringen."}};
                //var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/"};
                /* ]]> */
            </script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/mediaelement-and-player.min.js"></script>
            <script type="text/javascript" src="<?= $this->Url->build('/home',true) ?>/js/wp-mediaelement.min.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    if (!catapultReadCookie("catAccCookies")) { // If the cookie has not been set then show the bar
                        $("html").addClass("has-cookie-bar");
                        $("html").addClass("cookie-bar-bottom-bar");
                        $("html").addClass("cookie-bar-bar");
                    }
                });
            </script>

            <div id="catapult-cookie-bar" class="" style="display: none;">
                <div class="ctcc-inner "><span class="ctcc-left-side">Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können. <a class="ctcc-more-info-link" tabindex="0" target="_blank" href="https://pipapo.at/datenschutz/">Mehr erfahren.</a></span><span class="ctcc-right-side"><button id="catapultCookie" tabindex="0" onclick="catapultAcceptCookies();">Ok, danke!</button></span></div>
                <!-- custom wrapper class -->
            </div>
            <!-- #catapult-cookie-bar -->
        </body>
</html>