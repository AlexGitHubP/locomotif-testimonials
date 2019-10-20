<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('admin/testimonials', 'Locomotif\Testimonials\Controller\TestimonialsController@index');
	Route::post('admin/testimonials', 'Locomotif\Testimonials\Controller\TestimonialsController@store');
	Route::get('admin/testimonials/create', 'Locomotif\Testimonials\Controller\TestimonialsController@create');
	Route::get('admin/testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@show');
	Route::get('admin/testimonials/{testimonial}/edit', 'Locomotif\Testimonials\Controller\TestimonialsController@edit');
	Route::put('admin/testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@update');
	Route::delete('admin/testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@destroy');
});
?>
