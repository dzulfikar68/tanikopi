<div class="pop-up">
	<!-- Cek error -->
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Error!</h4>
			<ul class="nav">
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
		</div>
	@endif

	<!-- Cek success -->
    @if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-check"></i> Success!</h4>
			{{ Session::get('success') }} 
		</div>
	@endif

</div>
