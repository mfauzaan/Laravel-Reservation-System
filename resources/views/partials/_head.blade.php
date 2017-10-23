<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Magic Light Guest House</title>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
	<!-- FLATICON -->
	<link href="assets/plugins/flaticon/font/flaticon.css" rel="stylesheet">
	<!-- ANIMATE CSS -->
	<link href="assets/css/animate.css" rel="stylesheet">
	<!-- VEGAS CSS -->
	<link href="assets/plugins/vegas/vegas.min.css" rel="stylesheet">
	<!-- OWL CAROUSEL -->
	<link href="assets/plugins/owl/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/plugins/owl/owl.theme.default.min.css" rel="stylesheet">
	<!-- BOOTSTRAP DATEPICKER -->
	<link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!-- BOOTSTRAP -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- TEMPLATE STYLE -->
	<link href="assets/css/style.css" rel="stylesheet">

<script type="text/javascript">
$('body').on('touchmove', function(e){
if($('.scroll-disable').has($(e.target)).length) e.preventDefault();
});
$('body').on('shown.bs.modal', function(){
$(this).addClass('scroll-disable');
});
$('body').on('hidden.bs.modal', function(){
$(this).removeClass('scroll-disable');
});
</script>



	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<div class="site-wrapper">
  <div class="site-header">
    <div class="container">
      <!-- TOP HEADER -->
      <div id="top-header" class="row hidden-xs hidden-sm hidden-md">
        <div class="col-md-6">
					@foreach($contact as $contacts)
						@continue ($contacts->id<=1)
						  <span><i class="flaticon-mail"></i> {{ $contacts->body }}</span>
						@break($contacts->id==2)
					@endforeach
					@foreach($contact as $contacts)
						@continue ($contacts->id<=0)
						<span><i class="flaticon-technology"></i> {{ $contacts->body }}</span>
						@break($contacts->id==1)
					@endforeach


        </div>
        <div class="col-md-6 text-right">
          <ul id="social-media-header">
						@foreach($contact as $contacts)
							@continue ($contacts->id<=2)
							<li><a href="{{ $contacts->body }}" class="flaticon-facebook-logo-in-circular-button-outlined-social-symbol"></a></li>
							@break($contacts->id==3)
						@endforeach
						@foreach($contact as $contacts)
							@continue ($contacts->id<=3)
							<li><a href="{{ $contacts->body }}" class="flaticon-twitter-circular-button"></a></li>
							@break($contacts->id==4)
						@endforeach
						@foreach($contact as $contacts)
							@continue ($contacts->id<=4)
								<li><a href="{{ $contacts->body }}" class="flaticon-instagram"></a></li>
							@break($contacts->id==5)
						@endforeach
          </ul>
        </div>
      </div> <!-- END OF TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="main-header" class="row">
        <div class="col-md-4 col-xs-9 logo-header" >
						<img  class="img-responsive top-vlogo sticky-logo" src="assets/images/default/logo-04.png">
						<img  class="img-responsive top-logo" src="assets/images/default/logo-03.png">
        </div>
        <div class="col-md-8 col-xs-12 text-right hidden-xs hidden-sm">
          <ul id="main-nav">
            <li><a href="#home" class="smooth-scroll animated-underline">Home</a></li>
            <li><a href="#rooms" class="smooth-scroll animated-underline">Rooms</a></li>
            <li><a href="#dining" class="smooth-scroll animated-underline">ACTIVITIES</a></li>
            <li><a href="#meetings-and-events" class="smooth-scroll animated-underline">RESTAURENTS</a></li>
            <li><a href="#about" class="smooth-scroll animated-underline">About</a></li>
            <li><a href="#contact-us" class="smooth-scroll animated-underline">Contact Us</a></li>
            <li><a href="#" class="button" data-toggle="modal" data-target="#booking-form-modal">Book Now</a></li>
          </ul>
        </div>
        <div class="col-xs-3 hidden-md hidden-lg">
          <a href="#" id="mobile-menu-btn" class="pull-right"><i class="flaticon-bars"></i></a>
          <div id="mobile-menu">
            <a href="#" id="close-mobile-menu-btn"><i class="flaticon-cross-out"></i> Close</a>
            <ul>
              <li><a href="#home" class="smooth-scroll">Home</a></li>
              <li><a href="#rooms" class="smooth-scroll">Rooms</a></li>
              <li><a href="#dining" class="smooth-scroll">ACTIVITIES</a></li>
              <li><a href="#meetings-and-events" class="smooth-scroll">RESTAURENTS</a></li>
              <li><a href="#about" class="smooth-scroll">About</a></li>
              <li><a href="#contact-us" class="smooth-scroll">Contact Us</a></li>
            </ul>
            <a href="#" class="button large expand" data-toggle="modal" data-target="#booking-form-modal">Book Now</a>
          </div>
          <div id="mobile-menu-overlay"></div>
        </div>
      </div> <!-- END OF MAIN HEADER -->
    </div>
  </div> <!-- END OF SITE HEADER -->
</div>
