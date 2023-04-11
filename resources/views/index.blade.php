@extends('layouts.app')

@section('content')


<div role="main" class="main">
    <section class="section section-with-shape-divider border-0 py-0 m-0">
        <div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
                <path d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z" fill="#ffffff"/>
            </svg>
        </div>
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-primary nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 6000}" style="height: 100vh;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8" style="background-image: url({{asset('assets/img/green_valley/6.jpeg')}}); background-size: cover; background-position: center; height: 100vh;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-normal px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{asset('assets/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            WE CREATE DESIGNS, WE ARE
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{asset('assets/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Green Valley</h1>
                                        <p class="text-4 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
                                        <a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 py-3 btn-px-5 mt-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-9 pt-5" style="background-image: url({{asset('assets/img/green_valley/7.jpeg')}}); background-size: cover; background-position: center; height: 100vh;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-7 text-center">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-normal ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                                <img src="{{asset('assets/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            HELLO, THIS IS
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                                <img src="{{asset('assets/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Green Valley</h1>
                                        <p class="text-4-5 text-color-light font-weight-light text-center mb-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Trusted by over 40,000 satisfied users.</p>
                                        <a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 py-3 btn-px-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row py-lg-5 my-1">
            <div class="col-sm-12 pr-lg-5 mb-5 mb-lg-0 text-center">
                <h2 class="font-weight-bold mb-4">Hello, we are Green Valley</h2>
                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-chart  text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel
                            pellentesque consequat</p>
                    </div>
                    <div class="col-md-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-eye text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque
                            consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-question text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel
                            consequat, ante nulla hendrerit arcu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">

                <p class="text-color-dark text-6 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim.</p>
                <p class="line-height-9 text-4 pr-lg-5 mr-lg-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
                <a href="about-us.html" class="learn-more text-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ml-2"></i></a>
            </div>
            <div class="col-md-10 col-lg-5">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                            <span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">01</span>
                            <h4 class="font-weight-bold text-5 pl-1 mb-2">Strategy</h4>
                            <p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                            <span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">02</span>
                            <h4 class="font-weight-bold text-5 pl-1 mb-2">Plan</h4>
                            <p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-4 mb-sm-0">
                        <div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
                            <span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">03</span>
                            <h4 class="font-weight-bold text-5 pl-1 mb-2">Work</h4>
                            <p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1400">
                            <span class="d-inline-block font-weight-extra-bold text-color-primary font-italic line-height-1 text-14 ls-0 mb-2">04</span>
                            <h4 class="font-weight-bold text-5 pl-1 mb-2">Quality</h4>
                            <p class="pl-1">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container  py-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Gallery</strong></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">

                    <div class="owl-carousel owl-theme nav-style-1 stage-margin mb-0 portfolio-img" style="direction: ltr" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 3}}, 'margin': 3, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/1.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/2.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/3.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/4.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/5.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="hover-effect-3d">
                                <div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
                                    <div class="thumb-info-wrapper">
                                        <img src="{{asset('assets/img/green_valley/6.jpeg')}}" class="img-fluid rounded-0 hover-effect-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>



    <div class="container">
        <div class="row justify-content-center featured-boxes featured-boxes-style-4 pb-3 pt-5 mb-4">
            <div class="col-md-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                        <i class="icon-featured icons icon-location-pin mb-3"></i>
                        <span class="d-block opacity-7 line-height-1">PORTO ADDRESS</span>
                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">123 Street Name, City, USA</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-primary mx-5">
                    <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                        <i class="icon-featured icons icon-clock mb-3"></i>
                        <span class="d-block opacity-7 line-height-1">BUSINESS HOURS</span>
                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">Mon - Sun / 9:00AM - 8:00PM</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1000">
                        <i class="icon-featured icons icon-call-in mb-3"></i>
                        <span class="d-block opacity-7 line-height-1">CALL US NOW</span>
                        <h2 class="font-weight-bold text-color-dark text-5 mb-0">(123) 456-7890</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container pb-2">
            <div class="row">
                <div class="col-lg-12 text-center  mb-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Our <strong class="font-weight-extra-bold"> Partners</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                    <div class="row justify-content-center my-5 partners-img">
                        <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" style="direction: ltr" data-plugin-options="{'responsive': {'0': {'items': 2}, '768': {'items': 3}, '992': {'items': 6}, '1200': {'items': 6}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                                <p class="text-2 mb-0">CEO</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                                <p class="text-2 mb-0">CEO</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                                <p class="text-2 mb-0">DEVELOPER</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                                <p class="text-2 mb-0">SEO ANALYST</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                                <p class="text-2 mb-0">DESIGNER</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                                <p class="text-2 mb-0">DEVELOPER</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                                <p class="text-2 mb-0">SEO ANALYST</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                                <p class="text-2 mb-0">DESIGNER</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                                <p class="text-2 mb-0">DEVELOPER</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                                <p class="text-2 mb-0">SEO ANALYST</p>
                            </div>
                            <div>
                                <img class="img-fluid rounded-0 mb-4" src="{{asset('assets/img/team/team-1.jpg')}}" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                                <p class="text-2 mb-0">DESIGNER</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection
