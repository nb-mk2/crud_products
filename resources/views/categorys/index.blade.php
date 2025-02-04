@extends('layout.app')

@section('title', 'Listado de Categorias')

@section('content')

<div class="container">
    <h1>Listado de Categorias</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{route('categorys.create')}}" class="btn btn-primary"><i class="bi bi-plus"></i>Agregar Categoria</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
@foreach ($categorys as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->description}}</td>
        <td class="d-flex justify-content-start gap-2">
            <a href="{{ route('categorys.edit', $category->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('categorys.destroy', $category->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Esta seguro que desea eliminar esta categoria?')" class="btn btn-danger">Borrar</button>
            </form>
        </td>
        
    </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection


