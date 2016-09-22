@extends('template.index')
@section('informes')
				<table class="table">
					<thead>
						<th>ID</th>
						<th>Producto</th>
						<th>Unidad de medida</th> 
						<th>Precio $MXN</th>
						<th>Almacen</th>
						<th>Acciones</th>
					</thead>
					<tbody>
						@foreach($productos as $producto)
						<tr>
							<td>{{$producto->id}}</td>
							<td>{{$producto->nombre}}</td>
							<td>{{$producto->unidad_medida}}</td>
							<td>{{$producto->precio}}</td>
							<td>{{$producto->cantidad}}</td>
							<td><a class="btn btn-sm btn-primary" href="informes/{{$producto->id}}/edit"><span class="glyphicon glyphicon-edit"><span></a>
							<button class="btn btn-sm btn-danger" onclick="eliminar_articulo({{$producto->id}})"><span class="glyphicon glyphicon-remove"><span></button></td>
						</tr>
						@endforeach
					</tbody>
				</table>

				@section('footer')
					@parent
					<script type="text/javascript">
						function eliminar_articulo(id_articulo){
								$.ajax({
									type:'get',
									url:'informes/'+id_articulo+'/delete',
									data:'_token = {{csrf_token()}}',
									success: function(data){
										alert(data);
										location.reload();
									}
								});
							}
					</script>
				@stop

@stop