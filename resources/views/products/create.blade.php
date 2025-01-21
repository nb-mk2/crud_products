@extends('layout.app')

@section('title', 'Create Product')

@section('content')

<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <h4>Crear Producto</h4>

  <form action="{{ route('products.store') }}" method="POST">
    @csrf <!-- Coloca la directiva CSRF correctamente dentro del formulario -->

    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" >
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción" ></textarea>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Precio</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="$" step="0.01" >
    </div>

    <button type="submit" class="btn btn-primary">
      <i class="bi bi-save"></i> Guardar
    </button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Atrás
    </a>
  </form>
</div>

@endsection
