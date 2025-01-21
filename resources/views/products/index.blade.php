@extends('layout.app')

@section('title', 'Products List')

@section('content')

<div class="container">
    <h1>Lista de Productos</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{route('products.create')}}" class="btn btn-primary"><i class="bi bi-plus"></i>Agregar Producto</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
@foreach ($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td class="d-flex justify-content-start gap-2">
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalle</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
        
    </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection


