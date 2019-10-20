@extends('admin::header')

@section('content')

<a href="/testimonials"></a>

<p>Update a testimonial</p>


<form action="/testimonials/{{ $testimonial->id }}" method="POST">
  {{ method_field('PUT') }}
    @csrf
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name"  name="name" value="{{ $testimonial->name }}">
	</div>

  	<div class="form-group">
    	<label for="text">Description</label>
    	<input type="text" class="form-control" id="text" name="text" value="{{ $testimonial->text }}">
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
