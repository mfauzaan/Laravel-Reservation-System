@extends('layouts.app')


  @section('content')

  	<div class="row">
  		<div class="col-md-8">
        <div class="col-md-offset-2">
        @include('partials._messeges')
        <h1>Booking ID: ML-00{{ $bookings->id}}</h1>
  			<hr>
        <h4><b>First Name:</b> {{ $bookings->first }}</h4>
        <h4><b>Last Name:</b> {{ $bookings->last }}</h4>
        <h4><b>Email: </b> {{ $bookings->email }}</h4>
        <h4><b>Phone No:</b> {{ $bookings->phone }}</h4>
        <h4><b>Adult:</b> {{ $bookings->adult }}</h4>
        <h4><b>Child:</b> {{ $bookings->child }}</h4>
        <h4><b>Room:</b> {{ $bookings->room }}</h4>
        <h4><b>Lunch:</b> {{ $bookings->lunch }}</h4>
        <h4><b>Special Requirment</b> {{ $bookings->bodyMessage }}</h4>
        </div>
      </div>

      <div class="col-md-4" style="padding-right: 100px;">

        <div class="well">
          <dt style="text-align: center;">Booking Date</dt>
          <hr>
          <dl class="dl-horizontal">
            <dt>Arrival </dt>
            <dd> {{ date( 'j M, Y', strtotime($bookings->arrival)) }}</dd>
          </dl>

          <dl class="dl-horizontal">
            <dt>Departure at: </dt>
            <dd> {{ date( 'j M, Y', strtotime($bookings->departure)) }}</dd>
          </dl>
<hr>
          <dl class="dl-horizontal">
            <dt>Created at: </dt>
            <dd> {{ date( 'j M, Y h:ia', strtotime($bookings->created_at)) }}</dd>
          </dl>
          <hr>

          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('bookings.index', 'Go Back', array($bookings->id), array('class' => 'btn btn-primary btn-block')) !!}
            </div>
            <div class="col-sm-6">
              {!! Form::open(['route' => ['bookings.destroy', $bookings->id], 'method' => 'DELETE']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

              {!! Form::close() !!}
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>


  @endsection
