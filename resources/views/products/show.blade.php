@extends('layout.app')

@section('title', 'Detalle del Producto')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Detalle del Producto</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>ID:</strong> {{ $products->id }}
                    </li>
                    <li class="list-group-item">
                        <strong>Nombre:</strong> {{ $products->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Descripción:</strong> {{ $products->description }}
                    </li>
                    <li class="list-group-item">
                        <strong>Precio:</strong> ${{ number_format($products->price, 2) }}
                    </li>
                    <li class="list-group-item">
                        <strong>Fecha de creación:</strong> {{ $products->created_at->format('d/m/Y H:i') }}
                    </li>
                    <li class="list-group-item">
                        <strong>Fecha de actualización:</strong> {{ $products->updated_at->format('d/m/Y H:i') }}
                    </li>
                </ul>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Atrás
                </a>
            </div>
        </div>
    </div>
@endsection
