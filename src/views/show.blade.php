@extends('admin::header')

@section('content')

<a href="/admin/testimonials">Back</a>

<p>Testimonial detail</p>


<p>The tite is: {{ $testimonial->name }}</p>
<p>The descriptio is: {{ $testimonial->text }}</p>
	



@endsection