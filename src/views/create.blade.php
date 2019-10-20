@extends('admin::header')

@section('content')

<a href="/admin/testimonials"></a>

<p>Create a testimonial</p>


<form action="/admin/testimonials" method="POST">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" value="">
  </div>

    <div class="form-group">
      <label for="text">Description</label>
      <input type="text" class="form-control" id="text" name="text" value="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection