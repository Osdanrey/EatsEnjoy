@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Platos</h1>
        <form class="filter-form" method="GET" action="{{ route('dishes.index') }}">
            <label class="filter-label" for="category">Filtrar por Categoría:</label>
            <select class="filter-select" name="category" id="category" onchange="this.form.submit()">
                <option value="">Todos</option>
                <option value="desayuno" {{ request('category') == 'desayuno' ? 'selected' : '' }}>Desayuno</option>
                <option value="almuerzo" {{ request('category') == 'almuerzo' ? 'selected' : '' }}>Almuerzo</option>
                <option value="cena" {{ request('category') == 'cena' ? 'selected' : '' }}>Cena</option>
            </select>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nombre del Plato</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $dish->price }}</td>
                        <td>{{ ucfirst($dish->category) }}</td> <!-- capitalizamos la categoría -->
                        <td>
                            <a href="{{ route('dishes.edit', $dish) }}" class="edit-button">Editar</a>
                            <form action="{{ route('dishes.destroy', $dish) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('dishes.create') }}" class="primary-button">Agregar Plato</a>
    </div>
@endsection

