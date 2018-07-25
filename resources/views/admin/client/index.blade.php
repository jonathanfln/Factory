@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1>Vue d'ensemble des clients.</h1>
@stop

@section('content')

{{-- Bouton création nouveau client --}}
<div class="clearfix mb-3">
  <a href="{{route('clients.create')}}" class="btn btn-success float-right">Ajouter un nouveau client</a>
</div>
{{-- Fin bouton --}}

<hr>
<div class="row">
  @foreach($clients as $client)
  <div class="col-md-2 mb-5 ">
    <div class="box mx-auto" style="width: 18rem;">
      <div class="box-body text-center">

        {{-- Image du client --}}
        <img class="mb-3" src="{{Storage::disk('imgClient')->url($client->image)}}" alt="{{$client->name}}">

        {{-- Nom du client --}}
        <h4>{{$client->name}}</h4>

        {{-- Société du client --}}
        <h6>{{$client->company}}</h6>
        <hr>

        {{-- Boutons --}}
        <a href="{{route('clients.edit', ['client'=>$client->id])}}" class="btn btn-info text-white">Editer</a>
        <form action="{{route('clients.destroy', ['client'=>$client->id])}}" class="visible-lg-inline-block" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Supprimer</button>
        </form>
        {{-- Fin boutons --}}
        
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop