@extends('layout.app')

@section('title', 'Crear Categoria')

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

  <h4>Crear Categoria</h4>

  <form action="{{ route('categorys.create') }}" method="POST">
    @csrf 

    <div class="mb-3">
      <label for="description" class="form-label">Descripcion</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Nombre de la categoria" value="{{ old('description') }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <i class="bi bi-save"></i> Guardar
    </button>
    <a href="{{ route('categorys.index') }}" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Atrás
    </a>
  </form>
</div>

@endsection
