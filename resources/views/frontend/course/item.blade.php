<div class="col-item">
    <!--<span class="ribbon_course"></span>-->
    <div class="photo">
        <!--<a href="{{URL::to('/courses/'.$course->id)}}"> -->
        <a href="{{URL::to('/courses/'.$course->slug)}}">
            <img src= "{{ URL::to($course->image) }}"alt="" />
        </a>
        <div class="cat_row">
            <a href="#">{{ $course->category->name() }}</a>
            <!--<span class="pull-right">
            <i class=" icon-clock"></i>
            <p>6 Days</p>
        </span>-->
    </div>
</div>
<div class="info">
    <div class="row">
        <div class="course_info col-md-12 col-sm-12">
            <h4>{{ $course->name }}</h4>
            <p >{{ $course->description }}</p>
            <div class="rating">
                {{-- */$rateval = $course->averageRatingRound();/* --}}
                @include('frontend.partials.rating')
            </div>
            @if($course->price > 0)
            <div class="price pull-right">{!! $course->price !!}</div>
            @else
            <div class="price pull-right">FREE</div>
            @endif
        </div>
    </div>
    <div class="separator clearfix">
        <p class="btn-add">
            <!--<a href="{{URL::to('/courses/'.$course->id)}}"> -->
            <a href="{{URL::to('/courses/'.$course->slug)}}">
                <i class="icon-export-4"></i>{{ trans('messages.subscribe') }}
            </a>
        </p>
        <p class="btn-details">
            <a href="{{URL::to('/courses/'.$course->slug)}}">
                <i class=" icon-list"></i> {{ trans('messages.details') }}
            </a>
        </p>
    </div>
</div>
</div>
