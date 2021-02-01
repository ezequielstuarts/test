@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/nuevo">Nuevo Producto</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de producto</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                  <tr>
                  <th scope="row">{{$product->id}}</th>
                      <td> {{$product->name}} </td>
                      <td><a href="/product/edit/{{$product->id}}" class="btn btn-sm btn-info"> Editar</a></td>
                      <td>
                          <form action="/product/delete/{{$product->id}} " method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              
            </tbody>
          </table>
                </div>
        </div>
    </div>
</div>
@endsection
