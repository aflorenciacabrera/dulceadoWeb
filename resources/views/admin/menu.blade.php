@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
              {{-- Panel de botones --}}
                <div class="links">
                    {{-- Pedidos --}}
                    <a class="btn btn-info  btn-lg" role="button" href="{{ url('pedidos') }}">
                        <img src="{{asset('img/realiza_pedido.png')}}" width="100" /><br>
                        <span class="label label-default">Pedido </span> </a> 
                    {{-- Productos--}}
                     <a class="btn btn-warning  btn-lg" role="button" href="{{ url('producto') }}">
                        <img src="{{asset('img/easter-egg-bunny-pattern-icon-68527.png')}}" width="100" /><br>
                        <span class="label label-default">Producto </span> </a>
                    {{-- Control Stock --}}       
                    <a class="btn btn-danger  btn-lg" role="button"  href="{{ url('stock') }}"> 
                        <img src="{{asset('img/Control-de-stock.png')}}" width="100" /><br>
                        <span class="label label-default">Control Stock</span></a>
                    {{-- Clientes --}}
                    <a class="btn btn-primary  btn-lg" role="button"  href="{{ url('cliente') }}">
                         <img src="{{asset('img/los-diferentes-pc3bablicos-de-una-empresa.png')}}" width="100"/><br>
                         <span class="label label-default">Clientes </span></a>
                    {{-- Gastos --}}
                    <a class="btn btn-success  btn-lg" role="button"  href="{{ url('/admin/gasto/gasto') }}"> 
                        <img src="{{asset('img/images.jpg')}}" width="100" /><br>
                        <span class="label label-default">Gastos </span></a>
                </div> 
        </div> 
</div> 
@endsection