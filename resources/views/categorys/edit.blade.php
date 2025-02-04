@extends('layout.app')

@section('title', 'Editar Producto')

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

        <h4>Editar Categoria</h4>

        <form action="{{ route('categorys.update', $category->id) }}" method="POST">
            @csrf
            @method ('PATCH')
            <div class="mb-3">
                <li class="list-group-item">
                    <strong>ID:</strong> {{ $categorys->id }}
                </li>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Nombre de categoria"
                    value="{{ $categorys->name }}">
            </div>
      
            <div class="mb-3">
              <li class="list-group-item">
                <strong>Fecha de creación:</strong> {{ $categorys->created_at->format('d/m/Y H:i') }}
              </li>
          </div>

          <div class="mb-3">
            <li class="list-group-item">
                <strong>Fecha de actualización:</strong> {{ $categorys->updated_at->format('d/m/Y H:i') }}
            </li>
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
