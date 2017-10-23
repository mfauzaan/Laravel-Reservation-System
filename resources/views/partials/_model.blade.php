<div class="modal fade" id="room-details-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
        <h4 class="modal-title light">Rooms</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div id="room-images" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#room-images" data-slide-to="0" class="active"></li>
                <li data-target="#room-images" data-slide-to="1"></li>
                <li data-target="#room-images" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  @foreach($posts as $post)
                    @continue ($post->id<=7)
                    <img src="{{asset('/images/' . $post->image)}}" alt="rooms-carousel"/>
                    @break($post->id==8)
                  @endforeach
                </div>
                <div class="item">
                  @foreach($posts as $post)
                    @continue ($post->id<=8)
                    <img src="{{asset('/images/' . $post->image)}}" alt="rooms-carousel"/>
                    @break($post->id==9)
                  @endforeach
                </div>
                <div class="item">
                  @foreach($posts as $post)
                    @continue ($post->id<=9)
                    <img src="{{asset('/images/' . $post->image)}}" alt="rooms-carousel"/>
                    @break($post->id==10)
                  @endforeach
                </div>
              </div>

            <a class="left carousel-control" href="#room-images" role="button" data-slide="prev">
              <span class="arrow flaticon-back" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#room-images" role="button" data-slide="next">
              <span class="arrow flaticon-next" aria-hidden="true"></span>
            </a>
            </div>
            <div class="white-space-2"></div>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-sm-6">
                @foreach($posts as $post)
                  @continue ($post->id<=1)
                  <h2>{{ $post->body }}<small>/night</small></h2>
                  @break($post->id==2)
                @endforeach
                <p class="light">Breakfast Included</p>
              </div>
              <div class="col-sm-6">
                <button class="button ghost white hotel-book-now" data-toggle="modal" data-target="#booking-form-modal">Book Now</button>
              </div>
            </div>
            <div class="white-space-1"></div>
            <div class="row">
              <div class="col-md-6">
                <h4>Room Amenities</h4>
                @foreach($posts as $post)
                  @continue ($post->id<=2)
                  <p class="light">{{ $post->body }}</p>
                  @break($post->id==3)
                @endforeach
                <div class="white-space-2"></div>
              </div>
              <div class="col-md-6">
                <h4 class="">Max Occupancy</h4>
                @foreach($posts as $post)
                  @continue ($post->id<=3)
                    @for ($i=0; $i < $post->body; $i++)
                      <span class="flaticon-man-silhouette"></span>
                    @endfor
                  @break($post->id==4)
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Description</h4>
              @foreach($posts as $post)
                @continue ($post->id<=4)
                <p class="light">{{ $post->body }}</p>
                @break($post->id==5)
              @endforeach
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Payment Terms</h4>
              @foreach($posts as $post)
                @continue ($post->id<=5)
                <p class="light">{{ $post->body }}</p>
                @break($post->id==6)
              @endforeach
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Cancellation Policy</h4>
            @foreach($posts as $post)
              @continue ($post->id<=6)
              <p class="light">{{ $post->body }}</p>
              @break($post->id==7)
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="booking-form-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
        <h4 class="modal-title light" ><span class="flaticon-calendar"></span> Booking Form</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="{{ url('/') }}" method="POST">
                          {{ csrf_field() }}

                          <div class="col-md-6">
            								<div class="form-group">
            									<input type="text" id="first" required name="first" class="form-control" placeholder="First Name">
            								</div>
            							</div>

            							<div class="col-md-6">
            								<div class="form-group">
            									<input type="text" id="last" required name="last" class="form-control" placeholder="Last Name">
            								</div>
            							</div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" id="email" required name="email" class="form-control" placeholder="Email Address">
                            </div>
                          </div>

                          <div class="col-md-6">
            								<div class="form-group">
            									<input type="text" id="phone" required name="phone" class="form-control" placeholder="Phone Number">
            								</div>
            							</div>

                          <div class="input-daterange" data-provide="datepicker" data-date-start-date="today" data-data-keyboard-navigation="false">
                            <div class="form-group">
                              <div class="col-md-6">
                              <input   style="text-align: left" type="text" id="arrival"  required name="arrival" class="form-control" placeholder="Arrival">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input  style="text-align: left;" type="text" id="departure" required name="departure" class="form-control" placeholder="Departure">
                            </div>
                          </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group">
                              <select required class="form-control" id="adult" name="adult">
                                  <option disabled selected value="">Adult</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                </select>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-6">
            								<div class="form-group">
            									<select class="form-control" id="child" name="child">
                                <option disabled selected value="">Child</option>
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
            									</select>
            								</div>
            							</div>

                          <div class="col-md-6">
            								<div class="form-group">
            									<select required class="form-control" id="room" name="room">
                                <option disabled selected value="">Rooms</option>
                                <option value="1">Dulex</option>
                                <option value="2">Single</option>
            									</select>
            								</div>
            							</div>

                          <div class="col-md-6">
            								<div class="form-group">
            									<select class="form-control" id="lunch" name="lunch" required>
                                <option disabled selected value="">Include BnB</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
            									</select>
            								</div>
            							</div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <textarea id="bodyMessage" name="bodyMessage" rows="5" class="form-control" placeholder="Special Requests"></textarea>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input required type="checkbox" name="terms"> <span class="light">I agree to the Terms &amp; Conditions</span>
                                </label>
                              </div>
                              <input type="submit" value="Request for Booking" class="button ghost white">
                            </div>
                          </div>
                      </form>

        </div>
      </div>
    </div>
  </div>
</div>
