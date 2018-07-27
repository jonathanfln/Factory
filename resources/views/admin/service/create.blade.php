@extends('adminlte::page')

@section('title', "Services")

@section('content_header')
	<h1>Création d'un nouveau service</h1>
@stop

@section('content')
<div class="box">
  <form action="{{route('services.store')}}" method="post">
    @csrf
    <div class="box-body">
      <div class="row">

        {{-- Nom sevice --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="name"><h3>Nom</h3></label>
            @if($errors->has('name'))
              <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
            <input type="text" name="name" id="name" class="form-control" placeholder="Veuillez entrer un nom pour le service*" value="{{old('name')}}">
          </div>
        </div>
        {{-- Fin nom --}}

        {{-- Logo service --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="logo"><h3>Logo</h3></label>
            <small>Logo trouvable a cette <a target="_blank" href="https://fontawesome.com/icons?d=gallery&m=free">adresse</a></small>
            @if($errors->has('logo'))
              <div class="text-danger">{{$errors->first('logo')}}</div>
            @endif
            <input type="text" class="form-control" name="logo" id="logo" placeholder="Veuillez ajouter une icon pour le service avec flaticon*" value="{{old('logo')}}">
          </div>
        </div>
        {{-- Fin logo --}}
      </div>

      {{-- Description du service (CKEditor) --}}
      <div class="form-group">
        <label for="description"><h3>Description</h3></label>
        @if($errors->has('description'))
          <div class="text-danger">{{$errors->first('description')}}</div>
        @endif
        <textarea class="form-control" name="description" id="description" placeholder="Veuillez entrer la description du service*" >{{old('description')}}</textarea>
      </div>
      {{-- Fin description --}}

    </div>
    <div class="box-body">
      <button type="submit" class="btn btn-info">Enregistrer</button>
      <a href="{{route('services.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </form>
</div>


@stop


@section('ckeditorjs')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description', {
      toolbarGroups: [
        {"name":"basicstyles","groups":["basicstyles"]},
      ],
    } );
</script>
@stop