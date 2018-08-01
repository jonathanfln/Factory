@extends('adminlte::page')

@section('title', "Testimonials")

@section('content_header')
    <h1>Ajout d'un nouveau testimonial</h1>
@stop

@section('content')
<form action="{{route('testimonials.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box w-75">

    {{-- Nom client --}}
    <div class="box-body">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label for="client_id"><h3>Client</h3></label>
            @if($errors->has('clients_id'))
              <div class="text-danger">{{$errors->first('clients_id')}}</div>
            @endif
            <select class="form-control" name="clients_id" id="client_id">
              @foreach($clients as $client)
                <option class="" {{old('clients_id')}} value="{{$client->id}}">{{$client->company}} | {{$client->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
    {{-- Fin nom --}}

    {{-- Avis client --}}
    <div class="box-body">
      <div class="form-group">
        <label for="content"><h3>Testimonial</h3></label>
        @if($errors->has('content'))
          <div class="text-danger">{{$errors->first('content')}}</div>
        @endif
        <textarea class="form-control" name="content" id="content" rows="3">{{old('content')}}</textarea>
      </div>
    </div>
    {{-- Fin avis --}}

    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('clients.index')}}" class="btn btn-danger">Retour</a>
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