@extends('layout.template',['title'=>"Edition $event->title"])
@section('container')
	
		<div class="row">
			<h1>Modification de l'evenement #{{ $event->id}} </h1>
			<form method="Post" action="{{route('events.update',$event) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group {{$errors->has('title') ?'has-error':'' }} ">
					<label class="label-control sr-only" for="title">Titre</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Entrer un titre"  value="{{old('title')?? $event->title}}" >
					{!! $errors->first('title','<p class="label label-danger fa fa-text-height" style="font-size:20px"> :message</p>') !!}
				</div>

				<div class="form-group {{$errors->has('price') ?'has-error':'' }}">
					<label class="label-control sr-only" for="">Prix</label>
					<input type="text" name="price" class="form-control" placeholder="Entrer le prix"  value="{{old('price')?? $event->price}}" >
					{!! $errors->first('price','<p class="label label-danger fa fa-money" style="font-size:20px"> :message</p>') !!}
				</div>
				<div class="row">
					<div class="col-md-6 form-group {{$errors->has('start') ?'has-error':'' }}">
						<label class="label-control" for="">Date</label>
						<input type="date" name="start" class="form-control"  value="{{old('start')?? $event->start->format('Y-m-d')}}">
						{!! $errors->first('start','<p class="label label-danger fa fa-calendar" style="font-size:20px"> :message</p>') !!}
					</div>
					<div class="col-md-6 form-group {{$errors->has('hour') ?'has-error':'' }}">
						<label class="label-control " for="">Heure du type XX : XX</label>
						<input type="time" name="hour" class="form-control" placeholder="Entrer une Heure"  value="{{old('hour')?? $event->hours}}" >
						{!! $errors->first('hour','<p class="label label-danger fa fa-clock-o" style="font-size:20px"> :message</p>') !!}
	 				</div>
 				</div>
				<div class="row">
 			<div class="col-md-6 form-group {{$errors->has('location') ?'has-error':'' }}">
 				<label class="label-control " for="">Lieux</label>
				<input type="text" name="location" class="form-control" placeholder="Entrer le lieux"  value="{{old('location')?? $event->location}}" >
				{!! $errors->first('location','<p class="label label-danger fa fa-home " style="font-size:20px"> :message</p>') !!}
			</div>	
				<div class="col-md-6 form-group {{$errors->has('city') ?'has-error':'' }}">
					<label class="label-control " for="">Ville</label>
					<input type="text" name="city" class="form-control" placeholder="Entrer la ville"  value="{{old('city')?? $event->city}}" >
					{!! $errors->first('city','<p class="label label-danger fa fa-map-marker" style="font-size:20px"> :message</p>') !!}
				</div>
			</div>
				<div class="form-group {{$errors->has('description') ?'has-error':'' }}">
					<label class="label-control sr-only" for=""></label>
					<textarea name="description" class="form-control" placeholder="Entrer une description" cols="30" rows="10" >{{old('description')?? $event->description}}</textarea>
					{!! $errors->first('description','<p class="label label-danger fa fa-file-text-o " style="font-size:20px"> :message</p>') !!}
				</div>
				<button class="btn btn-success">Editer</button>
				<a class="btn btn-danger" href="{{route('events.show',$event) }} ">Annuler</a>
			</form>
			
	</div>
@stop