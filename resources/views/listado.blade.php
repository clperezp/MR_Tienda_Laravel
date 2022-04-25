@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('principal')}}">Volver</x-ancla>
@endsection

@section("contenido")
    <table>
        <caption>Listado de Productos</caption>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre_corto}}</td>
                <td>{{$producto-PVP}}</td>
            </tr>
        @endforeach
    </table>
@endsection
