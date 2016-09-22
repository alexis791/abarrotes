
	@extends('template.index')
	@section('categoria')
				<form method="post" action="{{'categorias'}}">
					<div class="form-group">
						<label>Categorias</label>
						<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
						<input class="form-control" type="text" id="categoria" name="categoria" placeholder="Agrege una categoria">
					</div>
					<button type="submit" class="btn btn-success">Agregar</button>
				</form>

				<?php $mensaje = Session::get('mensaje') ?>
				@if( $mensaje == "exito" )
				<p>Exito al registrar categoria</p>
				@elseif( $mensaje == "error" )
				<p>Error al regisrar categoria</p>
				@else
				<p>{{$mensaje}}</p>
				@endif

				<div class="panel panel-default">
				  <div class="panel-body">
					 <table class="table">
					 	<thead>
					 		<th>ID</th>
					 		<th>Categoria</th>
					 		<th>Registro</th>
					 		<th>Eliminar</th>
					 	</thead>
					 	<tbody>
					 		@foreach($categorias as $categoria)
					 		
					 		<tr>
					 			<td>{{$categoria->id}}</td>
					 			<td>{{$categoria->categoria}}</td>
					 			<td>{{$categoria->created_at}}</td>
					 			<td><a class="btn btn-danger" onclick="eliminar_categoria({{$categoria->id}})">Eliminar</a></td>
					 		</tr>
					 		@endforeach
					 	</tbody>
					 </table> 
					</div>
				</div>
				@section('footer')
					@parent
						<script type="text/javascript">
							function eliminar_categoria(id_categoria){
								$.ajax({
									type:'get',
									url:'categorias/'+id_categoria+'/delete',
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
