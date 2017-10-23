@extends('layouts.app')


  @section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-10">
          @include('partials._messeges')
          <h2>Admin Panel</h2>

        </div>
        <div class="col-md-2">
        </div>
      </div>
        <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="col-lg-3 col-sm-6">
            <!-- START widget-->
            <div class="panel bg-primary" style="background-color: #5d9cec;">
              <div class="row" style="margin-bottom: 20px; text-align: center;">
                <a href="{{ route('contacts.index') }}" style="color:white; background-color: #E4F5F8;text-decoration: none !important;">
                  <div class="btn-xs">
                    <h2>Update</h2>
                    <h5 class="text-uppercase">General Information</h2>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- START widget-->
            <div class="col-lg-3 col-sm-6">
              <div class="panel bg-primary" style="background-color: #564aa3;">
                <div class="row" style="margin-bottom: 20px; text-align: center;">
                  <a href="{{ route('posts.index') }}" style="color:white; background-color: #E4F5F8;text-decoration: none !important;">
                    <div class="btn-xs">
                      <h2>Update</h2>
                      <h5 class="text-uppercase">Room Details</h2>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- START widget-->
              <div class="col-lg-3 col-sm-6">
                <div class="panel bg-primary" style="background-color: #2b957a;">
                  <div class="row" style="margin-bottom: 20px; text-align: center;">
                    <a href="{{ route('activities.index') }}" style="color:white; background-color: #E4F5F8;text-decoration: none !important;">
                      <div class="btn-xs">
                        <h2>Update</h2>
                        <h5 class="text-uppercase">Activites</h2>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- START widget-->
                <div class="col-lg-3 col-sm-6">
                  <div class="panel bg-primary" style="background-color: #f05050;">
                    <div class="row" style="margin-bottom: 20px; text-align: center;">
                      <a href="{{ route('bookings.index') }}" style="color:white; background-color: #E4F5F8;text-decoration: none !important;">
                        <div class="btn-xs">
                          <h2>View</h2>
                          <h5 class="text-uppercase">Booking History</h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  @endsection
