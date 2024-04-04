<section class="ui-block-32 about">
    <div class="container" data-aos="fade-down">
        <div class="row dot-box">
            <!-- Heading Area-->
            <div class="col-lg-6 order-lg-2 about-content">
                @if (request()->routeIs('front.home'))
                    <div class="heading-area pl-lg-4 p-0 about-description text-limit" style="--lines:8">
                        <h2 class="title">{{ $about_us->title }}</h2>
                        <p class="paragraph">{!! $about_us->description !!}</p>
                    </div>
                @else
                    <div class="heading-area pl-lg-4 p-0 about-description">
                        <h2 class="title">{{ $about_us->title }}</h2>
                        <p class="paragraph">{!! $about_us->description !!}</p>
                    </div>
                @endif
                @if (request()->routeIs('front.home'))
                    <div class="pt-lg-5 d-flex justify-content-start align-items-center">
                        <a class="button1" href="{{ route('about') }}">@lang('words.read_more')</a>
                    </div>
                @endif
            </div>
            <!-- Features Box-->
            <div class="col-lg-6">
                <!--About Image-->
                <div class="about-image js-tilt">
                    <img src="{{ $about_us->image }}" alt="about-img">
                </div>
            </div>
        </div>

    </div>
</section>


@if (request()->routeIs('front.home'))
    <!-- features -->
    <section class="features">
        <div class="container">
            <!-- About Boxes -->
            <div class="row about-margin">
                <div class="title text-center pb-5 wow fadeInUp" data-wow-delay="100ms">
                    <h2 class="main-font font-weight-600">@lang('words.our_feature')</h2>
                </div>
                <!-- First Box -->
                @foreach ($features as $feature)
                    <div class="col-md-4 col-sm-12">
                        <div class="about-box center-block bg-green wow zoomIn" data-wow-delay="400ms">
                            <div class="about-main-icon pb-4">
                                <img src="{{ $feature->image }}" alt="">
                                {{-- <i class="fa fa-lightbulb" aria-hidden="true"></i> --}}
                            </div>
                            <h5>{{ $feature->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Features-->
@endif
