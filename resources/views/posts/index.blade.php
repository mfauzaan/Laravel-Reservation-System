@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">

        <h1>Room Details</h1>
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
            <th>Title</th>
            <th>Body</th>
            <th></th>
            <th></th>
            <tbody>
              @foreach ($posts as $post)
                @continue ($post->id<=0)
                <tr>
                  <td><b>{{ $post->title }}</b></td>
                  <td>{{ substr($post->body, 0,50)}} {{ strlen($post->body) >50 ? "..." : ""}}</td>

                  <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a></td>
                </tr>
                @break($post->id==16)
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
    <div style="padding-bottom: 30px;">
        <a href={{ route('home') }} class="btn btn-primary">Back to Home</a>
    </div>

  </div>
@endsection
