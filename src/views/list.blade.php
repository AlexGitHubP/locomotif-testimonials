@extends('admin::inc/header')
@section('title', 'Testimonials list')
@include('admin::inc/menu')

@section('content')
<div class="container">
    <div class="cms-body">
	<p>This is the listing page for Testimonials</p>
	<a href="/admin/testimonials/create">Add a new testimonial</a>
	@foreach ($testimonials as $t)
		<p>{{ $t->name }} <a href="/admin/testimonials/{{ $t->id }}/edit">Edit</a> | <form action="/admin/testimonials/{{ $t->id }}" method="POST">{{ method_field('DELETE') }} @csrf
	   	<input type="submit" class="btn btn-danger" value="Delete"/></form></p>
	@endforeach
	</div>
</div>

@endsection