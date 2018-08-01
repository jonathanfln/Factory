@extends('adminlte::page')

@section('title', 'Atouts')

@section('content_header')
  <h1>Vue d'ensemble des services</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('atouts.create')}}" class="btn btn-success float-right">Ajouter un nouvel atout</a>
</div>
<hr>
<table class="table table-light w-75">
  <thead>
    <tr class="row mx-0">
      <th class="col-md-1">#</th>
      <th class="col-md-2">Nom</th>
      <th class="col-md-7">Description</th>
      <th class="col-md-2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($atouts as $atout)
      <tr class="row mx-0 ">
        <td scope="row" class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-2">{{$atout->name}}</td>
        <td class="col-md-7">{!!$atout->content!!}</td>
        <td class="col-md-2">
          <a href="{{route('atouts.edit',['atout'=>$atout->id])}}" class="btn btn-info">Éditer</a>
          <form action="{{route('atouts.destroy', ['atout'=>$atout->id])}}" class="visible-lg-inline-block" method="post">
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