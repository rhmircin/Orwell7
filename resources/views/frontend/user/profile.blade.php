@extends('frontend.layout.app')

@section('styles')
<!-- AGENDA CALENDAR V.1.3-->
<link href="{{ asset('css/fullcalendar.css') }}" rel='stylesheet'>
<link href="{{ asset('css/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
@endsection

@section('content')
<section id="main_content">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="{{ URL::to('/')}}">Home</a></li>
		  <li class="active">Active page</li>
		</ol>

		<div class="row">
			<div class="col-md-12">

				<!--  Tabs -->   
				<ul class="nav nav-tabs" id="mytabs">
					<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
					<li><a href="#courses" data-toggle="tab">My Courses / Downloads</a></li>
					<li><a href="#agenda" data-toggle="tab">My Agenda</a></li>
					<li><a href="#plans" data-toggle="tab">Plans/billing</a></li>
				</ul>

				<div class="tab-content">

					<div class="tab-pane fade in active" id="profile">
						<div class="row">
							<aside class="col-md-4">
							{{ Form::open(array('route' => 'profile.save', 'files' => true)) }}
								<div class=" box_style_1 profile">
									<p class="text-center" id='imageinput'>
										@if (Storage::disk('local')->has($user->first_name . '-' . $user->id . '.jpg'))
											<img src="{{ route('profile.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" alt="" class="img-circle styled width100">
										@else
											<img src="img/teacher_2_small.jpg" alt="Teacher" class="img-circle styled">
										@endif
									</p>
									
									{{ Form::file('image', array('class' => 'imginput')) }}
									<ul>
										<li>
											@include('frontend.partials.errors')
										</li>
										<li>{{ trans('messages.name') }}
											<strong class="pull-right">{{ $user->name }}</strong> 
										</li>
										<li>{{ trans('messages.email') }}
											<strong class="pull-right">{{ $user->email }}</strong>
										</li>
										<li>{{ trans('messages.telephone') }}
											<div class="pull-right">
												{{ Form::text('telephone', empty($user->telephone) ? '' : $user->telephone) }}
											</div>  
										</li>
										<li>{{ trans('messages.country') }}
											<div> <!-- class="styled-select" -->
												@include('frontend.country.list')
											</div>
										</li>
										<li>{{ trans('messages.gender') }}
											<div>
												@include('frontend.gender.list')
											</div>
										</li>
										<li>{{ trans('messages.education') }}
											<div>
												@include('frontend.education.list')
											</div>
										</li>
										<li>{{ trans('messages.dob') }}
											{{ Form::date('dateofbirth', empty($user->dateofbirth) ? \Carbon\Carbon::now() : $user->dateofbirth) }}
										<li> 
											{{ Form::submit('Update Profile', ['class' => 'btn btn-primary form-control no-margin-bottom']) }}
										</li>
									</ul>
									
								</div><!-- End box-sidebar -->
							{{ Form::close() }}
							</aside><!-- End aside -->
							<div class="col-md-8">
								<h3>Biography</h3>
								<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
								<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
								<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
							</div><!-- End col-md-8 -->
						</div><!-- End row -->
					</div><!-- End tab-pane --> 

					<div class="tab-pane fade" id="courses">
						<h3>Courses you're following</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. </p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Category</th>
										<th>Course name</th>
										<th>Date Purchased</th>
										<th>Progress</th>
										<th>Downloads</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Business</td>
										<td><a href="#">Business Plan</a></td>
										<td>20/04/2015</td>
										<td><img src="img/bullet_complete_2.png" alt=""> Completed</td>
										<td><a href="#"><i class="icon-video"></i> Videos</a></td>
									</tr>
									<tr>
										<td>Math</td>
										<td><a href="#">12 Principles</a></td>
										<td>20/04/2015</td>
										<td><img src="img/bullet_progress_2.png" alt=""> In progress</td>
										<td><a href="#"><i class="icon-mic"></i> Audio</a></td>
									</tr>
									<tr>
										<td>Litterature</td>
										<td><a href="#">Poetry course</a></td>
										<td>20/04/2015</td>
										<td><img src="img/bullet_start_2.png" alt=""> Not started</td>
										<td><a href="#"><i class="icon-doc"></i> Doc</a></td>
									</tr>
									<tr>
										<td>Biology</td>
										<td><a href="#">Fundamentals</a></td>
										<td>20/04/2015</td>
										<td><img src="img/bullet_start_2.png" alt=""> Not started</td>
										<td><a href="#"><i class="icon-doc"></i> Doc</a></td>
									</tr>
									<tr>
										<td>Marketing</td>
										<td><a href="#">12 Principles</a></td>
										<td>20/04/2015</td>
										<td><img src="img/bullet_progress_2.png" alt=""> In progress</td>
										<td><a href="#"><i class="icon-video"></i> Videos</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!-- End tab-pane --> 

					<div class="tab-pane fade" id="agenda">

						<div class="row">
							<aside class="col-md-4">
								<div class="box_style_1"  id="external-events">
									<h4>Draggable Events</h4>
									<div class='external-event'>Coffe Break</div>
									<div class='external-event'>Meeting</div>
									<div class='external-event'>Lesson</div>
									<div class='external-event'>Exam</div>
									<p><input type='checkbox' id='drop-remove' /><label for='drop-remove'>remove after drop</label></p>
								</div>
							</aside>

							<div class="col-md-8">
								<div id="calendar"></div><!-- End calendar --> 
							</div>

						</div><!-- End row --> 

					</div><!-- End tab-pane --> 

					<div class="tab-pane fade" id="plans">
						<h3>Change your Payment method</h3>
						<div  id="payment_opt">
							<label class="radio-inline">
								<input type="radio" id="" value="" name="payment" checked><img src="img/logo_paypal.png" alt="Paypal" class="payment_logos">
							</label>
							<label class="radio-inline">
								<input type="radio" id="" value="" name="payment"><img src="img/logo_visa.png" alt="Card" class="payment_logos">
							</label>
							<label class="radio-inline">
								<input type="radio" id="" value="" name="payment"><img src="img/logo_master.png" alt="Card" class="payment_logos">
							</label>
							<label class="radio-inline">
								<input type="radio" id="" value="" name="payment"><img src="img/logo_maestro.png" alt="Card" class="payment_logos">
							</label>
						</div>       
						<hr>                     

						<h3>Order summary</h3>
						<div class="table-responsive">             
							<table class="table table-hover " style="margin-bottom:0;">
								<thead>
									<tr>                
										<th>Items</th>
										<th>Amount</th>                 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Price of the course</td>
										<td>€0.99</td>
									</tr>
									<tr class="info" style="border-top: 2px solid #ccc; border-bottom: 2px solid #ccc; font-size:18px">
										<td><strong>TOTAL</strong></td>
										<td><strong>€0.99</strong></td>
									</tr>
									<tr>
										<td><small>without VAT</small></td>
										<td><small>€ 0.83</small></td>
									</tr>
									<tr>
										<td><small>VAT (19%)</small></td>
										<td> <small>€0.16</small> </td>
									</tr>

								</tbody>
							</table>
						</div>
					</div><!-- End tab-pane --> 

				</div><!-- End col-md-8-->   
			</div>
		</div><!-- End row-->   
	</div><!-- End container -->
</section><!-- End main_content-->	
@endsection

@section('scripts')
<!-- LEARN V.1.3 AGENDA CALENDAR --> 
<script src='js/moment.min.js'></script>
<script src='js/jquery-ui.custom.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/fullcalendar_func.js'></script>
<script src='js/profile.js'></script>
@endsection