<div class="form-group">
	@if($label != "")
		<label>{{ $label }}</label>
	@endif

	@if(!isset($class))
		@php
			$class = "";
		@endphp
	@endif


	@if(!isset($value))
		@php
			$value = "";
		@endphp
	@endif

	@if(!isset($rows))
		@php
			$rows = 5;
		@endphp
	@endif

	@php
		if($required == "true"){
			$required = 'required=required';
		}
		else{
			$required = "";
		}
	@endphp
	
	@php
		if(isset($readonly) && $readonly=="true"){
			$readonly = "readonly";
		}
		else{
			$readonly = "";
		}
	@endphp
	

	<textarea name="{{ $name }}" class="form-control {{ $class }}" rows="{{ $rows }}" {{ $required }} {{ $readonly }}>{{ old($name) ? old($name) : $value }}</textarea>

	{!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>