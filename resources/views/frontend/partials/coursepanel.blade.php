<section id="course-panel">
	<div class="container-fluid">
    	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<a href="{{ URL::to('/courses') }}" class="thumbnail">
					  	<img src="img/basic_courses.jpg" alt="{{ trans('messages.basiccourse') }}">
					</a>
				</div>
				<div class="col-xs-12 col-md-6">
					<a href="{{ URL::to('/courses') }}" class="thumbnail">
				  		<img src="img/advanced_courses.jpg" alt="{{ trans('messages.advancourse') }}">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>