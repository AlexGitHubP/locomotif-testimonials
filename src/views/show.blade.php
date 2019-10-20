@extends('admin::header')

@section('content')

<a href="/testimonials">Back</a>

<p>Testimonial detail</p>


<p>The tite is: {{ $testimonial->name }}</p>
<p>The descriptio is: {{ $testimonial->text }}</p>
	



@endsection
