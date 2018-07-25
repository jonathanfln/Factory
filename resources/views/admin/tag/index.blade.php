@extends('adminlte::page')

@section('title', 'Tags')

@section('content_header')
  <h1>Tags</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('tags.create')}}" class="btn btn-success float-right">Ajouter un nouveau tag</a>
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
    @foreach($tags as $tag)
      <tr class="row mx-0">
        <td scope="row"  class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-8">{{$tag->name}}</td>
        <td class="col-md-3">
          <a href="{{route('tags.edit',['tag'=>$tag->id])}}" class="btn btn-info">Éditer</a>
          <form action="{{route('tags.destroy', ['tag'=>$tag->id])}}" class="visible-lg-inline-block" method="post">
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