@extends('layouts.app')

@section('content')
<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url({{asset('assets/img/green_valley/8.jpeg')}}); background-position: center;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">About Us</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-5">
            <div class="col">

                <div class="row text-center pb-5">
                    <div class="col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                                data-appear-animation="maskUp">
                                <span>We are Green Valley, We </span>
                                <span class="word-rotator-words bg-primary">
                                    <b class="is-visible">Create</b>
                                    <b>Build</b>
                                    <b>Develop</b>
                                </span>
                                <span> Solutions</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla
                                vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus
                                sed leo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="800">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-chart  text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel
                            pellentesque consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="600">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-eye text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque
                            consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="800">
                        <div class="feature-box-icon text-10 mb-2">
                            <i class="icons icon-question text-color-primary"></i>
                        </div>
                        <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel
                            consequat, ante nulla hendrerit arcu.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
        data-plugin-options="{'accY': -150}">
        <div class="container">
            <div class="row counters counters-sm pb-4 pt-3">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-user text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="40000"
                            data-append="+">0</strong>
                        <label class="text-4 mt-1 text-color-light">Happy Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-badge text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
                        <label class="text-4 mt-1 text-color-light">Years In Business</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <i class="icons icon-graph text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="178">0</strong>
                        <label class="text-4 mt-1 text-color-light">High Score</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <i class="icons icon-cup text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="352">0</strong>
                        <label class="text-4 mt-1 text-color-light">Cups of Coffee</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong
                            class="font-weight-extra-bold">We Are</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam
                        id varius nunc. </p>
                    <p class="pr-5 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                        blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus
                        venenatis eget</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5"
                    style="top: 1.7rem;">
                    <img src="{{asset('assets/img/green_valley/2.jpeg')}}"
                        class="img-fluid position-absolute d-none d-sm-block appear-animation"
                        data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="{{asset('assets/img/green_valley/5.jpeg')}}" class="img-fluid position-relative appear-animation mb-2"
                        data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container appear-animation" data-appear-animation="fadeInUpShorter"
        data-appear-animation-delay="300">
        <div class="row pt-5 pb-4 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" style="direction: ltr"
                    data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
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
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong
                        class="font-weight-extra-bold">Our Team</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id
                    varius nunc.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                    enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-color-dark font-weight-normal text-center text-6 mb-3">Our <strong class="font-weight-extra-bold">Location</strong></h2>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div id="googlemaps" class="google-map m-0 appear-animation animated fadeIn appear-animation-visible"
                data-appear-animation="fadeIn" data-appear-animation-delay="300"
                style="height: 450px; animation-delay: 300ms; position: relative; overflow: hidden;">
                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27642.221762048768!2d46.6972070257308!3d24.74427265376137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f02f156a51d25%3A0x84f1ececcaf4845a!2z2KfZhNmD2YTZitipINin2YTYqtmC2YbZitipINmE2YTYqNmG2YrZhiDYqNin2YTYsdmK2KfYtg!5e0!3m2!1sar!2ssa!4v1681203013318!5m2!1sar!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>

            <div class="col-sm-6 mb-4">
                <div id="googlemaps" class="google-map m-0 appear-animation animated fadeIn appear-animation-visible"
                data-appear-animation="fadeIn" data-appear-animation-delay="300"
                style="height: 450px; animation-delay: 300ms; position: relative; overflow: hidden;">
                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14491.436551731877!2d46.64934097376553!3d24.766018379798037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee2fb056ead47%3A0x828d40023cc0ff61!2z2YXYsdmD2LIg2KfZhNmF2YTZgyDYudio2K8g2KfZhNmE2Ycg2KfZhNmF2KfZhNmK2Iwg2KfZhNi52YLZitmC2Iwg2KfZhNix2YrYp9i2!5e0!3m2!1sar!2ssa!4v1681203129215!5m2!1sar!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						</div>
            </div>
            </div>
        </div>

</div>


</div>

@endsection
