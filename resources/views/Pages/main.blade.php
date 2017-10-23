@extends('partials.header')


@section('home')
	<section id="home" class="hero">
		@include('pages._home')
	</section>
@endsection


@section('rooms')
	<section id="rooms" class="white-space-5 light-bg">
		@include('pages._rooms')
	</section>
@endsection

@section('dining')
	<section id="dining" class="white-space-5">
		@include('pages._dining')
	</section>
@endsection

@section('meetings')
	<section id="meetings-and-events" style="background-image: url('assets/images/default/image.jpg')">
		@include('pages._meetings')
	</section>
@endsection

@section('about')
	<section id="about" class="white-space-5">
		@include('pages._about')
	</section>
@endsection

@section('contact')
	<section id="contact-us" class="white-space-5 light-bg">
		@include('pages._contact')
	</section>
 <!-- <div id="map"></div> --!>
@endsection
