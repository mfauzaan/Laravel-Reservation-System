@extends('layouts.app')


  @section('content')

  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
        @include('partials._messeges')
  			<h1>Create New Post</h1>
  			<hr>

        {!! Form::open(array('route' => 'contacts.store', 'files'=> true)) !!}
  				{{ Form::label('title', 'Title:') }}
  				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}


  				{{ Form::label('body', "Post Body:") }}
  				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

          <div class="col-sm-6">

          <a style="margin-top:20px;" href={{ route('home') }} class="btn btn-danger btn-lg btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
          {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
          </div>
  			{!! Form::close() !!}
  		</div>
  	</div>

  @endsection
