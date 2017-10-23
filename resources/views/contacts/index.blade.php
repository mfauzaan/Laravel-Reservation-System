@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">

        <h1>General Information</h1>
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
          </thead>

          <tbody>
            @foreach ($contacts as $contact)
              @continue ($contact->id<=0)
              <tr>
                <td><b>{{ $contact->title }}</b></td>
                <td>{{ substr($contact->body, 0,50)}} {{ strlen($contact->body) >50 ? "..." : ""}}</td>

                <td><a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-default">Edit</a></td>
              </tr>
              @break($contact->id==12)
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
        <a href={{ route('home') }} class="btn btn-primary">Back to Home</a>
  </div>
@endsection
