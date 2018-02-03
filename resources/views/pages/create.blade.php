@extends('layout.template',['title'=>'Nouveau Event'])
@section('container')
<h1>Création d'un événement <i class="fa fa-plus"></i></h1>

		<div class="row">
			<form method="Post" action="{{route('events.store') }}">
				<div class="form-group {{$errors->has('title') ?'has-error':'' }} ">
					<label class="label-control sr-only" for="title">Titre</label>
					{{ csrf_field() }}
					<input type="text" id="title" name="title" class="form-control" placeholder="Entrer un titre"  value="{{old('title')}}" >
					{!! $errors->first('title','<p class="label label-danger fa fa-text-height" style="font-size:20px"> :message</p>') !!}
				</div>

				<div class="form-group {{$errors->has('price') ?'has-error':'' }}">
					<label class="label-control sr-only" for="">Prix</label>
					<input type="text" name="price" class="form-control" placeholder="Entrer le prix"  value="{{old('price')}}" >
					{!! $errors->first('price','<p class="label label-danger fa fa-money" style="font-size:20px"> :message</p>') !!}
				</div>
				<div class="row">
					<div class="col-md-6 form-group {{$errors->has('start') ?'has-error':'' }}">
						<label class="label-control" for="">Date</label>
						<input type="date" name="start" class="form-control"  value="{{old('start')}}">
						{!! $errors->first('start','<p class="label label-danger fa fa-calendar" style="font-size:20px"> :message</p>') !!}
					</div>
					<div class="col-md-6 form-group {{$errors->has('hour') ?'has-error':'' }}">
						<label class="label-control " for="">Heure du type XX : XX</label>
						<input type="time" name="hour" class="form-control" placeholder="Entrer une Heure"  value="{{old('hour')}}" >
						{!! $errors->first('hour','<p class="label label-danger fa fa-clock-o" style="font-size:20px"> :message</p>') !!}
	 				</div>
 				</div>
				<div class="row">
 			<div class="col-md-6 form-group {{$errors->has('location') ?'has-error':'' }}">
 				<label class="label-control " for="">Lieux</label>
				<input type="text" name="location" class="form-control" placeholder="Entrer le lieux"  value="{{old('location')}}" >
				{!! $errors->first('location','<p class="label label-danger fa fa-home " style="font-size:20px"> :message</p>') !!}
			</div>	
				<div class="col-md-6 form-group {{$errors->has('city') ?'has-error':'' }}">
					<label class="label-control " for="">Ville</label>
					<input type="text" name="city" class="form-control" placeholder="Entrer la ville"  value="{{old('city')}}" >
					{!! $errors->first('city','<p class="label label-danger fa fa-map-marker" style="font-size:20px"> :message</p>') !!}
				</div>
			</div>
				<div class="form-group {{$errors->has('description') ?'has-error':'' }}">
					<label class="label-control sr-only" for=""></label>
					<textarea name="description" class="form-control" placeholder="Entrer une description" cols="30" rows="10" >{{old('description')}}</textarea>
					{!! $errors->first('description','<p class="label label-danger fa fa-file-text-o " style="font-size:20px"> :message</p>') !!}
				</div>
				<button class="btn btn-primary btn-block">Créer un évenement</button>
				<p><a class="btn btn-danger" href="{{route('home') }} ">Annuler</a></p>
			</form>
			
	</div>
@stop