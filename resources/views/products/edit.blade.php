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

        <h4>Crear Producto</h4>

        <form action="{{ route('products.update', $products->id) }}" method="POST">
            @csrf
            @method ('PATCH')
            <div class="mb-3">
                <li class="list-group-item">
                    <strong>ID:</strong> {{ $products->id }}
                </li>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                    value="{{ $products->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción"
                    >{{ $products->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="$" step="0.01"
                    value="{{ $products->price }}">
            </div>

            <div class="mb-3">
              <li class="list-group-item">
                <strong>Fecha de creación:</strong> {{ $products->created_at->format('d/m/Y H:i') }}
              </li>
          </div>

          <div class="mb-3">
            <li class="list-group-item">
                <strong>Fecha de actualización:</strong> {{ $products->updated_at->format('d/m/Y H:i') }}
            </li>
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
