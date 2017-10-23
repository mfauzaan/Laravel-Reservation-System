@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col col-md-8">

        <h1>Activities Information</h1>


      </div>
      <div class="col-md-2" style="padding-top: 2%;">
        <a href={{ route('activities.create') }} class="btn btn-success">Create Activity</a>
      </div>
    </div>
        <hr>
    <div class="row">
      @include('partials._messeges')
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>Title</th>
            <th>Body</th>
            <th></th>
            <th></th>
          </thead>

          <tbody>
            @foreach ($activity as $activity)
              <tr>
                <td><b>{{ $activity->title }}</b></td>
                <td>{{ substr($activity->body, 0,50)}} {{ strlen($activity->body) >50 ? "..." : ""}}</td>

                <td width="50px"><a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-default">Edit</a></td>
                <td >{!! Form::open(['route' => ['activities.destroy', $activity->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                {!! Form::close() !!}   </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a href={{ route('home') }} class="btn btn-primary">Back to Home</a>
  </div>
@endsection
