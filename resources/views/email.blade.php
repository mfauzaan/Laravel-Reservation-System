
@extends('layouts.app')

@section('content')
<style type="text/css">
	h3.center-text {
	    text-align: center;
	}
</style>
<div class="container">
	<h1 class="center-text">Sweet Alert using Laravel - Learn Infinity</h3>

	<div class="row">
		<div class="col-md-offset-2 col-md-8">

			@include('sweet::alert')

		</div>

	</div>

</div>

@endsection
