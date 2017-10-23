@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">

        <h1>Booking History</h1>
        <hr>
      </div>
      <div class="col-md-2">
      </div>
    </div>

    <div class="row">
      @include('partials._messeges')
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>Booking ID</th>
            <th>Room</th>
            <th>Email</th>
            <th>Name</th>
            <th></th>
            <tbody>
              @foreach ($bookings as $booking)
                @continue ($booking->id<=0)
                <tr>
                  <td><b>{{ $booking->id }}</b></td>
                  <td><b>{{ $booking->room }}</b></td>
                  <td><b>{{ $booking->email }}</b></td>
                  <td><b>{{ $booking->first }} {{ $booking->Last }}</b></td>
                  <td><a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-default">View</a></td>
                </tr>
                @break($booking->id==10)
              @endforeach
            </tbody>
        </table>
        <div class="text-center">
          {!! $bookings->links(); !!}
        </div>
      </div>
    </div>
        <a href={{ route('home') }} class="btn btn-primary">Back to Home</a>
  </div>
@endsection
