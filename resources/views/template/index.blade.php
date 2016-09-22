<!DOCTYPE html>
<html>
<head lang="es">
	<title>Abarrotes</title>
	@section('head')
	<link rel="stylesheet" type="text/css" href="css/app.css">
	@show
</head>
	<body>
		<div>
			<h1 class="text-center">Abarrotes</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation"><a href="categorias">Categorias</a></li>
					  <li role="presentation"><a href="productos">Agregar Productos</a></li>
					  <li role="presentation"><a href="informes">Inventario</a></li>
					</ul>
				</div>
					<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-body">
						    @yield('categoria')
						    @yield('informes')
						    @yield('productos')
						    @yield('informes_editar')
						  </div>
						</div>
					</div>
			</div>
		</div>
		
	@section('footer')
		<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
		
	@show
	</body>
</html>
