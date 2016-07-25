<section id="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h1>{{ $course->name }}</h1>
                <p class="lead boxed">{{ $course->description }}</p>
                @if( isset($knowledgeunit) )
                <p class="lead">{{ $knowledgeunit->name }}</p>
                @endif
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->
