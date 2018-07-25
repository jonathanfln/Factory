@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
  <h1>Ctégories</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('categories.create')}}" class="btn btn-success float-right">Ajouter une nouvelle catégorie</a>
</div>
<hr>
<table class="table table-light w-75">
  <thead>
    <tr class="row mx-0">
      <th class="col-md-1">#</th>
      <th class="col-md-8">Nom</th>
      <th class="col-md-3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $categorie)
      <tr class="row mx-0">
        <td scope="row" class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-8">{{$categorie->name}}</td>
        <td class="col-md-3">
          <a href="{{route('categories.edit',['categorie'=>$categorie->id])}}" class="btn btn-info">Éditer</a>
          <form action="{{route('categories.destroy', ['categorie'=>$categorie->id])}}" class="visible-lg-inline-block ml-3" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop