<div class="modal fade" id="act-details-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
        <h4 class="modal-title light">Activities</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div id="room-images" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#room-images" data-slide-to="0" class="active"></li>
                <li data-target="#room-images" data-slide-to="1"></li>
                <li data-target="#room-images" data-slide-to="2"></li>
                <li data-target="#room-images" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="assets/images/default/300x250.png" alt="rooms-carousel">
                </div>
                <div class="item">
                  <img src="assets/images/default/300x250.png" alt="rooms-carousel">
                </div>
                <div class="item">
                  <img src="assets/images/default/300x250.png" alt="rooms-carousel">
                </div>
                <div class="item">
                  <img src="assets/images/default/300x250.png" alt="rooms-carousel">
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
                <h2>$54.82<small>/night</small></h2>
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
                <p class="light">Air conditioning, Private showers, Sinks and Toilets, Fresh linen, Bath towels</p>
                <div class="white-space-2"></div>
              </div>
              <div class="col-md-6">
                <h4 class="">Max Occupancy</h4>
                <span class="flaticon-man-silhouette"></span>
                <span class="flaticon-man-silhouette"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Description</h4>
            <p class="light">All rooms are designed and laid out to blend with the natural beauty of the island. All guest rooms have air conditioning, private showers, sinks and toilets. Fresh linen, towels and bath towels are included. We include three meals, snacks and non-alcoholic beverages such as water, soda, juice, coffee and tea. Lunch, depending on daily planning, will be in the guesthouse or as a picnic or BBQ held at one of your trips.</p>
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Payment Terms</h4>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci accusamus unde omnis qui sint at perspiciatis expedita deleniti maxime odio velit deserunt, reiciendis suscipit id maiores, hic dicta rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quibusdam nihil voluptatum aliquam voluptates laboriosam magni commodi impedit nulla, neque officia sequi facere, dignissimos magnam vero ratione non eveniet tempora!</p>
          </div>
        </div>
        <div class="white-space-2"></div>
        <div class="row">
          <div class="col-xs-12">
            <h4>Cancellation Policy</h4>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae fugit ipsum natus neque numquam debitis quis, nihil. Sint laborum porro, perspiciatis illum, pariatur obcaecati quia aliquam officia consequatur voluptatibus impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, ducimus cumque nulla. Voluptatem eligendi nihil laborum cupiditate adipisci aliquam temporibus voluptatibus quo blanditiis aperiam quaerat, expedita, magni voluptates delectus at.</p>
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
          <form>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Arrival" data-provide="datepicker">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Departure" data-provide="datepicker">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control">
                  <option disabled selected>Adults</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control">
                  <option disabled selected>Children</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control">
                  <option disabled selected>Room</option>
                  <option>Deluxe A</option>
                  <option>Deluxe B</option>
                  <option>Twin</option>
                  <option>Double A</option>
                  <option>Double B</option>
                  <option>Double C</option>
                  <option>Suite</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control">
                  <option disabled selected>Include Lunch</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea rows="5" class="form-control" placeholder="Special Requests"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> <span class="light">I agree to the Terms &amp; Conditions</span>
                  </label>
                </div>
                <a href="#." class="button ghost white">Confirm and Book</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
