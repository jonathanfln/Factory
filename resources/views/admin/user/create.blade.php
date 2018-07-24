@extends('adminlte::page')

@section('title', 'Utilisateurs')

@section('content_header')
    <h1>Création d'un utilisateur</h1>
@stop

@section('content')
  <div>
    <div class="row">
      <div class="col-md-10">
        <form action="{{route('users.store')}}" method="post">
          <div class="box">
            <div class="box-body">
              @csrf
              {{-- Nom --}}
              <div class="col-md-6">
                <div class="form-group w-75">
                  <label for="name"><h3>Nom</h3></label>
                  @if($errors->has('name'))
                    <div class="text-danger">{{$errors->first('name')}}</div>
                  @endif
                  <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'bg-danger':''}}" placeholder="Nom de l'utilisateur" value="{{old('name')}}">
                </div>
              </div>
              {{-- Fin nom --}}

              {{-- Mail --}}
              <div class="col-md-6">
                <div class="form-group w-75">
                  <label for="email"><h3>Adresse email</h3></label>
                  @if($errors->has('email'))
                    <div class="text-danger">{{$errors->first('email')}}</div>
                  @endif
                  <input type="email" class="form-control {{$errors->has('email')?'bg-danger':''}}" name="email" id="email" placeholder="adresse@email.com" value="{{old('email')}}">
                </div>
              </div>
              {{-- Fin mail --}}

              {{-- Mot de passe --}}
              <div class="col-md-6 ">
                <div class="form-group">
                  <label for=""><h3>Mot de passe</h3></label>
                  @if($errors->has('password'))
                    <div class="text-danger">{{$errors->first('password')}}</div>
                  @endif
                  <input type="password" class="form-control mb-1 w-75 {{$errors->has('password')?'bg-danger':''}}" name="password" id="" placeholder="Veuillez entrer un mot de passe">
                  <input type="password" class="form-control w-75 {{$errors->has('password')?'bg-danger':''}} mt-1  " name="password_confirmation" id="" placeholder="Veuillez retaper votre mot de passe">
                </div>
              </div>
              {{-- Fin mot de passe --}}

            </div>

            {{-- Submit button --}}
            <div class="box-body text-center">
              <button class="btn btn-info" type="submit">Enregister</button>
              <a href="{{route('users.index')}}" class="btn btn-danger">Retour</a>
            </div>
            {{-- Fin submit button --}}

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop