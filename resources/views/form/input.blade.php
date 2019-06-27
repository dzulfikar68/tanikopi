<div class="form-group">

	@if(isset($label) && $label != "")
		<label class="label">{{ $label }}</label>
	@endif

	@if(isset($hint))
		<p class="text-muted">{{ $hint }}</p>
	@endif

	@if(!isset($class))
		@php
			$class = "";
		@endphp
	@endif

	@if(!isset($id))
		@php
			$id = "";
		@endphp
	@endif

	@if(!isset($value))
		@php
			$value = "";
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

    @if(!isset($placeholder))
        @php
            $placeholder = "";
        @endphp
    @endif
	
	<input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}" class="form-control {{ $class }}" placeholder="{{ $placeholder }}" {{ $required }} value="{{ old($name) ? old($name) : $value }}" {{ $readonly }} />

	{!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>
