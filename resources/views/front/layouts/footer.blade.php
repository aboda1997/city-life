<!-- START FOOTER -->
{{-- <footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        <li><a class="facebook_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-facebook-f"
                                    aria-hidden="true"></i> </a> </li>
                        <li><a class="twitter_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i
                                    class="fab fa-twitter" aria-hidden="true"></i> </a> </li>
                        <li><a class="googleplus_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li>
                        <li><a class="linkdin_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i
                                    class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li>
                        <li><a class="instagram_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="pintrest_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn">&copy; 2023 MegaOne. Made With Love By <a
                        href="javascript:void(0);">Themesindustry</a></p>
            </div>
        </div>
    </div>
</footer> --}}
<!-- END FOOTER -->

<!-- Footer starts -->
<footer
    class="bg-light-gray px-0 footer-image {{ request()->routeIs('home') || request()->routeIs('contact') ? '' : 'pt-5' }}"
    style="background-image: url({{ settings()->footer_img }})">
    <div class="container">
        {{-- test footer --}}

        {{-- <footer> --}}
        <div class="row w-100">
            {{-- About Us --}}
            <div class="col-12 col-md-6 col-lg-4 sec aboutus">
                {{-- <h2>{{ __('words.about_us') }}</h2> --}}
                <img class="w-50 pb-4" src="{{ settings()->white_logo }}" alt="">
                <div class="description">{!! settings()->footer_description !!}</div>

                @if ($contacts)
                    <ul class="sci">
                        @foreach ($contacts as $contact)
                            @if ($contact->type == 'social')
                                <li>
                                    <a target="_blank" href="{{ $contact->contact }}"><i class="{{ $contact->icon }}"
                                            aria-hidden="true"></i></a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>

            {{-- Quick Links --}}
            <div class="col-12 col-md-6 col-lg-4 sec quickLinks">
                <h2>{{ __('words.quick_links') }}</h2>
                <ul>
                    <li><a class="{{ request()->routeIs('front.home') ? 'active' : '' }}"
                            href="{{ route('front.home') }}">{{ __('words.home') }}</a></li>
                    <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">{{ __('words.about_us') }}</a></li>
                    <li><a class="{{ request()->routeIs('services.index.*') ? 'active' : '' }}"
                            href="{{ route('front_services.index') }}">{{ __('words.services') }}</a></li>
                    <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">{{ __('words.contact_us') }}</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div class="col-12 col-md-6 col-lg-4 sec contact">
                <h2>{{ __('words.contact_info') }}</h2>
                <div class="info">
                    <p class="mb-2 location d-flex align-items-center">
                        <span class="icon fas fa-map-marker-alt"></span>
                        <span>{{ settings()->address }}</span>
                    </p>

                    <!-- Contact Info -->
                    @if ($contacts)
                        @foreach ($contacts as $contact)
                            @if (in_array($contact->type, ['mobile', 'phone', 'email']))
                                <p class="mb-2 contacts d-flex align-items-center">
                                    {{-- Icon --}}
                                    <span class="icon {{ $contact->icon }}"></span>

                                    {{-- Contact Value --}}
                                    @if ($contact->type == 'mobile')
                                        <span>{{ __('words.mobile') }}: </span>
                                        <a href="tel:{{ $contact->contact }}" class="mx-1"
                                            style="direction: ltr;">{{ $contact->contact }}</a>
                                    @elseif($contact->type == 'phone')
                                        <span>{{ __('words.phone') }}: </span>
                                        <a href="tel:{{ $contact->contact }}" class="mx-1"
                                            style="direction: ltr;">{{ $contact->contact }}</a>
                                    @elseif($contact->type == 'email')
                                        <span>{{ __('words.email') }}: </span>
                                        <a href="mailto:{{ $contact->contact }}"
                                            class="mx-1">{{ $contact->contact }}</a>
                                    @endif
                                </p>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        {{-- Copyrights - Company --}}
        <div class="row w-100">
            <div class="col-12 text-center copyrights">
                <p class="copyrights w-100 mt-3">{{ settings()->copyrights }}</p>
            </div>
        </div>
    </div>

    {{-- Copyrights - Marwan --}}
    <div class="container-fluid marwan-copyright-container mt-3 py-1">
        <div class="row">
            <div class="col-12 text-center px-0">
                <p class="marwan-copyrights w-100 d-flex justify-content-center align-items-center">
                    <span>{{ __('words.marwan_copyrights') }}</span>&nbsp;<a href="https://marwan.tech/ar/service-request"
                        target="_blank">{{ __('words.marwan_company') }}</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer ends -->


<!--START SCROLL TOP-->
<div class="go-top"><i class="fas fa-angle-up"></i></div>
<!--END SCROLL TOP-->

<!-- JavaScript -->
<script src="{{ asset('front/vendor/js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('front/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/parallaxie.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('front/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('front/vendor/js/morphext.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('front/js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('front/js/modernizr.custom.97074.js') }}"></script>
<script src="{{ asset('front/js/jquery.hoverdir.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('front/vendor/js/contact_us.js') }}"></script>


<!-- Swiper JS - V10.2.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js"
    integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 750,
        easing: 'ease-in-out',
        once: false,
        mirror: true
    });
</script>
{{-- AOS --}}

{{-- Bootstrap - v5.2.3 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- font-awesome - v5.15.4 --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
    integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{ asset('front/js/script.js') }}"></script>
@stack('script')

</body>

</html>
