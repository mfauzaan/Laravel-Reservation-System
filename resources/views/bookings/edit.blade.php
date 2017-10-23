@extends('layouts.app')


  @section('content')

  	<div class="row">
  		<div class="container">
        <h1>{{ $bookings->first }}</h1>
  			<hr>

        <div class="row">
          {!! Form::model($bookings, ['route' => ['posts.update', $bookings->id], 'method' => 'PUT', 'files'=> true]) !!}

          {{ Form::label('title', "Title:", ['class' => 'form-spacing-top']) }}
          {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

          {{ Form::label('featured', 'Update a Featured Image') }}
          {{ Form::file('featured') }}

            {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}

              <hr>
              <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                  <div class="col-sm-6">
                  {!! Html::linkRoute('posts.index', 'Cancel', array($bookings->id), array('class' => 'btn btn-danger btn-block')) !!}
                  </div>
                  <div class="col-sm-6">
                  {{ Form::submit('Save Changes', ['class' => 'btn btn-success  btn-block']) }}
                  </div>
              </div>

          {!! Form::close() !!}
      	</div>	<!-- end of .row (form) -->
  </div>
</div>

  @endsection
