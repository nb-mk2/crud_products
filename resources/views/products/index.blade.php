@extends('layout.app')

@section('title', 'Products List')

@section('content')

<div class="container">
    <h1>Products List</h1>
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
        <td>{{product->name}}</td>
        <td>
            <a href ="{{route('products.show', $product->id)}}" class="btn btn-primary">Details</a>
            <a href ="{{route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                @csrf //Mecanimos de seguridad de organismo de Laravel 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> 

        </td>
    </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection


