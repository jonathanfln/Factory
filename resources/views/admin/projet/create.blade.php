@extends('adminlte::page')

@section('title', "Projets")

@section('content_header')
    <h1>Ajout d'un nouveau projet</h1>
@stop

@section('content')
<form action="{{route('projets.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box w-75">
    <div class="box-body">
      <div class="row">

        {{-- Nom projet --}}
        <div class="col-md-6">
          <div class="col-md-9">
            <label for="name"><h2>Nom</h2></label>
            @if($errors->has('name'))
            <div class="text-danger">{{$errors->first('name')}}</div>
            @endif
            <input type="text" name="name" id="name" class="form-control w-75 {{$errors->has('name')?'border-danger':''}}" placeholder="Veuillez entrer le nom de projet" value="{{old('name')}}">
          </div>
        </div>
        {{-- Fin nom --}}

        {{-- Nom client --}}
        <div class="col-md-6">
          <div class="col-md-9">
            <div class="form-group">
              <label for="client_id"><h2>Client</h2></label>
              @if($errors->has('clients_id'))
                <div class="text-danger">{{$errors->first('clients_id')}}</div>
              @endif
              <select class="form-control" name="clients_id" id="client_id">
                @foreach($clients as $client)
                  <option class="" value="{{$client->id}}">{{$client->name}} | {{$client->company}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        {{-- Fin client --}}

        {{-- Catégorie projet --}}
        <div class="col-md-6">
          <div class="col-md-9">
            <div class="form-group">
              <label for="categories_id"><h2>Catégorie</h2></label>
              @if($errors->has('categories_id'))
                <div class="text-danger">{{$errors->first('categories_id')}}</div>
              @endif
              <select class="form-control" name="categories_id" id="categories_id">
                @foreach($categories as $categorie)
                  <option class="" value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        {{-- Fin catégorie --}}

      </div>
    </div>
    <div class="box-body">
      <div class="row">

        {{-- Description projet --}}
        <div class="col-md-12">
          <label for="content"><h2>Description</h2></label>
          @if($errors->has('content'))
            <div class="text-danger">{{$errors->first('content')}}</div>
          @endif
          <div>
            <textarea name="content" id="content" class="w-75 {{$errors->has('content')?'border-danger':''}}" placeholder="Description du projet">{{old('content')}}</textarea>
          </div>
        </div>
        {{-- Fin description --}}

      </div>
    </div>

    <div class="box-body">
      <div class="row">

        {{-- Tags projet --}}
        <div class="col-md-6">
          <label for="content"><h2>Tags</h2></label>
          @if($errors->has('tags_id'))
            <div class="text-danger">{{$errors->first('tags_id')}}</div>
          @endif
          <div>
            @foreach($tags as $tag)
              <label class="form-check-label col-md-3">
              <input type="checkbox" class="form-check-input" name="tags_id[]" value="{{$tag->id}}">
              {{$tag->name}}
              </label>
            @endforeach
          </div>
        </div>
        {{-- Fin tags --}}

        {{-- Skills projet --}}
        <div class="col-md-6">
          <label for="content"><h2>Skills</h2></label>
          @if($errors->has('skills_id'))
            <div class="text-danger">{{$errors->first('skills_id')}}</div>
          @endif
          <div>
            @foreach($skills as $skill)
              <label class="form-check-label col-md-3">
              <input type="checkbox" class="form-check-input" name="skills_id[]" value="{{$skill->id}}">
              {{$skill->name}}
              </label>
            @endforeach
          </div>
          {{-- Fin skills --}}

        </div>
      </div>
    </div>
    
    <div class="box-body">
      <div class="row">

        {{-- Image du projet --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="image"><h2>Image</h2></label>
              @if($errors->has('image'))
                <div class="text-danger">{{$errors->first('image')}}</div>
              @endif
            <input type="file" class="form-control-file" name="image" id="image" placeholder="">
          </div>
        </div>
        {{-- Fin image --}}

        {{-- Lien vers le projet --}}
        <div class="col-md-6">
          <div class="col-md-9">
            <div class="form-group">
              <label for="link"><h2>Lien</h2></label>
              @if($errors->has('link'))
                <div class="text-danger">{{$errors->first('link')}}</div>
              @endif
              <input type="text" name="link" id="link" class="form-control" placeholder="Lien vers le site">
            </div>
          </div>
        </div>
        {{-- Fin lien --}}
        
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('projets.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop

@section('ckeditorjs')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content', {
      toolbarGroups: [
        {"name":"basicstyles","groups":["basicstyles"]},
      ],
    } );
</script>
@stop