<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestiCreate;
use App\Http\Requests\StoreTestiEdit;
use Illuminate\Http\Request;
use App\Testimonial;
use App\Client;
use View;

class TestimonialController extends Controller
{

    public function __construct(){
        $testimonials = Testimonial::all();
        $clients = Client::all();

        View::share('clients', $clients);
        View::share('testimonials', $testimonials);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestiCreate $request)
    {
        $testi = new Testimonial;
        $testi->clients_id = $request->clients_id;
        $testi->content = $request->content;
        $testi->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTestiEdit $request, Testimonial $testimonial)
    {
        $testimonial->clients_id = $request->clients_id;
        $testimonial->content = $request->content;
        $testimonial->save();

        return redirect()->route('testimonials.show', ['testimonial'=>$testimonial->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonials.index');
    }
}
