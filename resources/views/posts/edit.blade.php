@extends('layouts.app')


  @section('content')

  	<div class="row">
  		<div class="container">
        <h1>{{ $post->title }}</h1>
  			<hr>

        <div class="row">
          {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files'=> true]) !!}

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
                  {!! Html::linkRoute('posts.index', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
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
