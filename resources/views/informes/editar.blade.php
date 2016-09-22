@extends('template.index')

@section('head')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
@stop

@foreach ($productos as $producto)
 @endforeach
 
@section('informes_editar') 
<form class="form" method="POST" action="update">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label>Categorias</label>
    <select class="form-control" name="categoria">
      @foreach ($productos as $producto)
          <option value="{{$producto->id_categoria}}">{{ $producto->categoria }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Producto</label>
    <input type="text" class="form-control" id="producto" name="producto" placeholder="Ej.Tomate" value="{{$producto->nombre}}">
  </div>
  <div class="form-group">
    <label>Unidad de medida</label>
    <input type="text" class="form-control" id="unidad_medida" name="unidad_medida" placeholder="Ej. Kg, Lt, Cm ..." value="{{$producto->unidad_medida}}">
  </div>
    <div class="form-group">
    <label>Precio</label>
    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ej. 23.90" value="{{$producto->precio}}">
  </div>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ej. 100" value="{{$producto->cantidad}}">
  </div>
  <button class="btn btn-warning" type="submit">Actualizar</button>
</form>

@stop  