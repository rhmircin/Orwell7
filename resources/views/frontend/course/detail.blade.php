@extends('frontend.layout.app')

@section('styles')
<!-- Single Course CSS Settings -->
<link href="{{ asset('css/single_course.css') }}" media="screen" rel="stylesheet">
@endsection

@section('content')
@include('frontend.partials.sub_header')

<section id="main_content">
    <div class="container">
        <div class="row">
            @include('frontend.unit.list')

            <aside class="col-md-4">
                <a href="#" class=" button_fullwidth-3">Start learning</a>
                <div class="box_style_1">
                    <!-- -->
                    <h4>Lessons <span class="pull-right">{{$units->count()}}</span></h4>
                    <h4>Hours <span class="pull-right">{{$knowledgeunits->count()*0.15}}</span></h4>
                    <h4>Rates
                        <span class="pull-right rating_2">
                            {{-- */$rateval = $course->averageRatingRound();/* --}}
                            @include('frontend.partials.rating')
                        </span>
                    </h4>
                    <h4>Single purchase
                        @if($course->price > 0)
                        <span class="pull-right">{!! $course->price !!}</span>
                        @else
                        <span class="pull-right">FREE</span>
                        @endif
                    </h4>
                    <br>
                    <!-- -->
                    <h4>{{ trans('messages.speakers') }}</h4>
                    <div class="media">
                        <div class="pull-right">
                            <img src="{{ URL::to('img/login_logo.png') }}" class="img-circle" alt="">
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading"><a href="#">Luis Loyza</a></h5>
                            <p>Ingeniero Ambiental</p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="pull-right">
                            <img src="{{ URL::to('img/login_logo.png') }}" class="img-circle" alt="">
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading"><a href="#">Luis Oliveros</a></h5>
                            <p>Ingeniero Mecánico</p>
                        </div>
                    </div>
                </div>

                <!--<div class="box_style_1">
                <h4>Related content</h4>
                <ul class="list_1">
                <li><a href="#">Ceteros mediocritatem</a></li>
                <li><a href="#">Labore nostrum</a></li>
                <li><a href="#">Primis bonorum</a></li>
                <li><a href="#">Ceteros mediocritatem</a></li>
            </ul>
        </div>-->

    </aside> <!-- End col-md-4 -->

</div><!-- End row -->

</div><!-- End container -->
</section>

@endsection

@section('scripts')
<script type="text/javascript">

</script>
@endsection
