@extends('adminlte::page')

@section('title', "Carousel")

@section('content_header')
    <h1>Ajout d'un nouveau partenaire</h1>
@stop

@section('content')
<form action="{{route('partenaires.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box">
    <div class="row">
      <div class="col-md-6">
        <div class="box-header">
          <label for="name"><h2>Nom du partenaire</h2></label>
          @if($errors->has('name'))
            <div class="text-danger">{{$errors->first('name')}}</div>
          @endif
          <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'border-danger':''}}" placeholder="Nom du projet" value="{{old('name')}}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box-body">
          <div class="form-group">
            <label for="image" name=""><h2>Logo du partenaire</h2></label>
            @if($errors->has('image'))
              <div class="text-danger">{{$errors->first('image')}}</div>
            @endif
            <input type="file" class="form-control-file" name="image" id="" placeholder="">
          </div>
        </div>
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('partenaires.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
  </div>

</form>
@stop