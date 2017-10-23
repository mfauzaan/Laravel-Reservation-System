@extends('layouts.app')


  @section('content')

  	<div class="row">
  		<div class="col-md-8">
        <div class="col-md-offset-2">
        @include('partials._messeges')
        <h1>{{ $contact->title }}</h1>
  			<hr>
  			<p>{{ $contact->body }}</p>
        </div>
      </div>

      <div class="col-md-4" style="padding-right: 100px;">

        <div class="well">
          <dl class="dl-horizontal">
            <dt>Created at: </dt>
            <dd>Time</dd>
          </dl>

          <dl class="dl-horizontal">
            <dt>Last Updated: </dt>
            <dd>Time</dd>
          </dl>
          <hr>

          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('contacts.edit', 'Edit', array($contact->id), array('class' => 'btn btn-primary btn-block')) !!}
            </div>
            <div class="col-sm-6">
              <a href="#" class="btn btn-danger btn-block">Delete</a>
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>


  @endsection
