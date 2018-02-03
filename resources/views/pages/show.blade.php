@extends('layout.template',['title'=>$event->title])

@section('container')	
		<img src="{{ asset('img/background.jpg') }} " class="img-responsive" width="100%" height="10px">

			<div class="thumbnail">
					<h1>{{ $event->title}} <i class="fa fa-long-arrow-right primary"></i>Prix: {!!Free($event) !!} </h1>
				<div class="row espace">
					<div class="col-md-6">
						<h3><i class="fa fa-file-text"></i> Description</h3>
						<p>{{ $event->description}} </p>
					</div>
					<div class="col-md-offset-2 col-md-4 top">
						<p><i class="fa fa-calendar"></i> Date et heure</p>
						<strong>{{$event->start->format('D, d-m-Y') }} </strong> |<em>{{ $event->hours}} </em>
					
						<p>Adresse</p>
						<strong><i class="fa fa-home"></i> {{$event->location }} </strong> |
						<em><i class="fa fa-map-marker"></i> {{ $event->city}} </em>
					</div>
				</div>
				
			</div>
			<div class="row ">
				<a class="btn btn-warning " href="{{route('events.edit',$event) }} "><i class="fa fa-edit"></i> Modifier</a>
				<form  style="display: inline-block;" method="POST" action="{{route('events.destroy',$event) }} ">
					{{ method_field("DELETE") }}
					{{ csrf_field() }}
					<button class="btn btn-danger btn-block"><i class="fa fa-times"></i> Suprimer</button>
				</form>
			</div><hr>
			<p>
			<a href="{{route('home') }} " class="btn btn-primary btn-block"><i class="fa fa-long-arrow-left"></i> Tous les évènements</a>  
		</p>

@stop

