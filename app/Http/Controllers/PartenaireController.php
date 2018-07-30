<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartCreate;
use App\Http\Requests\StorePartEdit;
use Illuminate\Http\Request;
use App\Partenaire;
use Storage;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();

        return view('admin.partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartCreate $request)
    {
        $partenaire = New Partenaire;
        $partenaire->name = $request->name;
        if($request->image != NULL){
            $partenaire->image = $request->image->store('','imgPartenaire');
        }
        $partenaire->save();

        return redirect()->route('partenaires.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        return view('admin.partenaire.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        $partenaire->name = $request->name;
        if($request->image != NULL)
        {
            if(Storage::disk('imgPartenaire')->exists($partenaire->image))
            {
                Storage::disk('imgPartenaire')->delete($partenaire->image);
            };
            $partenaire->image = $request->image->store('','imgPartenaire');
        }
        $partenaire->save();

        return redirect()->route('partenaires.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        if($partenaire->delete())
        {
            Storage::disk('imgPartenaire')->delete($partenaire->image);
            
            return redirect()->route('partenaires.index');
        };
    }
}
