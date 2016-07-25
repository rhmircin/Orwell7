@extends('frontend.layout.app')
@section('content')
  <section id="map"></section><!-- end map-->
  <section id="directions">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
       <form action="http://maps.google.com/maps" method="get" target="_blank">
        <div class="input-group">
          <input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
          <input type="hidden" name="daddr" value="Velasco Astete, Lima, Perú"/><!-- Write here your end point -->
          <span class="input-group-btn">
          <button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
          </span>
        </div><!-- /input-group -->
      </form>
          </div>
        </div>
    </div>
  </section>
@endsection

@section('scripts')
  <!-- GOOGLE MAP -->
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="js/mapmarker.jquery.js"></script>
  <script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>

  <script src="js/classie.js"></script>
@endsection
