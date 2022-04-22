@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('productos.index')}}">PRODUCTOS</x-ancla>
{{--
<x-ancla ref="{{route('tiendas.index')}}">TIENDAS</x-ancla>
<x-ancla ref="{{route('familias.index')}}">FAMILIAS</x-ancla>
--}}
@endsection
