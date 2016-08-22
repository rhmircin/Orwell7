@extends('frontend.layout.app')

@section('styles')
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link href="{{ asset('rs-plugin/css/settings.css') }}" media="screen" rel="stylesheet">
@endsection

@section('content')

    @include('frontend.partials.panel')
    @include('frontend.partials.coursepanel')
    @include('frontend.partials.features')
    @include('frontend.partials.testimonials')

@endsection

@section('scripts')
@endsection
