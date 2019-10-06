<?php
//Route::resource('/testimonials', 'Locomotif\Testimonials\Controller\TestimonialsController');
Route::group(['middleware' => ['web']], function () {
	Route::get('testimonials', 'Locomotif\Testimonials\Controller\TestimonialsController@index');
	Route::post('testimonials', 'Locomotif\Testimonials\Controller\TestimonialsController@store');
	Route::get('testimonials/create', 'Locomotif\Testimonials\Controller\TestimonialsController@create');
	Route::get('testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@show');
	Route::get('testimonials/{testimonial}/edit', 'Locomotif\Testimonials\Controller\TestimonialsController@edit');
	Route::put('testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@update');
	Route::delete('testimonials/{testimonial}', 'Locomotif\Testimonials\Controller\TestimonialsController@destroy');
});
?>
