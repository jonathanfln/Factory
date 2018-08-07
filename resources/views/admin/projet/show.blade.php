@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
@stop

@section('content')
<a href="{{route('projets.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box w-75">
      <div class="box-header">
        <img class="img-responsive" src="{{Storage::disk('imgProjet')->url($projet->image)}}" alt="{{$projet->name}}">
      </div>
      <div class="box-body">
        <div>
          <p class="visible-lg-inline-block">
            Tags
          </p>
          @foreach($projet->tags as $tag)
            <h4 class="visible-lg-inline-block"><span class="badge label-primary">{{$tag->name}}</h4>
          @endforeach
        </div>
        <div>
          <p class="visible-lg-inline-block">
            Skills
          </p>
          @foreach($projet->skills as $skill)
            <h4 class="visible-lg-inline-block"><span class="badge label-danger">{{$skill->name}}</h4>
          @endforeach
        </div>
      </div>
      <div class="box-body">
          <h2 class="d-inline-block">{{$projet->name}}</h2>
          <p>{!!$projet->content!!}</p>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('projets.edit', ['projet'=>$projet->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('projets.destroy', ['projet'=>$projet->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop