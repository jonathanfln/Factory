@extends('adminlte::page')

@section('title', 'Utilisateurs')

@section('content_header')
    <h1>Utiliateurs</h1>
@stop

@section('content')
  <div>
    <div class="clearfix mb-3">
        <a href="{{route('users.create')}}" class="btn btn-success float-right">Ajouter un nouvel utilisateur</a>
    </div>
    <hr>
    <div class="row">
      @foreach($users as $user)
      <div class="col-sm-4 col-md-3">
        <div class="box">
          <div class="box-body">
            <h2 class="text-center">{{$user->name}}</h2>
            <p class="text-center">{{$user->email}}</p>
          </div>
          <div class="box-body">
            <div class="text-center">
              <a href="{{route('users.edit', ['user'=>$user->id])}}" class="btn btn-info">Éditer</a>
              <form action="{{route('users.destroy', ['user'=>$user->id])}}" method="post" class="visible-lg-inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Supprimer</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@stop