@extends('adminlte::page')

@section('title', "Atouts")

@section('content_header')
	<h1>Création d'un nouvel atout</h1>
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


      </div>

      {{-- Description du service (CKEditor) --}}
      <div class="form-group">
        <label for="content"><h3>Description de l'atout</h3></label>
        @if($errors->has('content'))
          <div class="text-danger">{{$errors->first('content')}}</div>
        @endif
        <textarea class="form-control" name="content" id="content">{{old('content')}}</textarea>
      </div>
      {{-- Fin description --}}

    </div>
    <div class="box-body">
      <button type="submit" class="btn btn-info">Enregistrer</button>
      <a href="{{route('atouts.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </form>
</div>


@stop


@section('ckeditorjs')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'contentcontent', {
      toolbarGroups: [
        {"name":"basicstyles","groups":["basicstyles"]},
      ],
    } );
</script>
@stop