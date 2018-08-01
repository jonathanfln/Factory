@extends('adminlte::page')

@section('title', 'Testimonials')

@section('content_header')
    <h1>Vue d'ensemble des testimoniaux.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('testimonials.create')}}" class="btn btn-success float-right">Ajouter un nouveau testimonial</a>
</div>
<hr>
<div class="row">
  @foreach($testimonials as $testimonial)
  <div class="col-md-3">
    <div class="box">
      <div class="box-body text-center">
        <p>{!!$testimonial->content!!}</p>
        {{-- {{dd($testimonial->client->image)}} --}}
        @if($testimonial->client != NULL)
        <hr>
        <img src="{{Storage::disk('imgClient')->url($testimonial->client->image)}}" alt="{{$testimonial->client->name}}" class="img-circle">
        <h5 class="mt-2 ml-3 d-inline-block">{{$testimonial->client->name}}</h5>
        @endif
      </div>
      <div class="box-body text-center">
        <a href="{{route('testimonials.show', ['testimonial'=>$testimonial->id])}}" class="btn btn-info">Voir</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop