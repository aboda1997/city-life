<!-- START PORTFOLIO -->
<section id="portfolio" class="padding ">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="title text-center pb-5 wow fadeInUp" data-wow-delay="100ms">
                    {{-- <p class="text-green font-weight-200 font-20">Basic Info about work</p> --}}
                    <h1 class="main-font font-weight-600 text-black">@lang('words.services')</h1>
                </div>
            </div>

            <div class="row">
                @foreach ($services as $key=>$service)
                    <div class="col mb-3 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="{{$key * 100}}">
                        <div class="card services-item">
                            <div class="card-header">
                                <a href="{{ $service->image }}" class="services-image" data-fancybox="images">
                                    <img
                                        src="{{$service->image}}" class="card-img-top image-responsive"
                                        alt="{{$service->title}}"> </a>
                            </div>
                            <div class="card-body text-center">
                                <a href="{{route('front_services.show', $service->id)}}" class="card-title text-limit"
                                   style="--lines:1;">{{$service->title}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (request()->routeIs('front.home'))
                <div class="text-center pt-5 mb-5" data-aos="fade-down">
                    <a href="{{ route('front_services.index') }}" class="button1">@lang('words.show_more')</a>
                </div>
            @endif
        </div>
    </div>


    @if (request()->routeIs('front_services.index'))
     <!--pagination-->
        <div class="row mt-5 text-center d-flex justify-content-center align-items-center">
            {{ $services->links('front.pagination.default') }}
        </div>
    @endif
</section>
<!-- END PORTFOLIO -->
