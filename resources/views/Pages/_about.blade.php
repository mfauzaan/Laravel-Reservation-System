<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1 class="title white-space-6">
        memorable <span class="normal dark-grey">stay</span><br>
        in Magic <span class="normal colored">life hotel</span><br>
      </h1>
    </div>
    <div class="col-md-6">
      <h4 class="light underline uppercase">About Our Hotel</h4>
      <p class="light">Experience a memorable stay in Magic life hotel located in a beautiful local island community tourism and spend time with the locals and get to know the true Maldivian life style and be welcomed as part of the local community. All your Maldives dreams can come true at magic life hotel.</p>
      <p class="light"></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="row white-space-2">
        <div class="col-xs-6">
          @foreach($posts as $post)
            @continue ($post->id<=10)
            <img src="{{asset('/images/' . $post->image)}}" class="img-responsive" alt="about-image">
            @break($post->id==11)
          @endforeach
        </div>
        <div class="col-xs-6">
          @foreach($posts as $post)
            @continue ($post->id<=11)
            <img src="{{asset('/images/' . $post->image)}}" class="img-responsive" alt="about-image">
            @break($post->id==12)
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          @foreach($posts as $post)
            @continue ($post->id<=12)
            <img src="{{asset('/images/' . $post->image)}}" class="img-responsive" alt="about-image">
            @break($post->id==13)
          @endforeach
        </div>
        <div class="col-xs-6">
          @foreach($posts as $post)
            @continue ($post->id<=13)
            <img src="{{asset('/images/' . $post->image)}}" class="img-responsive" alt="about-image">
            @break($post->id==14)
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h4 class="light underline uppercase white-space-2">About Maldives</h4>
      <p class="light">The Maldives, known to the locals in their native language (Dhivehi) as Dhivehi Raajje, are an archipelago of 1,192 coral islands grouped into 26 natural coral atolls in the Indian Ocean. They lie south-southwest of India and west of Sri Lanka. None of the coral islands measures more than 1.8 metres above sea level. Only 192 islands are inhabited by its 300,000 inhabitants. The rest of the islands remain virgin islands except for more than 100 islands that have been developed for the top end of the tourist market. With its abundant sea life and sandy beaches, The Maldives is portrayed by travel companies as a tropical paradise. Maldives was for the most part unknown to tourists until the early 1970s. The economy revolves around tourism, and fisheries.Tourism accounts for 28% of the GDP. Over 90% of the state government income comes from import duties and tourism-related taxes.</p>
    </div>
  </div>
  <div class="white-space-3"></div>
  <div class="row">
    <div class="col-md-6">
      <h1 class="title white-space-7">
        Discover <span class="normal dark-grey">the</span><br>
        <span class="normal colored">Sunny side</span> of Life<br>
      </h1>
    </div>
    <div class="col-md-6">
      <h4 class="light underline uppercase">Customer Reviews</h4>
      <div class="owl-carousel owl-theme">
        <div class="white-space-2">
          <span class="light">Randi Letendre</span>
          <br>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <br><br>
          <p>Best Hotel ever!!!</p>
          <p class="light">beautiful hotel! the complimentaries (tea, espresso, breakfast bars, juice) were a nice touch, nice features in the room. key card is tap on the door, dimmable lights, dual head rain shower with adjustable pressure, wonderful river view, super comfy bed and very clean!! Also free parking for guests although the lot is quite small. recommend!!</p>
        </div>
        <div class="white-space-2">
          <span class="light">Shannon Peppard</span>
          <br>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <br><br>
          <p>Great Food, Great Stay!</p>
          <p class="light">The hotel and staff are exeptional!  Room and atmosphere amazing. However we were travelling through with a rare antique vehicle and we're assured it was a safe location and they had security cameras that were monitored regularly.  We still were not confident, so we asked another guest to use her car to baracade our vehicle. Also another truck parked beside us to offer protection. </p>
        </div>
        <div class="white-space-2">
          <span class="light">Derek</span>
          <br>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape tiny-icon"></span>
          <span class="flaticon-shape-2 tiny-icon"></span>
          <br><br>
          <p>Quality accommodations at a reasonable price</p>
          <p class="light">The hotel is well located for restaurants, sight seeing and in a quiet neighbourhood for being in the downtown area. The staff were knowledgable, courteous and helpful throughout our stay.</p>
        </div>
      </div>
    </div>
  </div>
</div>
