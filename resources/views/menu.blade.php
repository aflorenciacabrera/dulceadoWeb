@extends('layouts.app')
@section('content')

<br>
<p></p>
   {{-- Panel de botones --}}
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="col-md-11 col-md-offset-3">
                    {{-- Pedidos --}}
                    <a class="btn btn-info active btn-lg" role="button" href="{{ url('/admin/pedidos') }}">
                        <img src="{{asset('img/realiza_pedido.png')}}" width="100" /><br>
                        <span class="label label-default">Pedido </span> </a>
                    {{-- Productos--}}
                    <a class="btn btn-warning active btn-lg" type="button" href="{{ url('admin/producto/producto')}}">
                        <img src="{{asset('img/easter-egg-bunny-pattern-icon-68527.png')}}" width="100" /><br>
                    <span class="label label-default">Productos </span> </a>
                    {{-- Control Stock --}}
                    <a class="btn btn-danger active btn-lg" type="button"  href="{{ url('/admin/stock/stock') }}"> 
                        <img src="{{asset('img/Control-de-stock.png')}}" width="100" /><br>
                        <span class="label label-default">Control Stock</span></a>
                    {{-- Clientes --}}
                    <a class="btn btn-primary active btn-lg" type="button"  href="{{ url('/admin/cliente/cliente') }}">
                         <img src="{{asset('img/los-diferentes-pc3bablicos-de-una-empresa.png')}}" width="100"/><br>
                         <span class="label label-default">Clientes </span></a>
                    {{-- Gastos --}}
                    <a class="btn btn-success active btn-lg" type="button"  href="{{ url('/admin/gasto/gasto') }}"> 
                        <img src="{{asset('img/images.jpg')}}" width="100" /><br>
                        <span class="label label-default">Gastos </span></a>
                </div>
            </div>
        </div>
    </div>
    {{--Fin de Panel de Botones--}}

@endsection