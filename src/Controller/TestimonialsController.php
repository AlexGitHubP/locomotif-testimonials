<?php

namespace Locomotif\Testimonials\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Locomotif\Testimonials\Model\Testimonials;


class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        
        //dd($testimonials);

        return view('testimonials::list')->with('testimonials',$testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $testimonial = Testimonials::create(['name' => $request->name,'text' => $request->text]);
        return redirect('/testimonials/'.$testimonial->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonial)
    {      
        return view('testimonials::show')->with('testimonial', $testimonial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $testimonial)
    {
        return view('testimonials::edit')->with('testimonial', $testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonial)
    {
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonial)
    {
        $testimonial->delete();
        return redirect('/testimonials');
    }
}
