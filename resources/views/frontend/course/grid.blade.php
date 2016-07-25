@extends('frontend.layout.app')

@section('content')
    @if(count($courses)>0)
    {{-- */$x=0;/* --}}
    <section id="main_content">
        <div class="container">
            <div class="row">

                <aside class="col-lg-3 col-md-4 col-sm-4">
                    <div class="box_style_1">
                        <h4>{{ trans('messages.categories') }}</h4>
                        <ul class="submenu-col">
                            <li><a href="#" id="active" class="load">{{ trans('messages.all_courses') }}</a></li>
                            @foreach ($categories as $category)
                               <li><a href="#" class="load">{{$category->name}}</a></li>
                            @endforeach
                        </ul>

                        <hr>

                        <!--<h5>Upcoming Courses</h5>
                        <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu blandit diam, at faucibus mi ante vel augue.</p>
                        -->
                  </div>
                </aside>

                <!-- Courses Sub Grid-->
                <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="row">
                    @foreach ($courses as $course)
                        {{-- */$x++;/* --}}

                        <div class="col-lg-4 col-md-6">
                            @include('frontend.course.item')
                        </div>
                    @endforeach
                    </div>
                {!! $courses->render() !!}
                </div>

            </div><!-- End container -->
        </div>  <!-- End row -->
    </section> <!-- End main content -->
    @endif
@endsection

@section('scripts')
<script type="text/javascript">
  $(".load").click(function(){
    alert( $(this).text() );
  });
</script>
@endsection
