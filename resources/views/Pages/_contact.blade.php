<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
      <h6 class="light grey uppercase letter-spacing">Get in touch</h6>
      <h2 class="light dark-grey underline uppercase">Contact Us</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-xs-12">
          <p class="light text-center-xs text-center-sm">Have a question? Please contact using the details below.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h4 class="white-space-2 colored">Main Office</h4>
          <ul class="list-unstyled">
            @foreach($contact as $contacts)
              @continue ($contacts->id<=0)
              <li><i class="flaticon-technology"></i> {{ $contacts->body }}</li>
              @break($contacts->id==1)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=1)
              <li><i class="flaticon-mail"></i> {{ $contacts->body }}</li>
              @break($contacts->id==2)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=5)
              <li><i class="flaticon-location-pin"></i> {{ $contacts->body }}</li>
              @break($contacts->id==6)
            @endforeach
          </ul>
        </div>
        <div class="col-sm-6">
          <h4 class="white-space-2 colored">Island Office</h4>
          <ul class="list-unstyled">
            @foreach($contact as $contacts)
              @continue ($contacts->id<=6)
              <li><i class="flaticon-technology"></i> {{ $contacts->body }}</li>
              @break($contacts->id==7)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=7)
              <li><i class="flaticon-mail"></i> {{ $contacts->body }}</li>
              @break($contacts->id==8)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=8)
              <li><i class="flaticon-location-pin"></i> {{ $contacts->body }}</li>
              @break($contacts->id==9)
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 white-space-2">
          <ul id="social-media-contact" class="list-inline">
            @foreach($contact as $contacts)
              @continue ($contacts->id<=2)
              <li><a href="{{ $contacts->body }}" class="flaticon-facebook-logo-in-circular-button-outlined-social-symbol"></a></li>
              @break($contacts->id==3)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=3)
              <li><a href="{{ $contacts->body }}" class="flaticon-twitter-circular-button"></a></li>
              @break($contacts->id==4)
            @endforeach
            @foreach($contact as $contacts)
              @continue ($contacts->id<=4)
                <li><a href="{{ $contacts->body }}" class="flaticon-instagram"></a></li>
              @break($contacts->id==5)
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
          <div id="map"></div>
  </div>
</div>
