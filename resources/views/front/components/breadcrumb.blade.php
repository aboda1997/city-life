<!--Banner Start-->
<section class="page-title blog-page-title"
    style="background-image: url('{{ settings()->breadcrumb }}'); background-attachment: fixed">
    <div class="bg-overlay bg-black opacity-6"></div>
    <div class="container">
        <h2 class="hide-cursor">{{ $title ?? $name }}</h2>
        <ul class="page-breadcrumb link">
            <li>
                <a href="{{ route('front.home') }}"><span class="icon fas fa-home"></span>{{ trans('words.home') }}</a>
            </li>

            @if (isset($route))
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route($route) }}">{{ $name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
            @endif
        </ul>
    </div>
</section>
<!--Banner End-->
