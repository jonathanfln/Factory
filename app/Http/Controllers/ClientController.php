<?php

namespace App\Http\Controllers;

use Storage;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientEdit;
use App\Http\Requests\StoreClientCreate;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientCreate $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->company = $request->company;
        if($request->image != NULL)
        {
            $client->image = $request->image->store('','imgClient');
        }
        $client->save();

        return redirect()->route('clients.index');
        // return redirect()->route('clients.show', ['client'=>$client->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClientEdit $request, Client $client)
    {
        $client->name = $request->name;
        $client->company = $request->company;
        if($request->image != NULL)
        {
            if(Storage::disk('imgClient')->exists($client->image))
            {
                Storage::disk('imgClient')->delete($client->image);
            }
            $client->image = $request->image->store('','imgClient');
            
        };
        if($client->save())
        {
            return redirect()->route('clients.index');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if($client->delete())
        {
            Storage::disk('imgClient')->delete($client->image);
            return redirect()->route('clients.index');
        };
    }
}
