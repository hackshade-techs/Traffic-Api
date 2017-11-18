@extends('layouts.master')

@section('content')
    <!-- START BANNER SECTION -->
        <section id="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <div class="banner-mobile">
                            <img src="assets/img/banner-mobile.png" alt="banner-mobile" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-7">
                        <div class="banner-cont">
                            <h1>Welcome to Dot Apps</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                            <div class="banner-btn floatleft">
                                <a href="#">Download for iphone</a>
                            </div>
                            <div class="banner-btn">
                                <a href="#">Download for android</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-0"></div>
                </div>
            </div>
        </section>
        <!-- / END BANNER SECTION -->
        
        <!-- START ABOUT SECTION -->
        <section id="about-section" class="section-padding">
            <div class="container about-container">
                
                <!-- start about top -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-top common-section-blue-top">
                            <h2>About dotapps</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                        </div>
                    </div>
                </div>
                
                <!-- start about bottom -->
                <div class="about-bottom">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="about-btm-cont">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6">
                                        <h4>What is dotapps?</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6">
                                        <h4>How to Work?</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6">
                                        <h4 class="tab-hide">Why Chose Dotapps?</h4>
                                        <p class="tab-hide">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="about-mobile-img">
                                <img src="assets/img/about-mobile.png" alt="about-mobile" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="about-pencil-img hidden-xs">
                                <img src="assets/img/about-pen.png" alt="about-pen" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- start about images -->
            <div class="about-img">
                <img src="assets/img/about-banner.png" alt="about-banner-img" class="img-responsive"/>
            </div>            
        </section>
        <!-- / END ABOUT SECTION -->
        
        <!-- START FEATURES SECTION -->
        <section id="feature-section" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-top common-section-white-top">
                            <h2>dotApps Features</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-bottom">
                    <div class="row">
                        <!-- feature left start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="row">
                                <!-- feature left-top -->
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="feature-left-top feature-multi-left">
                                        <img src="assets/img/wifi.png" alt="wifi" />
                                        <h4>Working Offline</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                    </div>
                                </div>
                                <!-- feature left-middle -->
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="feature-left-middle feature-multi-left">
                                        <img src="assets/img/refresh.png" alt="refresh" />
                                        <h4>Regular Updates</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                    </div>
                                </div>
                                <!-- feature left-bottom -->
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="feature-left-bottom feature-multi-left tab-hide">
                                        <img src="assets/img/touch.png" alt="touch" />
                                        <h4>Touch Support</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- feature middle start -->
                        <div class="col-lg-6 col-md-4">
                            <div class="feature-middle">
                                <img src="assets/img/feature-mobile.png" alt="feature-img" class="img-responsive" />
                            </div>
                        </div>
                        
                        <!-- feature right start -->
                        
                        <div class="col-lg-3 col-md-4">
                            <!-- feature right-top -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <div class="feature-right-top feature-multi-right tab-hide">
                                        <img src="assets/img/responsive.png" alt="responsive" />
                                        <h4>Responsive Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature right-middle --> 
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="feature-right-middle feature-multi-right">
                                    <img src="assets/img/users.png" alt="users" />
                                    <h4>User Feedback</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                </div>
                            </div>
                            <!-- feature right-bottom -->
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="feature-right-bottom feature-multi-right">
                                    <img src="assets/img/setting.png" alt="setting" />
                                    <h4>Customization</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END FEATURES SECTION -->
        
        <!-- START SCREENSHOTS SECTION -->
        <section id="screenshots-section" class="section-padding">
            <div class="container screenshot text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="screenshots-top common-section-blue-top">
                            <h2>Apps Screenshots</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 screenshot-all-img">
                        <div class="screenshot-mobile-img">
                            <img src="assets/img/screenshots-mobile.png" alt="screenshots mobile"/>
                        </div>
                        <div class="screenshots-carousel">
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-1.png" alt="screenshot-1" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-2.png" alt="screenshot-2" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-3.png" alt="screenshot-3" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-1.png" alt="screenshot-1" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-2.png" alt="screenshot-2" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-3.png" alt="screenshot-3" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-1.png" alt="screenshot-1" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-2.png" alt="screenshot-2" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-3.png" alt="screenshot-3" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-1.png" alt="screenshot-1" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-2.png" alt="screenshot-2" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-3.png" alt="screenshot-3" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-1.png" alt="screenshot-1" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-2.png" alt="screenshot-2" class="img-responsive" />
                            </div>
                            <div class="carousel-common">
                                <img src="assets/img/screenshot-3.png" alt="screenshot-3" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END SCREENSHOTS SECTION -->
        
        
        <!-- START PRICING SECTION -->
        <section id="pricing-section" class="section-padding pricing-bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-top common-section-white-top">
                            <h2>Pricing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- pricing full div 01 -->
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="pricing-bottom">
                            <div class="basic">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Basic</span>
                                </a>
                            </div>
                            <div class="pricing-value">
                                <h3>Free</h3>
                                <p>No hidden free <br/> only the main features</p>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Awesome Product</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>20 Page Style</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>10 Portfolio Item</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Mail support</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Skype support</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Unlimited Bandwidth</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Special Feature</span></li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- pricing full div 02 -->
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="pricing-bottom">
                            <div class="basic">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>silver</span>
                                </a>
                            </div>
                            <div class="pricing-value">
                                <h3><span class="doller">$</span>25</h3>
                                <p>Per month <br/> only the main features</p>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Awesome Product</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>20 Page Style</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>10 Portfolio Item</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Mail support</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Skype support</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Unlimited Bandwidth</span></li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i><span>Special Feature</span></li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- pricing full div 03 -->
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="pricing-bottom">
                            <div class="basic">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Gold</span>
                                </a>
                            </div>
                            <div class="pricing-value">
                                <h3><span class="doller">$</span>69</h3>
                                <p>Per month <br/> only the main features</p>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Awesome Product</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>20 Page Style</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>10 Portfolio Item</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Mail support</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Skype support</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Unlimited Bandwidth</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Special Feature</span></li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- pricing full div 04 -->
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="pricing-bottom">
                            <div class="basic">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Platinum</span>
                                </a>
                            </div>
                            <div class="pricing-value">
                                <h3><span class="doller">$</span>199</h3>
                                <p>Per month <br/> only the main features</p>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Awesome Product</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>20 Page Style</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>10 Portfolio Item</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Mail support</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Skype support</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Unlimited Bandwidth</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Special Feature</span></li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END PRICING SECTION -->
                
        <!-- START TESTIMONIAL SECTION -->
        <section id="testimonial-section" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-top common-section-blue-top">
                            <h2>Testimonials</h2>
                            <p>Our Happy Client What Say About Dotapps</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="testimonial-bottom">
                            <div class="testimonial-cont">
                                <img src="assets/img/testimonial1.png" alt="testimonial girl images" class="img-responsive" />
                                <h3>Cristina Deo</h3>
                                <h4>UI Designer</h4>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</span>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="testimonial-cont">
                                <img src="assets/img/testimonial2.png" alt="testimonial girl images" class="img-responsive" />
                                <h3>John Smith</h3>
                                <h4>Web Developer</h4>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</span>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="testimonial-cont">
                                <img src="assets/img/testimonial3.png" alt="testimonial girl images" class="img-responsive" />
                                <h3>Anton Kovalsky</h3>
                                <h4>Graphic Designer</h4>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</span>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!-- / END TESTIMONIAL SECTION -->
        
        <!-- START VIDEO SECTION -->
        <section id="video-section" class="vid-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-top common-section-white-top">
                            <h2>How to use this apps</h2>
                            <p>Click and see this video</p>                            
                        </div>
                        <div class="video-play text-center">
                            
                            <a href="https://vimeo.com/138192484"
                            data-vimeo="<iframe src='https://player.vimeo.com/video/118939224?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0' width='640' height='360' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"
                            class="btn btn-vimeo"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /END VIDEO SECTION -->
        
        <!-- START DOWNLOAD SECTION -->
        <section id="download-section" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="download-top common-section-blue-top">
                            <h2>download available</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row text-center">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="download-bottom">
                            <a href="#">
                                <div class="download-multi download-icon">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="download-multi download-cont">
                                    <p>Available on</p>
                                    <h4>Apps Store</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="download-bottom">
                            <a href="#">
                                <div class="download-multi download-icon">
                                    <i class="fa fa-android"></i>
                                </div>
                                <div class="download-multi download-cont">
                                    <p>Available on</p>
                                    <h4>Google Play</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="download-bottom">
                            <a href="#">
                                <div class="download-multi download-icon">
                                    <i class="fa fa-windows"></i>
                                </div>
                                <div class="download-multi download-cont">
                                    <p>Available on</p>
                                    <h4>Windows</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
        <!-- /END DOWNLOAD SECTION -->
        
        <!-- START SUBSCRIBE SECTION -->
        <section id="subscribe-section" class="section-padding text-center">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-top common-section-white-top">
                            <h2>Subscribe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="log-lg-12 col-xs-12">
                        <div class="form">
                            <form>
                                <input type="email" id="email" placeholder="Write your email here" />
                                <input type="submit" id="button" value="Subscribe" />
                            </form>
                        </div>
                        <div class="subscribe-icon">
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END SUBSCRIBE SECTION -->
@endsection