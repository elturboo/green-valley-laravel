@extends('layouts.app')

@section('content')


<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('assets/img/green_valley/7.jpeg')}}); background-position: center;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10">Our <strong>Products</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-5 products-img">

        <div class="row pb-4 mt-2">
            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/1.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/2.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/3.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/4.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/5.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                <a href="/product-details">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('assets/img/green_valley/6.jpeg')}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>

        </div>


    </div>


</div>

@endsection
