@extends('adminlte::page')

@section('title', "Projets")

@section('content_header')
    <h1>Édition d'un projet</h1>
@stop

@section('content')
<form action="{{route('projets.update', ['projet'=>$projet->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
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
            <input type="text" name="name" id="name" class="form-control" placeholder="Veuillez entrer le nom de projet" value="{{old('name', $projet->name)}}">
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
                  <option class="" {{(($projet->clients_id == $client->id) ? 'selected' :'' )}} value="{{$client->id}}">{{$client->name}} | {{$client->company}}</option>
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
                <div class="text-danger">{{$errors->first('clients_id')}}</div>
              @endif
              <select class="form-control" name="clients_id" id="client_id">
                @foreach($categories as $categorie)
                  <option class="" {{(($projet->categories_id == $categorie->id) ? 'selected' :'' )}} value="{{$categorie->id}}">{{$categorie->name}}</option>
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
            <textarea name="content" id="content" class="" placeholder="Description du projet">{{old('content', $projet->content)}}</textarea>
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
          @if($errors->has('content'))
            <div class="text-danger">{{$errors->first('content')}}</div>
          @endif
          <div>
            @foreach($tags as $tag)
              <label class="form-check-label col-md-3">
              <input type="checkbox" class="form-check-input" name="tags_id[]" id="" value="{{$tag->id}}"
              @foreach(old('tags_id', $projet->tags) as $tagchecked)
                @if(old('tags_id'))
                  {{($tagchecked == $tag->id) ? 'checked' :''}}
                @else
                  {{($tagchecked->id == $tag->id) ? 'checked' :''}}
                @endif
              @endforeach>
              {{$tag->name}}
              </label>
            @endforeach
          </div>
        </div>
        {{-- Fin tags --}}

        {{-- Skills projet --}}
        <div class="col-md-6">
          <label for="content"><h2>Skills</h2></label>
          @if($errors->has('content'))
            <div class="text-danger">{{$errors->first('content')}}</div>
          @endif
          <div>
            @foreach($skills as $skill)
              <label class="form-check-label col-md-3">
              <input type="checkbox" class="form-check-input" name="skills_id[]" id="" value="{{$skill->id}}"
              @foreach(old('skills_id', $projet->skills) as $skillchecked)
                @if(old('skills_id'))
                  {{($skillchecked == $skill->id) ? 'checked' :''}}
                @else
                  {{($skillchecked->id == $skill->id) ? 'checked' :''}}
                @endif
              @endforeach>
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
              <input type="text" name="link" id="link" class="form-control" placeholder="Lien vers le site" value="{{old('link', $projet->link)}}">
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