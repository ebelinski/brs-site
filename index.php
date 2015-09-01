<?

include("contact.php");

include("header.php");

?>
    <!-- Content area -->
    <div class="content-area">


        <div id="main">
        <!-- SLIDER -->
        <section class="page-section no-padding background-img-slider">
            <div class="container">

            <div id="main-slider" class="owl-carousel owl-theme">

                <!-- Slide -->
                <div class="item page text-center slide0">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell padding-fix">
                                    <h2 class="caption-title" data-animation="fadeInDown" data-animation-delay="100"><span>Countdown to our Next Event!</span></h2>
                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300"><a href="#past-events-container-active" class="scroll-to" id="name-of-next-event"></a></h3>
                                    <div class="countdown-wrapper">
                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                    </div>
                                    <p class="caption-text">
                                        <a class="btn btn-theme btn-theme-xl scroll-to" id="registration-link-of-next-event" target="_new" data-animation="flipInY" data-animation-delay="600"> Register <i class="fa fa-arrow-circle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>

            <!-- Event description small banner -->
            <div class="event-description">
                <div class="container">
                <div class="row">
                <div class="event-background">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 social-btn">
                                <div class="media">
                                    <span class="pull-left">
                                        <a href="https://twitter.com/MNBreweryRun" target="_blank" class="social-line twitter"><i class="fa fa-twitter"></i></a></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 social-btn">
                                <div class="media">
                                    <span class="pull-left">
                                        <a href="https://www.facebook.com/MNBreweryRunningSeries?ref=hl" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 social-btn">
                                <div class="media">
                                    <span class="pull-left">
                                        <a href="http://instagram.com/mnbreweryrun/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 social-btn">
                                <div class="media">
                                    <span class="pull-left">
                                        <a href="https://www.pinterest.com/brewrunseries/" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <!-- /Event description -->

        </section>
        <!-- /SLIDER -->
        </div>
        <!-- PAGE SCHEDULE -->
        <section class="page-section light" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-left">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-calendar-o fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">2015 Brew Run Schedule <small>/ save that date.</small></span>
                        </h1>
                        <p>&ast;Event dates and times are subject to change.</p>
                    </div>
                    <div class="col-md-4 text-right-md pull-right">
                        <a href="assets/files/schedule-2015.pdf" target="_blank" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"
                           data-animation="flipInY" data-animation-delay="300"><i class="fa fa-plus-square"></i> See all events!</a>
                    </div>
                </div>

                <!-- Schedule -->
                <div class="schedule-wrapper clear" data-animation="fadeIn" data-animation-delay="200">
                    <div class="schedule-tabs lv1">
                        <ul id="tabs-lv1"  class="nav nav-justified">
                            <li><a href="#tab-first" data-toggle="tab"><strong>Spring<br><i class="fa fa-bug"></i></strong></a></li>
                            <li><a href="#tab-second" data-toggle="tab"><strong>Summer<br><i class="fa fa-sun-o"></i></strong></a></li>
                            <li class="active"><a href="#tab-third" data-toggle="tab"><strong>Fall<br><i class="fa fa-leaf"></i></strong></a></li>
                            <li><a href="#tab-last" data-toggle="tab"><strong>Winter<br><i class="fa fa-tree"></i></strong></a></li>
                        </ul>
                    </div>
                    <div class="tab-content lv1 tab-content-limited" id="schedule-content">
                        <!-- tab1 -->
                        <div id="tab-first" class="tab-pane fade">
                            <div class="tab-content lv2">
                                <div id="tab-lv21-first" class="tab-pane fade in active">
                                    <div class="timeline spring">

                                        <div class="past-events-container">
                                            <a class="btn btn-theme btn-theme-lg scroll-to toggle-past-events" href="#" data-animation="flipInY" data-animation-delay="600">Show Past Events</a>
                                            <div class="past-events">
                                            </div>
                                        </div>

                                        <div class="upcoming-events"></div>

                                        <div class="next-page-button">
                                            <a href="#tab-second" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="600">Next Page: Summer Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab2 -->
                        <div id="tab-second" class="tab-pane fade">
                            <div class="tab-content lv2">
                                <div id="tab-lv22-first" class="tab-pane fade in active">
                                    <div class="timeline summer">

                                        <div class="past-events-container" id="past-events-container-active">
                                            <a class="btn btn-theme btn-theme-lg scroll-to toggle-past-events" href="#" data-animation="flipInY" data-animation-delay="600">Show Past Events</a>
                                            <div class="past-events">
                                            </div>
                                        </div>

                                        <div class="upcoming-events"></div>

                                        <div class="next-page-button">
                                            <a href="#tab-third" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="600">Next Page: Fall Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab3 -->
                        <div id="tab-third" class="tab-pane fade in active">
                            <div class="tab-content lv2">
                                <div id="tab-lv23-first" class="tab-pane fade in active">
                                    <div class="timeline fall">

                                        <div class="past-events-container">
                                            <a class="btn btn-theme btn-theme-lg scroll-to toggle-past-events" href="#" data-animation="flipInY" data-animation-delay="600">Show Past Events</a>
                                            <div class="past-events">
                                            </div>
                                        </div>

                                        <div class="upcoming-events"></div>

                                        <div class="next-page-button">
                                            <a href="#tab-last" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="600">Next Page: Winter Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab4 -->
                        <div id="tab-last" class="tab-pane fade">
                            <div class="tab-content lv2">
                                <div id="tab-lv24-first" class="tab-pane fade in active">
                                    <div class="timeline winter">

                                        <div class="past-events-container">
                                            <a class="btn btn-theme btn-theme-lg scroll-to toggle-past-events" href="#" data-animation="flipInY" data-animation-delay="600">Show Past Events</a>
                                            <div class="past-events">
                                            </div>
                                        </div>

                                        <div class="upcoming-events"></div>

                                        <div class="next-page-button">
                                            <a href="#tab-first" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="600">Next Page: Spring Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-toggle-expand-events">
                        <a class="btn btn-theme btn-theme-lg scroll-to" id="toggle-expand-events" href="#" data-animation="flipInY" data-animation-delay="600">Show More</a>
                    </div>
                </div>
            </div>
            <!-- /Schedule -->
        </section>
        <!-- /PAGE SCHEDULE -->

        <!-- PAGE ABOUT -->
        <section class="page-section" id="about">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">What is the Brewery Running Series?<small>/ running. beer. fun.</small></span>
                </h1>
                <div class="row">
                    <div class="col-md-8">
                        <p data-animation="fadeInUp" data-animation-delay="300">Co-founders Nate Herrington and Morgan Jappe joined forces to start a series of events combining their favorite things – being active, drinking beer, and supporting their community. Turns out, a few thousand other MN locals share those same interests! Since their inaugural event at Fulton Brewery in 2012, the structure remains the same. Participants walk / jog / run a 5k course and then drink beer.  It’s that simple! Everyone is invited to enjoy the day’s entertainment: live music, food trucks, giveaways and activities with partners and sponsors, and all finishers get a FREE craft brew and collectors pint glass or seasonal swag item. Icing on the cake? A portion of all proceeds goes to benefit local non-profits. Nate and Morgan are thrilled to partner with even more great craft breweries this year and expand the series throughout the state. </p>
                        <p class="btn-row">
                            <a href="#contact" target="_blank" class="btn btn-theme btn-theme-xl scroll-to newsletter" data-animation="flipInY" data-animation-delay="200">Join Newsletter<i class="fa fa-arrow-circle-right"></i></a>
                            <a href="https://www.youtube.com/watch?v=2n1Z5TvL_Ig&list=UUZbkZQqKd75ubjtj_SW6cnA&index=2" target="_blank" class="btn btn-theme btn-theme-xl btn-theme-transparent" data-animation="flipInY" data-animation-delay="400">Watch video</a>
                        </p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
                        <!-- Embedded video
                        <div class="youtube-border">
                        <iframe width="553" height="325" src="https://www.youtube.com/embed/2n1Z5TvL_Ig?list=UUZbkZQqKd75ubjtj_SW6cnA" frameborder="0" allowfullscreen></iframe>
                        </div> -->

                    </div>
                    <!--Twitter-->
                    <div class="col-md-4">
                        <a class="twitter-timeline" href="https://twitter.com/MNBreweryRun" data-widget-id="568909109114580992">Tweets by @MNBreweryRun</a>
                    </div>
                    <!--/Twitter-->
                </div>
                <!--thumbnails-->
                <div class="row thumbnails">

                    <div class="col-sm-3 col-xs-6">
                        <div class="thumbnail no-border no-padding" data-animation="fadeInLeft" data-animation-delay="100">
                            <div class="media">
                                <img src="assets/img/bauhaus-group.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <p class="caption-buttons"><a href="assets/img/bauhaus-group.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <div class="thumbnail no-border no-padding" data-animation="fadeInDown" data-animation-delay="200">
                            <div class="media">
                                <img src="assets/img/nate-surly.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <p class="caption-buttons"><a href="assets/img/nate-surly.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <div class="thumbnail no-border no-padding" data-animation="fadeInRight" data-animation-delay="300">
                            <div class="media">
                                <img src="assets/img/summit-bw.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <p class="caption-buttons"><a href="assets/img/summit-bw.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <div class="thumbnail no-border no-padding" data-animation="fadeInUp" data-animation-delay="400">
                            <div class="media">
                                <img src="assets/img/runmain.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <p class="caption-buttons"><a href="assets/img/runmain.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/thumbnails-->
            </div>
        </section>
        <!-- /PAGE ABOUT -->

        <!-- Donation -->
        <section class="page-section color" id="donation">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-fire fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Give Back<small> / support the community you love.</small></span>
                </h1>
                <p>We love giving back to our local community and partnering with great organizations. A portion of all proceeds go to benefit these MN non-profits:</p>

                <!-- Make a donation now
                https://developer.paypal.com/webapps/developer/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/
                -->

                <div class="sponsor-wrap first">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <img src="assets/img/ppl4parks.png" alt="">
                        </div>
                    </div>
                    <div class="caption before-media text-center donate">
                        <h3><strong>People for Parks</strong></h3>
                        <p> works to maintain and improve a central part of our events - the local parks!</p>
                        <form action="http://www.peopleforparks.net/" method="link" target="_blank">
                            <button name="submit" class="btn btn-theme">Learn more!</button>
                        </form>
                    </div>
                </div>

                <div class="sponsor-wrap second">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <img src="assets/img/brewabetterforest.png" alt="">
                        </div>
                    </div>
                    <div class="caption before-media text-center donate">
                        <h3><strong>Brewing A Better Forest</strong></h3>
                        <p>  is on a mission to create a better urban forest by blending a passion for trees with a passion for excellent craft beer. </p>
                        <form action="http://www.brewingabetterforest.com/" method="link" target="_blank">
                            <button name="submit" class="btn btn-theme">Learn more!</button>
                        </form>
                    </div>
                </div>

                <div class="sponsor-wrap third">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <img src="assets/img/bolder-options.png" alt="">
                        </div>
                    </div>
                    <div class="caption before-media text-center">
                        <div class="caption before-media text-center donate">
                            <h3><strong>Bolder Options</strong></h3>
                            <p> is focused on healthy development for Minnesota's at-risk youth. </p>
                            <form action="http://bolderoptions.org/" method="link" target="_blank">
                                <button name="submit" class="btn btn-theme">Learn more!</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /Donation -->

        <!-- PAGE SPONSORS -->
        <section class="page-section" id="sponsors">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Partners &amp; Sponsors <small> / the best around.</small></span>
                </h1>

                <div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">



                    <div class="owl-carousel">
                        <div class="item"><a href="www.brewride.com" target="_blank"><img src="assets/img/sponsor-logos/brew-ride.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://dunnbros.com/" target="_blank"><img src="assets/img/sponsor-logos/dunn-bros.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://www.fitsok.com/" target="_blank"><img src="assets/img/sponsor-logos/fitsok-black.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://www.fivefriendsfood.com/" target="_blank"><img src="assets/img/sponsor-logos/five-friends-foods.jpg" alt=""/></a></div>
                        <div class="item"><a href="https://getknitevents.com/" target="_blank"><img src="assets/img/sponsor-logos/get-knit-events.jpg" alt=""/></a></div>
                        <div class="item"><a href="www.growlerlove.com" target="_blank"><img src="assets/img/sponsor-logos/growler-love.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://www.millcityrunning.com/" target="_blank"><img src="assets/img/sponsor-logos/mill-city-running.jpg" alt=""/></a></div>
                        <div class="item"><a href="www.minneapolisrunning.com" target="_blank"><img src="assets/img/sponsor-logos/run-msp-logo.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://www.runningroom.com/hm/" target="_blank"><img src="assets/img/sponsor-logos/running-room.jpg" alt=""/></a></div>
                        <div class="item"><a href="www.sevensundays.com" target="_blank"><img src="assets/img/sponsor-logos/seven-sundays.jpg" alt=""/></a></div>
                        <div class="item"><a href="http://www.shamelessinc.com/" target="_blank"><img src="assets/img/sponsor-logos/shameless-ink.jpg" alt=""/></a></div>
                        <div class="item"><a href="https://www.uber.com/" target="_blank"><img src="assets/img/sponsor-logos/uber.png" alt=""/></a></div>
                        <div class="item"><a href="http://gowaybetter.com/" target="_blank"><img src="assets/img/sponsor-logos/way-better-snacks.jpg" alt=""/></a></div>
                        <div class="item"><a href="www.kindsnacks.com/" target="_blank"><img src="assets/img/sponsor-logos/kind-bar.png" alt=""/></a></div>
                        <div class="item"><a href="www.tomtom.com/en_us/" target="_blank"><img src="assets/img/sponsor-logos/tomtom.jpg" alt=""/></a></div>
                        <div class="item"><a href="www.viverant.com" target="_blank"><img src="assets/img/sponsor-logos/viverant.jpg" alt=""/></a><div>
                    </div>
                </div>
                </div>
                <div class="text-center margin-top">
                    <a data-animation="flipInY" data-animation-delay="500" href="#contact" class="scroll-to btn btn-theme"><i class="fa fa-thumbs-up"></i> Become a partner</a>
                </div>
            </div>
        </section>
        <!-- /PAGE SPONSORS -->

        <section class="page-section color">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-comments fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Testimonials <small> / don't just take our word for it.</small></span>
                </h1>

                <!-- Testimonials -->
                <div id="testimonials" class="owl-carousel testimonials" data-animation="fadeInUp" data-animation-delay="100">

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/bauhaus-purple-duo.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;My husband and I LOVE the MN Brewery Running Series!!&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/fulton-jump.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;This was my third MN brewery series run and would definitely do it again. The staff are enthusiastic, the shirts are awesome, and the beer was an added bonus!&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/stretch-grey.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;Very fun energetic people putting the race on. It was my first of the series and I will do another! Please have more deals for them!&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/northgate-jump.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;We were greeted right away, the bar was open and friendly and expecting the traffic. They held onto the glasses as promised until we were ready to leave. Great group of outdoor running people, nice! Well laid out with people marking turns. Loved it.&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/mill-city.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;Staff in restaurant and the volunteers were so kind! I had such a great time! Love my glass! Loved that you had a small sheet of paper with the route on it! Thank you:)&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <img class="img-circle img-responsive" src="assets/img/preview/surly-green.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>&ldquo;Loved it! Beautiful venue, grat beer, fun music and helpful, CHEERFUL volunteers. Thank you and we will do another! Wearing my shirt today!&rdquo;</p>
                            <!--<h4 class="media-heading">On 2014 Freehouse Run</h4>-->
                        </div>
                    </div>

                </div>
                <!-- Testimonials -->

            </div>
        </section>

        <section class="page-section" id="merchandise">
            <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-tag fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner">Merchandise<small> / get all of your series swag here.</small></span>
                    </h1>
            </div>
                <!-- Merch row -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <!--item 1-->
                <div class="item active">
                  <div class="paypalmerch">
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <h3>Official Tee - $20</h3>
                            <p>Every day is a good day to rock a Brew Run Tee!</p>
                        <img src="assets/img/tee-front.jpg" alt="">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="RJUYHLKXXJLRJ">
                            <table width="100%" style="float: left">
                                <tr>
                                <td><input type="hidden" name="on0" value="Tshirt Size">Tshirt Size</td>
                                </tr>
                                <tr>
                                <td><select name="os0">
                                    <option value="Mens S">Mens S $20.00 USD</option>
                                    <option value="Mens M">Mens M $20.00 USD</option>
                                    <option value="Mens L">Mens L $20.00 USD</option>
                                    <option value="Mens XL">Mens XL $20.00 USD</option>
                                    <option value="Women S">Women S $20.00 USD</option>
                                    <option value="Women M">Women M $20.00 USD</option>
                                    <option value="Women L">Women L $20.00 USD</option>
                                    <option value="Women XL">Women XL $20.00 USD</option>
                                </select></td>
                                </tr>
                                <tr>
                                <td><input type="hidden" name="on1" value="Color">Color</td>
                                </tr>
                                <tr>
                                <td><select name="os1">
                                    <option value="Grey">Grey </option>
                                    <option value="Blue">Blue </option>
                                </select></td>
                                </tr>
                            </table>
                        <input type="hidden" name="currency_code" value="USD">
                        <input id="button" type="image" style="display: block; margin: 0 auto" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                  </div>
                </div>

                <!--item 2-->
                <div class="item">
                  <div class="paypalmerch">
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <h3>Trucker Hat - $10</h3>
                            <p>Because everything is more fun with a trucker hat on!</p>
                        <img src="assets/img/trucker-hat.jpg" alt="">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="ANYTJFLWJ35T2">
                        <table width="100%" style="float: left"></table>
                        <input id="button" type="image" style="display: block; margin: 0 auto" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                  </div>
                </div>

                <!--item 3-->
                <div class="item">
                  <div class="paypalmerch">
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <h3>Brew Run Coozie - $5</h3>
                            <p>Add some style to your favorite brew with a Brew Run Coozie!</p>
                        <img src="assets/img/coozie.png" alt="">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="YNYSN5EGBT4TS">
                        <table width="100%" style="float: left"></table>
                        <input type="hidden" name="currency_code" value="USD">
                        <input id="button" type="image" style="display: block; margin: 0 auto" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                  </div>
                </div>

                <!--item 4-->
                <div class="item">
                  <div class="paypalmerch">
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <h3>Bottle Opener - $5</h3>
                            <p>Some use a lighter, some use their teeth, for everyone else &ndash; we've got you covered!</p>
                        <img src="assets/img/bottle-opener.jpg" alt="...">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="NZ4DTE7JK9SYQ">
                        <input id="button" type="image" style="display: block; margin: 0 auto" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                  </div>
                </div>

              </div>



              <!--item 4
              <div class="item">
                  <div class="paypalmerch">
                      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <h3>Trucker Hat - $10</h3>
                            <p>Because everything is more fun with a trucker hat on!</p>
                        <img src="assets/img/trucker-hat.jpg" alt="">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="PNK8W59AR7B6G">
                        <table width="100%" style="float: left"></table>
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="image" style="display: block; margin: 0 auto" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                  </div>
                </div>
              </div>-->

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> <!-- Carousel -->
        </section>


        <!-- PAGE TEAM -->
        <section class="page-section light" id="team">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner">Our Team <small> / bringing the brewery running series to life.</small></span>
                </h1>

                <!-- Tean row -->
                <div class="row thumbnails clear">
                    <div class="col-sm-6 col-md-6" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <div class="media">
                                                    <img src="assets/img/headshot-m.JPG" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title">Morgan Jappe</h3>
                                <p class="caption-category">Co Founder &amp; CMO</p>
                            </div>
                            <div class="caption">
                                <p>Whether she's coordinating the start line or lining up at the bar, Morgan loves bringing the worlds of beer and running together! As Chief Marketing Officer and Happiness Ambassador, her #1 role is to make sure everyone has FUN.</p>
                                <p><a href="mailto:morgan@breweryrunningseries.com">morgan@breweryrunningseries.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <div class="col-sm-6 col-md-6" data-animation="fadeInUp" data-animation-delay="300">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <div class="media">
                                                    <img src="assets/img/headshot-nate.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title">Nate Herrington</h3>
                                <p class="caption-category">Co Founder &amp; CFO</p>
                            </div>
                            <div class="caption">
                                <p>Part runner and part beer lover, Nate serves as chief financial officer, chief awesome officer, and chief anything-that-needs-to-be-done officer to make the Series the BEST Series on earth!</p>
                                <p><a href="mailto:nate@breweryrunningseries.com">nate@breweryrunningseries.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <div class="media">
                                                    <img src="assets/img/headshot-seth.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title">Seth Johnson</h3>
                                <p class="caption-category">Event Manager &amp; CIO</p>
                            </div>
                            <div class="caption">
                                <p>More energy than he knows what to do with, Seth sprinted onto the team Fall of 2014 and is website and technology lead, as well as director for multiple events this season!</p>
                                <p><a href="mailto:seth@breweryrunningseries.com">seth@breweryrunningseries.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="500">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <div class="media">
                                                    <img src="assets/img/headshot-jack.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title">Jack Lunt</h3>
                                <p class="caption-category">Events &amp; Promotions Intern</p>
                            </div>
                            <div class="caption">
                                <p>Jack climbed aboard at the beginning of Summer 2015 as an events and promotions intern.  He is a novice runner that loves beer and skateboarding, and he plans to pursue these dreams for as long as possible.</p>
                                <p><a href="mailto:jack@breweryrunningseries.com">jack@breweryrunningseries.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="500">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <div class="media">
                                                    <img src="assets/img/headshot-mark.jpg" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title">Mark Portz</h3>
                                <p class="caption-category">Events &amp; Promotions Intern</p>
                            </div>
                            <div class="caption">
                                <p>Mark joined the party as a marketing intern in Summer of 2015. He enjoys promoting the series and connecting runners and beer-lovers around Minnesota. Even when he's not at a series event, you still might find him running or hanging out at a local taproom.</p>
                                <p><a href="mailto:jack@breweryrunningseries.com">mark@breweryrunningseries.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                </div>
                <!-- /Team row

                <div class="text-center margin-top">
                    <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme"><i class="fa fa-user"></i> See all speakers</a>
                </div> -->
            </div>
        </section>
        <!-- /PAGE TEAM -->

        <!-- PAGE LOCATION -->
        <section class="page-section" id="location">
            <div class="container full-width gmap-background">

                <div class="container">
                    <div class="on-gmap color">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Where we'll be next:</span>
                        </h1>
                        <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">
                            <strong><span id="name-of-next-location"></span></strong><br/>
                            <span id="address-of-next-location"></span>
                        </p>
                        <a id="google-maps-url-of-next-location" href="" target="_new" class="btn btn-theme"
                           data-animation="flipInY" data-animation-delay="300">Get Directions <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Google map -->
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- /Google map -->

            </div>
        </section>
        <!-- /PAGE LOCATION -->

        <!-- PAGE CONTACT, PRESS, TWITTER -->
        <section class="page-section color" id="contact">
            <div class="container">
                <!--Contact-->
                <div class="col-md-8 col-xs-12">
                    <div class="container-bottom">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Contact Us</span>
                        </h1>

                        <form name="af-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" enctype="multipart/form-data" class="af-form row" id="af-form">
                            <fieldset>
                                <?php if(isset($hasError)) { //If errors are found ?>
                                    <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                                <?php } ?>

                                <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                                    <div class="alert alert-success">
                                        <p><strong>Got it!</strong></p>
                                        <p>Thanks for your email, <strong><?php echo $name;?></strong>! It was sent successfully and we'll be in touch with you soon.</p>
                                    </div>
                                <?php } ?>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input
                                                type="text" name="contactname" id="contactname" placeholder="Name&hellip;" value="" size="30"
                                                data-toggle="tooltip" title="Name is required"
                                                class="form-control placeholder"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input
                                                type="text" name="email" id="email" placeholder="Email&hellip;" value="" size="30"
                                                data-toggle="tooltip" title="Email is required"
                                                class="form-control placeholder"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    I'd like to...
                                    <div class="form-group af-inner radio">
                                        <label><input type="radio" class="formbox" name="subject" value="Volunteer" />Volunteer</label>
                                        <label><input type="radio" class="formbox" name="subject" value="Partner" />Partner</label>
                                        <label><input type="radio" class="formbox" name="subject" value="Join Newsletter" />Join Newsletter</label>
                                        <label><input type="radio" class="formbox" name="subject" value="Other" />Other</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <textarea
                                                name="message" id="input-message" placeholder="Message&hellip;" rows="4" cols="50"
                                                data-toggle="tooltip" title="Message is required"
                                                class="form-control placeholder"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required text-center">
                                    <div class="form-group af-inner">
                                        <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Send Message" />
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!--Media and Press-->
                <div class="col-md-4 col-xs-12">
                    <div class="container-bottom">

                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-cloud-download fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Media &amp; Press</span>
                        </h1>
                        <div class="press-material">
                            <h3>
                                <a href="assets/files/schedule-2015.pdf" download><i class="fa fa-file-pdf-o"></i>2015 Event Schedule</a><br>
                                <a href="assets/img/weblogo-main.png" download><i class="fa fa-file-image-o"></i>Brewery Running Series Logo</a><br>
                                <a href="http://growlermag.com/mn-brewery-running-series-announces-2015-schedule/" target="_blank"><i class="fa fa-beer"></i>Growler Magazine Article</a><br>
                                <a href="http://www.startribune.com/minnesota-running-series-is-booming-by-offering-a-beer-chaser/309358251/" target="_blank"><i class="fa fa-beer"></i>Star Tribune Article</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <!--<div class="col-md-4 col-xs-12">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <img src="assets/img/sponsor-logos/brs-logo-sq.jpg" alt="">
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
        <!-- /PAGE CONTACT -->

    </div>
    <!-- /Content area -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">Follow us!</span>
                    <ul class="social-line list-inline">
                        <li data-animation="flipInY" data-animation-delay="100"><a href="https://twitter.com/MNBreweryRun" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <!--<li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                        <li data-animation="flipInY" data-animation-delay="300"><a href="https://www.facebook.com/MNBreweryRunningSeries?ref=hl" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <!--<li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>-->
                        <li data-animation="flipInY" data-animation-delay="500"><a href="http://instagram.com/mnbreweryrun/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="600"><a href="https://www.pinterest.com/brewrunseries/" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <!--<li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>-->
                    </ul>
                </div>
                <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2015 Brewery Running Series &#8212; We Run for Beer.</span>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->

<?
	include("footer.php");
?>
