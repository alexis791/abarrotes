<!DOCTYPE html>
<html>
<head lang="es">
	<title>Inventarios</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
	<body>
		<div>
			<h1 class="text-center">INVENTARIOS</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="/categoria">Categorias</a></li>
					  <li role="presentation"><a href="#">Productos</a></li>
					  <li role="presentation"><a href="#">Informes</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					@yield('categoria')
				</div>
			</div>
		</div>
		

	</body>
</html>
