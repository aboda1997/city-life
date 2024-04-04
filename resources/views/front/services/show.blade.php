<!-- Blog Detail starts -->
@extends('front.layouts.master')
@section('title')
    {{ trans('words.services') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.services'),
        'title' => $service->title,
        'route' => 'front_services.index',
    ])
    <!--breadcrumb-->


    {{-- <section class="single-service text-left">
        <div class="container">
            <div class="row">
                <!-- Blog Left Listing -->
                <div class="col-12">
                    <div class="blog-box heading-space m-md-0">
                        <!-- Blog List Inner -->
                        <div class="blog-listing-inner news_item">



                            <!-- Comments -->
                            <div class="agency-author col-12">
                                <div class="author-avatar col-4">
                                    <img alt="image" src="{{ $service->image }}" class="avatar">
                                </div>
                                <div class="author-content col-8">
                                    <h6>

                                        {{ $service->title }}
                                    </h6>
                                    <div class="alt-font text-grey">
                                        <p>{!! $service->description !!}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Blog Widgets -->

            </div>
        </div>
    </section> --}}
    <!-- Blog Detail ends -->


    <!--our-Services sec start-->
    <section id="our-services" class="our-services">
        <div class="container bg-white single-service-content">
            <div class="row text-center text-md-left">

                <div class="col-12 service-tab text-right">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="fade show active">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 tab-img px-0" data-aos="fade-right" data-aos-duration="1500"
                                    data-aos-delay="250">
                                    <img alt="service1" src="{{ $service->image }}">
                                </div>
                                <div class="col-sm-12 col-md-6 tab-detail d-flex align-items-center" data-aos="fade-left"
                                    data-aos-delay="250" data-aos-duration="1500">
                                    <div class="tab-des">
                                        {{-- <span class="tab-num">01</span> --}}
                                        <h4 class="tab-title">{{ $service->title }}</h4>
                                        <p class="tab-text">{!! $service->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our-Services sec start-->
@endsection
