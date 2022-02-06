@extends('template.layaout')
@section('catalogos')
<section class="carousel">
	<div class="reel">
		@foreach ($personajes as $personaje)
		<article>
			<a href="{{route('detalle',$personaje['id'])}}" class="image featured"><img src="{{$personaje['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje['id'])}}">{{$personaje['nombre']}}</a></h3>
			</header>
			<p>{{$personaje['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes2 as $personaje2)
		<article>
			<a href="{{route('detalle',$personaje2['id'])}}" class="image featured"><img src="{{$personaje2['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje2['id'])}}">{{$personaje2['nombre']}}</a></h3>
			</header>
			<p>{{$personaje2['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes3 as $personaje3)
		<article>
			<a href="{{route('detalle',$personaje3['id'])}}" class="image featured"><img src="{{$personaje3['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje3['id'])}}">{{$personaje3['nombre']}}</a></h3>
			</header>
			<p>{{$personaje3['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes4 as $personaje4)
		<article>
			<a href="{{route('detalle',$personaje4['id'])}}" class="image featured"><img src="{{$personaje4['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje4['id'])}}">{{$personaje4['nombre']}}</a></h3>
			</header>
			<p>{{$personaje4['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes5 as $personaje5)
		<article>
			<a href="{{route('detalle',$personaje5['id'])}}" class="image featured"><img src="{{$personaje5['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje5['id'])}}">{{$personaje5['nombre']}}</a></h3>
			</header>
			<p>{{$personaje5['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes6 as $personaje6)
		<article>
			<a href="{{route('detalle',$personaje6['id'])}}" class="image featured"><img src="{{$personaje6['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje6['id'])}}">{{$personaje6['nombre']}}</a></h3>
			</header>
			<p>{{$personaje6['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes7 as $personaje7)
		<article>
			<a href="{{route('detalle',$personaje7['id'])}}" class="image featured"><img src="{{$personaje7['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje7['id'])}}">{{$personaje7['nombre']}}</a></h3>
			</header>
			<p>{{$personaje7['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes8 as $personaje8)
		<article>
			<a href="{{route('detalle',$personaje8['id'])}}" class="image featured"><img src="{{$personaje8['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje8['id'])}}">{{$personaje8['nombre']}}</a></h3>
			</header>
			<p>{{$personaje8['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes9 as $personaje9)
		<article>
			<a href="{{route('detalle',$personaje9['id'])}}" class="image featured"><img src="{{$personaje9['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje9['id'])}}">{{$personaje9['nombre']}}</a></h3>
			</header>
			<p>{{$personaje9['genero']}}</p>
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes10 as $personaje10)
		<article>
			<a href="{{route('detalle',$personaje10['id'])}}" class="image featured"><img src="{{$personaje10['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje10['id'])}}">{{$personaje10['nombre']}}</a></h3>
			</header>
			<p>{{$personaje10['genero']}}</p>
		</article>	
		@endforeach		
	</div>
@endsection
@section('botones')
<center>
<footer>
<a href="{{route('inicio2')}}" class="button">Siguiente pagina ➜</a>
</footer>
</center>
</section>
@endsection
@section('banner')
<div class="wrapper style2">
<article id="main" class="container special">
<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
<header>
	<h2><a href="#">Rick and Morty</a></h2>
	<p>
	Es una serie de televisión estadounidense de animación para adultos creada por Justin Roiland y Dan Harmon en 2013 para Adult Swim.
	</p>
</header>
<p>
Rick y Morty (en inglés: Rick and Morty) es una serie de televisión estadounidense de animación para
adultos creada por Justin Roiland y Dan Harmon en 2013 para Adult Swim. La serie sigue las desventuras
de un científico, Rick, y su fácilmente influenciable nieto, Morty, quienes pasan el tiempo entre la
vida doméstica y los viajes espaciales, temporales e intergalácticos. Roiland es el encargado de darle voz
a Rick y a Morty, la serie también incluye las voces de Chris Parnell, Spencer Grammer y Sarah Chalke.
La serie se originó por un cortometraje rudimentario animado por Roiland para el festival de cine Channel
101 llamado Doc and Mharti, una parodia de los principales protagonistas de Back to the Future. Cuando la
cadena NBC despidió a Harmon en 2013 por discusiones entre él y los ejecutivos de la serie que había creado,
Community, él y Roiland desarrollaron una serie basada en los personajes ya creados por Roiland
</p></article></div>
@endsection