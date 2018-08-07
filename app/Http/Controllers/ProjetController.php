<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjCreate;
use App\Http\Requests\StoreProjEdit;
use App\Services\ImageResize;
use Illuminate\Http\Request;
use App\Categorie;
use App\Client;
use App\Projet;
use App\Skill;
use App\Tag;
use Storage;
use View;

class ProjetController extends Controller
{

    public function __construct(ImageResize $imageResize){
        
        $this->imageResize = $imageResize;
        
        $categories = Categorie::all();
        $clients = Client::all();
        $skills = Skill::all();
        $tags = Tag::all();

        View::share('categories', $categories);
        View::share('clients', $clients);
        View::share('skills', $skills);
        View::share('tags', $tags);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        
        return view('admin.projet.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projet.create', compact('categories', 'skills', 'tags', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $projet = new Projet;
        $projet->name = $request->name;
        $projet->clients_id = $request->clients_id;
        $projet->categories_id = $request->categories_id;
        // dd($projet->categories_id);
        $projet->content = $request->content;
        $projet->categories_id = $request->categories_id;
        $projet->image = $this->imageResize->imageStore($request->image);
        // $projet->image = $request->image->store('', 'imgProjet');

        if($projet->save())
        {
            foreach($request->tags_id as $tag)
            {
            $projet->tags()->attach($tag);
            }

            foreach($request->skills_id as $skill)
            {
            $projet->skills()->attach($skill);
            }

            return redirect()->route('projets.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        return view('admin.projet.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('admin.projet.edit', compact('projet', 'categories', 'skills', 'tags', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjEdit $request, Projet $projet)
    {
        $projet->name = $request->name;
        $projet->clients_id = $request->clients_id;
        $projet->categories_id = $request->categories_id;
        // dd($projet->categories_id);
        $projet->content = $request->content;
        $projet->categories_id = $request->categories_id;
        if($request->image != NULL)
        {
            if(Storage::disk('imgProjet')->exists($projet->image))
            {
                Storage::disk('imgProjet')->delete($projet->image);
            }
            $projet->image = $request->image->store('','imgProjet');
        }
        
        $projet->tags()->detach();
        $projet->skills()->detach();

        if($projet->save())
        {
            foreach($request->tags_id as $tag)
            {
            $projet->tags()->attach($tag);
            }

            foreach($request->skills_id as $skill)
            {
            $projet->skills()->attach($skill);
            }

            return redirect()->route('projets.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->tags()->detach();
        $projet->skills()->detach();
        
        if($projet->delete())
        {
            Storage::disk('imgProjet')->delete($projet->image);
            return redirect()->route('projets.index');
        }
    }
}
