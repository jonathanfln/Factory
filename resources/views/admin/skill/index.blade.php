@extends('adminlte::page')

@section('title', 'Skills')

@section('content_header')
  <h1>Skills</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('skills.create')}}" class="btn btn-success float-right">Ajouter un nouveau skill</a>
</div>
<hr>
<table class="table table-light w-75">
  <thead>
    <tr class="row mx-0">
      <th class="col-md-1">#</th>
      <th class="col-md-1">Logo</th>
      <th class="col-md-7">Nom</th>
      <th class="col-md-3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($skills as $skill)
      <tr class="row mx-0">
        <td scope="row"  class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-1"><i class="{{$skill->logo}}"></i></td>
        <td class="col-md-7">{{$skill->name}}</td>
        <td class="col-md-3">
          <a href="{{route('skills.edit',['skill'=>$skill->id])}}" class="btn btn-info">Éditer</a>
          <form action="{{route('skills.destroy', ['skill'=>$skill->id])}}" class="visible-lg-inline-block" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<script src="{{ asset('js/fontawesome.js') }}"></script>
@stop