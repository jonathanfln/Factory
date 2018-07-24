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
        <a href="">
          <div class="box">
            <div class="box-body">
              <h2 class="text-center text-muted">{{$user->name}}</h2>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
@stop