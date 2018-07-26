@extends('adminlte::page')

@section('title', "Skills")

@section('content_header')
	<h1>Création d'un nouveau skill</h1>
@stop

@section('content')
	<div class="box w-75">
		<form action="{{route('skills.store')}}" method="post">
			@csrf
			<div class="box-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name"><h3>Nom</h3></label>
							@if($errors->has('name'))
								<div class="text-danger">{{$errors->first('name')}}</div>
							@endif
							<input type="text" name="name" id="name" class="form-control w-50 {{$errors->has('name')?'border-danger':''}}" placeholder="Veuillez entrer un skill" value="{{old('name')}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="logo"><h3>Logo</h3></label>
							<small>Logo trouvable a cette adresse : <a target="_blank" href="https://fontawesome.com/icons?d=gallery&s=brands&m=free">fontawesome.com</a></small>
							@if($errors->has('logo'))
								<div class="text-danger">{{$errors->first('logo')}}</div>
							@endif
							<input type="text" name="logo" id="logo" class="form-control" placeholder="Veuillez entrez le code d'un logo" value="{{old('logo')}}">
						</div>
					</div>
				</div>
			</div>
			<div class="box-body">
				<button type="submit" class="btn btn-info">Enregistrer</button>
				<a href="{{route('skills.index')}}" class="btn btn-danger">Retour</a>
			</div>
		</form>
	</div>
@stop