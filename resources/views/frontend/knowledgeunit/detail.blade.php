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
      <div class="col-md-8">
        <iframe src="{{ $knowledgeunit->media_link }}" style="border:0;" class="video_course"></iframe>
        <h3>{{ trans('messages.description')}}</h3>
      </div><!-- End col-md-8  -->

      <aside class="col-md-4">
        <div class="box_style_1">
          <h4><a href="#">{{ trans('messages.download') }}<i class="icon-download pull-right"></i></a></h4><br>

          <div class="media">
            <div class="pull-right">
              <img src="{{ URL::to('img/login_logo.png') }}" class="img-circle" alt="">
            </div>
            <div class="media-body">
              <h5 class="media-heading"><a href="{{ URL::to('/courses/'. $knowledgeunit->unit->course->id) }}">{{ $knowledgeunit->unit->course->name }}</a></h5>
              <p>{{ $knowledgeunit->unit->course->description }}</p>
            </div>
          </div>
        </div>
        <!--
        <div class="box_style_1">
          <h4>{{ trans('messages.related_content') }}</h4>
          <ul class="list_1">
            <li><a href="#">Ceteros mediocritatem</a></li>
            <li><a href="#">Labore nostrum</a></li>
            <li><a href="#">Primis bonorum</a></li>
            <li><a href="#">Ceteros mediocritatem</a></li>
          </ul>
        </div>
        -->
      </aside> <!-- End col-md-4 -->

    </div><!-- End row -->
  </div><!-- End container -->
</section>
@endsection

@section('scripts')
<script type="text/javascript">

</script>
@endsection
