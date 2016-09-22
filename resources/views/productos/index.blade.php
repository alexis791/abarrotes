@extends('template.index')
@section('productos')
<form class="form" method="post" action="productos">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label>Categorias</label>
    <select class="form-control" name="categoria">
      @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}">{{ $categoria->categoria }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Producto</label>
    <input type="text" class="form-control" id="producto" name="producto" placeholder="Ej.Tomate">
  </div>
  <div class="form-group">
    <label>Unidad de medida</label>
    <input type="text" class="form-control" id="unidad_medida" name="unidad_medida" placeholder="Ej. Kg, Lt, Cm ...">
  </div>
    <div class="form-group">
    <label>Precio</label>
    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ej. 23.90">
  </div>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ej. 100">
  </div>
  <button class="btn btn-success">Registrar Producto</button>
</form>

<?php $mensaje = Session::get('mensaje') ?>
{{$mensaje}}
@stop  