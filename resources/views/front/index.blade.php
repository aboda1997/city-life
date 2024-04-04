@extends('front.layouts.master')

@section('title')
    {{ trans('words.home') }}
@endsection


@section('content')
    @include('front.components.slider')


    {{--    @include('front.components.partners') --}}

    {{-- @include('front.components.news') --}}
@endsection
