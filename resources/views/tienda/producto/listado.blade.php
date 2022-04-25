@extends('layout')
@section("menu")
@endsection

@section("content")
    <div class="container-fluid">
    <table>

        <tr>
            <th>COD</th>
            <th>Nombre</th>
            <th>Nombre_Corto</th>
            <th>PVP</th>
            <th>Familia</th>
            <th></th>
        </tr>
        @foreach($producto as $product)
            <tr>
                <td>{{$product->cod}}</td>
                <td>{{$product->nombre}}</td>
                <td>{{$product->nombre_corto}}</td>
                <td>{{$product->PVP}}</td>
                <td>{{$product->familia}}</td>
                <td><x-ancla ref="#">Comprar</x-ancla></td>

            </tr>

        @endforeach
        </table>
    </div>
    <div class="p-10">
        {{$producto->links()}}
    </div>
@endsection

