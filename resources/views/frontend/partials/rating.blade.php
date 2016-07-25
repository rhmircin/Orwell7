@if($rateval > 0)
    @for ($x = 1; $x <= $rateval; $x++)
        <a href="{{URL::to('/courses/'.$course->slug.'/rate/'.$x)}}">
            <i class=" icon-star"></i>
        </a>
    @endfor
    {{-- */$rateval++;/* --}}
    @for ($x = $rateval; $x <= 5; $x++)
        <a href="{{URL::to('/courses/'.$course->slug.'/rate/'.$x)}}">
            <i class=" icon-star-empty"></i>
        </a>
    @endfor
@else
    @foreach ( array(1, 2, 3, 4, 5) as $x )
    <a href="{{URL::to('/courses/'.$course->slug.'/rate/'.$x)}}">
        <i class=" icon-star-empty"></i>
    </a>
    @endforeach
@endif
