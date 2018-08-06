@extends('adminlte::page')

@section('title', "Partenaires")

@section('content_header')
    <h1>Éditer une image du partenaire</h1>
@stop

@section('content')
<form action="{{route('partenaires.update', ['partenaire'=>$partenaire->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="box w-75">
    <div class="box-header">
      <label for="name">
        <h2>
          Nom de l'image
        </h2>
      </label>
      @if($errors->has('name'))
        <div class="text-danger">{{$errors->first('name')}}</div>
      @endif
      <input type="text" name="name" id="name" class="form-control" placeholder="Nom du projet" value="{{old('name', $partenaire->name)}}">
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="image" name=""></label>
        @if($errors->has('image'))
          <div class="text-danger">{{$errors->first('image')}}</div>
        @endif
        <input type="file" class="form-control-file" name="image" id="" placeholder="">
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('partenaires.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop