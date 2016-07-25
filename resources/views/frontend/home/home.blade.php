@extends('frontend.layout.app')

@section('styles')
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link href="{{ asset('rs-plugin/css/settings.css') }}" media="screen" rel="stylesheet">
@endsection

@section('content')

    @include('frontend.partials.slider')
    @include('frontend.partials.features')
    @include('frontend.course.latest_grid')
    @include('frontend.course.next_grid')
    @include('frontend.partials.testimonials')

@endsection

@section('scripts')
    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript">
        var revapi;

        jQuery(document).ready(function() {

           revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1700,
                startheight:600,
                hideThumbs:true,
                navigationType:"none",
                fullWidth:"on",
                forceFullWidth:"on"
            });

        }); //ready
    </script>
@endsection
