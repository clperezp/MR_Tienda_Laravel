@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('productos.create')}}">Nuevo Producto</x-ancla>
{{--    <x-ancla ref="{{route('principal')}}">Volver</x-ancla> --}}
@endsection

@section("contenido")
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre_corto}}</td>
                <td>{{$producto->PVP}}</td>
                <td>
                    <x-ancla ref="{{route('productos.create')}}">COMPRAR</x-ancla>
                </td>
            </tr>
        @endforeach
    </table>
    <hr>
    <div>
{{$productos->links()}}
    </div>
@endsection
