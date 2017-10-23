<div class="container">
  <div class="row">



      @include('partials._messeges')
    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
      <h6 class="light grey uppercase letter-spacing"></h6>
      <h2 class="light dark-grey underline uppercase">ACCOMODATIONS</h2>
    </div>
  </div>
  <div class="white-space-2"></div>
  <div class="row">
    <div class="col-md-6">
      <div class="room-image">
        <a href="#" data-toggle="modal" data-target="#room-details-modal"><i class="flaticon-search"></i></a>
        @foreach($posts as $post)
          @continue ($post->id<=7)
          <img class="img-responsive" src="{{asset('/images/' . $post->image)}}" alt="room-image"/>
          @break($post->id==8)
        @endforeach
      </div>
      <div class="white-space-2"></div>
    </div>
    <div class="col-md-6">
      <h2 class="colored">Rooms</h2>
        @foreach($posts as $post)
          @continue ($post->id<=0)
          <p class="light">{{ $post->body }}</p>
          @break($post->id==1)
        @endforeach
      <button class="button large" data-toggle="modal" data-target="#room-details-modal">View Details</button>
    </div>
  </div>
</div>
<div class="white-space-3"></div>
