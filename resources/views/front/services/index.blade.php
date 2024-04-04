@extends('front.layouts.master')
@section('title')
    {{ trans('words.services') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.services'),
    ])
    <!--breadcrumb-->

    @include('front.components.services')
@endsection
