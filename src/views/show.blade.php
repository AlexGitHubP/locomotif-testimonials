@extends('admin::inc/header')
@section('title', 'Testimonial detail')
@include('admin::inc/menu')

@section('content')
<div class="container">
    <div class="cms-body">
		<p>Testimonial detail</p>
		<p>The tite is: {{ $testimonial->name }}</p>
		<p>The descriptio is: {{ $testimonial->text }}</p>
	</div>
</div>
@endsection