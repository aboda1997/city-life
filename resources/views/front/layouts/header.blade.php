<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if (app()->getLocale() == 'ar') dir="rtl" @endif>

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="title" content="{{ settings()->meta_title }}">
    <meta name="description" content="{{ settings()->meta_description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ settings()->meta_keywords }}">
    <!-- Page Title -->
    {{-- <title>{{ settings()->website_title }}</title> --}}
    <meta name="description" content="{{ settings()->meta_description }}">
    <meta property="og:title" content="{{ settings()->website_title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::root() }}">
    <meta property="og:image" content="{{ asset(settings()->logo) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ Request::getHost() }}">
    <meta property="twitter:url" content="{{ Request::root() }}">
    <meta name="twitter:title" content="{{ settings()->website_title }}">
    <meta name="twitter:description" content="{{ settings()->meta_description }}">
    <meta name="twitter:image" content="{{ asset(settings()->logo) }}">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="{{ settings()->meta_keywords }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(settings()->logo) }}">
    <!-- Page Title -->
    <title>{{ settings()->website_title }} | @yield('title')</title>
    <!-- Page Title -->

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Google Fonts --}}
    @if (App::isLocale('ar'))
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
    @endif
    <!-- Favicon -->
    <link rel="icon" href="{{ settings()->favicon }}">
    <!-- Bundle -->
    <link href="{{ asset('front/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('front/vendor/css/LineIcons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset('front/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/line-awesome.min.css') }}" rel="stylesheet">


    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css"
        integrity="sha512-s6khMl5GDS1HbQ5/SwL1wzMayPwHXPjKoBN5kHUTDqKEPkkGyEZWKyH2lQ3YO2q3dxueG3rE0NHjRawMHd2b6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- swiper js --}}

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- AOS --}}

    {{-- Bootstrap - v5.2.3 --}}
    @if (App::isLocale('ar'))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.rtl.min.css"
            integrity="sha512-SRg0d/3qeXy0utrb7F4+4jkFHhzdyvqjAd2i9ub0zWrPS80PoRaAtzmbMeVRYtApxoEcE6tcFZaHRY5UbwrTaw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @else
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
            integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif

    {{-- font-awesome - v5.15.4 --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style Sheet -->
    <link href="{{ asset('front/vendor/css/elements.css') }}" rel="stylesheet">

    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet">
    @stack('css')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Loader -->
    <div class="loader-bg">
        <div class="loader"></div>
    </div>
    <!-- Loader ends -->

    <!-- START HEADER -->
    <header>
        <!--Navigation-->
        <nav id= 'nav' class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
            <div class="container round-nav">
                <a href="{{ route('front.home') }}" title="Logo" class="logo">
                    <!--Logo Default-->
                    <img src="{{ settings()->logo }}" alt="logo" class="ml-lg-3 m-0">
                </a>

                <!--Nav Links-->
                <div class="collapse navbar-collapse" id="megaone">
                    <div class="navbar-nav ms-auto">
                        {{-- Home --}}
                        <a class="nav-link line {{ request()->routeIs('front.home') ? 'active' : '' }}"
                            href="{{ route('front.home') }}">{{ __('words.home') }}</a>

                        {{-- About Us --}}
                        <a class="nav-link line {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">{{ __('words.about_us') }}</a>

                        <a class="nav-link line {{ request()->routeIs('front_services.*') ? 'active' : '' }}"
                            href="{{ route('front_services.index') }}">{{ __('words.services') }}</a>

                        <a class="nav-link line {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">{{ __('words.contact_us') }}</a>

                        {{-- <a class="nav-link scroll line" href="#blog">Blog</a> --}}

                        <a href="{{ route('consultation') }}"
                            class="button1 {{ request()->routeIs('consultation') ? 'active' : '' }}"
                            data-animation-duration="500">{{ __('words.request_consultation') }}</a>

                        {{-- <a href="" class="btn btn-large btn-rounded btn-green btn-hvr-up btn-hvr-blue"
                        data-animation-duration="500" data-fancybox
                        data-src="#animatedModal">{{ __('words.request_consultation') }}</a> --}}

                        {{-- Language Toggler --}}
                        <li class="nav-item language-toggler">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="nav-link {{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                                    rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('front/icons/' . $localeCode . '.png') }}"
                                        style="width: 22px;">
                                </a>
                            @endforeach
                        </li>
                    </div>
                </div>
            </div>

            <!--Side Menu Button-->
            <div class="navigation-toggle">
                <ul class="slider-social toggle-btn my-0">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Side Nav-->
        <div class="side-menu hidden">

            <div class="mega-title" id="mega-title">
                <h2 class="inner-mega-title">Corporate Finance</h2>
                <h2></h2>
            </div>

            <span id="btn_sideNavClose">
                <i class="las la-times btn-close"></i>
            </span>
            <div class="inner-wrapper">
                <nav class="side-nav w-100">
                    <a href="{{ route('front.home') }}" title="Logo" class="logo navbar-brand">
                        <img src="{{ settings()->logo }}" alt="logo">
                    </a>
                    <ul class="navbar-nav text-capitalize">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}"
                                href="{{ route('front.home') }}">{{ __('words.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">{{ __('words.about_us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('front_services.*') ? 'active' : '' }}"
                                href="{{ route('front_services.index') }}">{{ __('words.services') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">{{ __('words.contact_us') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="button1"
                                data-animation-duration="500">{{ __('words.request_consultation') }}</a>
                        </li>
                        <li class="get-started-btn">
                            <a href=""
                                class="btn btn-medium btn-rounded btn-blue btn-hvr-green btn-hvr-up d-lg-none"
                                data-animation-duration="500" data-fancybox data-src="#animatedModal">Get Started</a>
                        </li>
                        {{-- Language Toggler --}}
                        <li class="nav-item language-toggler">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="nav-link {{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                                    rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('front/icons/' . $localeCode . '.png') }}"
                                        style="width: 22px;">
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </nav>


            </div>
        </div>

    </header>
    <!-- END HEADER -->
