@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('productos.index')}}">PRODUCTOS</x-ancla>
@endsection

@section("contenido")
    <h1>Página Principal</h1>
@endsection
