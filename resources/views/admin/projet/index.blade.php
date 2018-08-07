@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
    <h1>Vue d'ensemble des projets.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('projets.create')}}" class="btn btn-success float-right">Ajouter un nouveau projet</a>
</div>
<hr>
<div class="row">
  @foreach($projets as $projet)
  <div class="col-md-4 mb-5 ">
    <div class="box mx-auto">
      <img class="box-img-top img-responsive" src="{{Storage::disk('imgProjet')->url($projet->image)}}" alt="{{$projet->name}}">
      <div class="box-body text-center">
        <h3>{{$projet->name}}</h3>
        <h6>{!!$projet->content!!}</h6>
        <hr>
        <div>
          <a href="{{route('projets.show', ['projet'=>$projet->id])}}" class="btn btn-info text-white">Voir</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop