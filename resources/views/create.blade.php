@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Producto</h1> 
</div>

<div class="container mt-5">
<form action="/createProduct" method="post">
@csrf
<div class="form-row mb-5">
    <div class="col">
      <input class="form-control" name="name" id="product" placeholder="Nombre del producto" value="{{old('name')}}">
      <small class="form-text text-muted text-danger">{{ $errors->first('name') }}</small>
  </div>
  
    <div class="col">
      <input class="form-control" name="price" id="product" placeholder="Precio" value="{{old('price')}}">
      <small class="form-text text-muted text-danger">{{ $errors->first('price') }}</small>
    </div>
</div>


  <button type="submit" class="btn btn-success">Guardar</button>
  <a href="/home" class="btn btn-danger">Cancelar</a>

</form>
</div>
@endsection
