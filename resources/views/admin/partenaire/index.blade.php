@extends('adminlte::page')

@section('title', 'partenaire')

@section('content_header')
    <h1>Partenaire</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('partenaires.create')}}" class="btn btn-success float-right">Ajouter une nouveau partenaire</a>
</div>
<hr>
<div class="row">
  @foreach($partenaires as $partenaire)
  <div class="col-md-2">
    <div class="box" style="width: 18rem;">
      <img class="img-responsive" src="{{Storage::disk('imgPartenaire')->url($partenaire->image)}}" alt="{{$partenaire->name}}">
      <div class="box-body text-center">
        <h5>{{$partenaire->name}}</h5>
        <hr>
        <form action="{{route('partenaires.destroy', ['partenaire'=>$partenaire->id])}}" method="post" class="text-center">
          @csrf
          @method('DELETE')
          <a href="{{route('partenaires.edit', ['partenaire'=>$partenaire->id])}}" class="btn btn-warning">Éditer</a>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop