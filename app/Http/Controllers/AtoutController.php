<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtoutCreate;
use App\Http\Requests\StoreAtoutEdit;
use Illuminate\Http\Request;
use App\Atout;

class AtoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atouts = Atout::all();

        return view('admin.atout.index', compact('atouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.atout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAtoutCreate $request)
    {
        $atout = New Atout;
        $atout->name = $request->name;
        $atout->content = $request->content;
        $atout->save();
        
        return redirect()->route('atouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atout  $atout
     * @return \Illuminate\Http\Response
     */
    public function show(Atout $atout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atout  $atout
     * @return \Illuminate\Http\Response
     */
    public function edit(Atout $atout)
    {
        return view('admin.atout.edit', compact('atout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atout  $atout
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAtoutEdit $request, Atout $atout)
    {
        $atout->name = $request->name;
        $atout->content = $request->content;
        // dd($ato  ut);
        $atout->save();
        
        return redirect()->route('atouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atout  $atout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atout $atout)
    {
        $atout->delete();

        return redirect()->route('atouts.index');
    }
}
