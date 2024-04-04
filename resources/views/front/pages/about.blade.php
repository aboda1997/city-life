@extends('front.layouts.master')
@section('title')
    {{ trans('words.about_us') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.about_us'),
        // 'title' => $portfolio->title,
        // 'route' => 'portfolio.index',
    ])
    <!--breadcrumb-->
    <section id="about-page">
        @include('front.components.about')


        <section class="ui-block-26 about">
            <div class="container">

                <div class="row dot-box my-4 py-3 about-container" data-aos="fade-up">
                    <div
                        class="col-12 col-lg-6 text-center text-lg-left d-flex justify-content-center align-items-center about-title">
                        <div class="heading-area p-0">
                            <h2 class="title">{{ $vision->title }}</h2>
                            <p class="paragraph">{!! $vision->description !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 about-img-area">
                        <div class="about-img">
                            <img src="{{ $vision->image }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="row dot-box my-5 py-3 about-container"data-aos="fade-up">
                    <div
                        class="col-12 col-lg-6 text-center text-lg-left d-flex justify-content-center align-items-center about-title-2">
                        <div class="heading-area p-0">
                            <h2 class="title">{{ $message->title }}</h2>
                            <p class="paragraph">{!! $message->description !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 about-img-area">
                        <div class="about-img">
                            <img src="{{ $message->image }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="row dot-box my-4 py-3 pb-5 about-container" data-aos="fade-up">
                    <div
                        class="col-12 col-lg-6 text-center text-lg-left d-flex justify-content-center align-items-center about-title">
                        <div class="heading-area p-0 about-description">
                            <h2 class="title">{{ $goals->title }}</h2>
                            <p class="paragraph">{!! $goals->description !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 about-img-area">
                        <div class="about-img">
                            <img src="{{ $goals->image }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
