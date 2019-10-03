<?php

namespace Locomotif\Testimonials;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index(){
    	return view('testimonials::list');
    }
}
