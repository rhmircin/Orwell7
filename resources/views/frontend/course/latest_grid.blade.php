<section id="main_content_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
              <h2>{{ trans('messages.latest_courses')}}</h2>
              <p class="lead">{{ trans('messages.latest_courses_desc')}}</p>
            </div>
        </div><!-- End row -->

        @if(count($latest)>0)
        <div class="row">

            @foreach ($latest as $course)
            <div class="col-lg-3 col-md-6 col-sm-6">
                @include('frontend.course.item')
            </div>
            @endforeach

        </div><!-- End row -->
        @endif


        <div class="row">
            <div class="col-md-12">
                 <a href="{{ URL::to('/courses') }}" class="button_medium_outline pull-right">{{ trans('messages.courses_all') }}</a>
            </div>
        </div> <!-- End row -->
    </div>  <!-- End container -->
</section><!-- End section gray -->
