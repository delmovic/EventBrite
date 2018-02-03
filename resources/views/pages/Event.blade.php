@extends('layout.template',['title'=>'Actualité'])
@section('container')
   
		<h1> Les {{$events->count() }} meilleurs Events de l'année</h1>
		@if(!$events->isEmpty())
			<ul class=" row list-inline">
					@foreach($events as $event)
						<div class="col-md-4">
		                    <div class="thumbnail ">
		                        <figure><a href="{{route('events.show',$event)}} "><img  src="img/background.jpg" class="img-responsive" alt="historique" align="middle" /></a>
		                        	<span class="label label-primary">{{ $event->start->format('d/m/Y')}} </span>
		                        </figure>
		                        <div class="espace">
		                        	<span class="label label-info espace pull-right">{!! free($event)!!} </span>
			                        <h4><li>{{ $event->title }} </li></h4>
			                        <h5><em>{{ $event->location}},{{ $event->city}}</em></h5>
			                        <p> <a class="btn btn-default" href="{{ route('events.show', $event) }}"><i class=" fa fa-eye" style="color: #000;"></i> Découvrir événement</a></p>
		                        </div>
		                     </div>
		                </div>
				@endforeach
			</ul>
					<p class="col-md-12">{{$events->links()}}</p>
				@else
					<p>Aucun événement disponible pour le moment.</p>
				@endif	
			
@stop