<div class="container">
  <div class="row waypoint" data-animate="slideInLeft" data-offset="70">
    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
      <h6 class="light grey uppercase letter-spacing"></h6>
      <h2 class="light dark-grey underline uppercase">ACTIVITIES</h2>
    </div>
  </div>
  <div class="row waypoint" data-offset="70">
    <div class="col-xs-12">
      <div class="filtr-container row text-center">

        @foreach($activity as $activities)
          @continue ($activities->id<=0)
          <div class="filtr-item col-md-4" data-category="1, 4">
            <div class="white-space-2 room-box">
              <div class="room-image">
                <a ><i class="flaticon-bars"></i></a>
                <img class="img-responsive" src="{{asset('/images/' . $activities->image)}}" alt="room-image">
              </div>
              <h4 class="room-type">{{ $activities->title }}</h4>
              <p class="light">{{ $activities->body }}</p>
            </div>
          </div>
          @break($activities->id==1000)
        @endforeach


        <div class="white-space-5"></div>
      </div>
    </div>
  </div>
</div>
