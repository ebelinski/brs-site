

<!-- JS Global -->

<!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="assets/plugins/modernizr.custom.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/placeholdem.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>

<!-- JS Page Level -->
<script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<!-- Commenting out due to using a different contact form <script src="assets/js/theme-ajax-mail.js"></script> -->
<script src="assets/js/theme.js"></script>
<script src="assets/js/custom.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<!--<script src="assets/js/theme-config.js"></script> -->                   <!--THEME CONFIGURATION TOGGLE HERe-->
<!--<![endif]-->

<script id="event-template" type="text/x-handlebars-template">
    <article class="post-wrap">
        <div class="media">
            <!-- -->
            <div class="post-media pull-left">
                <img src="{{eventImageUrl}}" alt="" class="media-object" />
            </div>
            <!-- -->
            <div class="media-body">
                <div class="post-header">
                    <div class="post-meta">
                        <span class="post-date"><i class="fa fa-clock-o"></i> {{date}} &mdash; <strong>{{time}}</strong></span>
                        <a href="{{registrationUrl}}" target="_blank" class="pull-right">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                <i class="fa fa-stack-1x fa-calendar"></i>
                            </span>
                        </a>
                    </div>
                    <h2 class="post-title"><a href="{{registrationUrl}}" target="_blank">
                        {{eventName}}
                        {{#if locationName}}
                            (at {{locationName}})
                        {{/if}}
                    </a></h2>
                </div>
                <div class="post-body">
                    <div class="post-excerpt">
                        <p class="caption-text">
                                {{description}}<br>
                                <a id="register-button" class="btn btn-theme btn-theme-xl scroll-to" href="{{registrationUrl}}" target="_new" data-animation="flipInY" data-animation-delay="600"> Register <i class="fa fa-arrow-circle-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="post-footer">
                    <span class="post-readmore">
                        <ul>
                            <li><i class="fa fa-microphone"></i> <strong>Live Music</strong> / <a href="{{liveMusicUrl}}">{{liveMusicName}}</a></li>
                            <li><i class="fa fa-truck"></i> <strong>Food Truck</strong> / <a href="{{foodTruckUrl}}">{{foodTruckName}}</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            <!-- -->
        </div>
    </article>
</script>

<script src="assets/js/handlebars-v3.0.3.js"></script>
<script src="assets/js/events.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initMainSlider();
        theme.initPartnerSlider();
        theme.initTestimonials();
    });
    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
    jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
    jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

    jQuery(document).ready(function () { theme.onResize(); });
    jQuery(window).load(function(){ theme.onResize(); });
    jQuery(window).resize(function(){ theme.onResize(); });

    jQuery(window).load(function() {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if (hash.length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });

</script>

</body>
</html>
