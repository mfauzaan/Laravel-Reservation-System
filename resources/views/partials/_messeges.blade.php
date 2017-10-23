@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if (Session::has('danger'))

	<div class="alert alert-danger" role="alert">
		<strong>Deleted:</strong> {{ Session::get('danger') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>

@endif

@if (Session::has('book'))

@endif


@if (Session::has('book'))


	<div class="alerts-success">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
			<h4 class="modal-title light" ><span class="flaticon-calendar"></span> Booking Success</h4>
		</div>
		<div class="modal-body" style="background-color: #fff;">
			<div class="row" >
				<p class="light">Your Booking request was processed Successfully!</p>
			</div>
		</div>
	</div>


<script type="text/javascript">
window.setTimeout(function () {
	$(".alerts-success").fadeTo(0, 0).slideUp(500, function () {
			$(this).remove();
	});
}, 5000);
</script>



@endif
