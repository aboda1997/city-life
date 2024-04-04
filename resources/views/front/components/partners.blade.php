<!-- START CLIENTS -->
<section class="pt-5 padding-bottom partner-section">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center wow fadeInUp" data-wow-delay="100ms">
                    <h1 class="main-font font-weight-600 text-black">@lang('words.partners')</h1>

                </div>

                <div class="swiper services-slider">
                    <div class="swiper-wrapper d-flex justify-content-center align-items-center">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide partner-image">
                                <img src="{{ $partner->image }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CLIENTS -->

@push('script')
    <script>
        var servicesSwiper = new Swiper(".services-slider", {
            slidesPerView: 2,
            spaceBetween: 20,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // 575: {
                //     slidesPerView: 1,
                //     spaceBetween: 20,
                // },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                },
            },
        });
    </script>
@endpush
