<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ route('home')}}"><i class="fa fa-home"></i> EventBrute</a>
	</div>
		<div class="collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav ">
				<li> <a href="#">Aide</a> </li>
				<li> <a href="#">Se connecter</a> </li>
				<li> <a href="#">S'inscrire</a> </li>
				<li><p style="padding-top: 10px;"><a href="{{ route('events.create')}} " class="btn btn-primary"><i class="fa fa-plus-circle"></i> Créer un événement</a></p></li>

			</ul>
		</div>

</nav>

	{{-- <form>
		<div class="input-group">
			<input type="text" class="input form-control" placeholder="Recherche">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary "><span class="fa fa-search"></span> Chercher</button>
			</span>
		</div>
	</form>
 --}}