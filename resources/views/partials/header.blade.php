@include('partials._head')

<body>
	<div id="page-loader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- SITE WRAPPER -->

		<!-- HOME -->
			@yield('home')
    <!-- END OF HOME -->

		<!-- ROOMS -->
			@yield('rooms')
		<!-- END OF ROOMS -->

		<!-- DINING -->
			@yield('dining')
		<!-- END OF DINING -->

		<!-- MEETINGS & EVENTS -->
			@yield('meetings')
		<!-- END OF MEETINGS & EVENTS -->

		<!-- ABOUT -->
			@yield('about')
	<!-- END OF ABOUT -->

		<!-- CONTACT US -->
		@yield('contact')
		<!-- END OF CONTACT US -->
		<!--<div id="map"></div> -->
<!-- END OF SITE WRAPPER -->

	<!-- MODALS -->
	@include('partials._model')
	@include('partials._actModel')
	<!-- JAVASCRIPTS -->
	<!-- JQUERY -->
	
@include('partials._script')
</body>
</html>
