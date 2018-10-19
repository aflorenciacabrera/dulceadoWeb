@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        
   {{-- Panel de botones --}}
    
        
            <div class="links">
                
   {{-- Panel de botones --}}
    
                    {{-- Pedidos --}}
                    <a class="btn btn-info active btn-lg" role="button" href="{{ url('/admin/pedidos') }}">
                        <img src="{{asset('img/realiza_pedido.png')}}" width="100" /><br>
                        <span class="label label-default">Pedido </span> </a>

                        
                    {{-- Productos--}}
                    <a class="btn btn-warning active btn-lg" role="button" href="{{ url('admin/producto/producto')}}">
                        <img src="{{asset('img/easter-egg-bunny-pattern-icon-68527.png')}}" width="100" /><br>
                    <span class="label label-default">Productos </span> </a>
                    {{-- Control Stock --}}
                    
                    <a class="btn btn-danger active btn-lg" role="button"  href="{{ url('/admin/stock/stock') }}"> 
                        <img src="{{asset('img/Control-de-stock.png')}}" width="100" /><br>
                        <span class="label label-default">Control Stock</span></a>
                    {{-- Clientes --}}
                    <a class="btn btn-primary active btn-lg" role="button"  href="{{ url('/admin/cliente/cliente') }}">
                         <img src="{{asset('img/los-diferentes-pc3bablicos-de-una-empresa.png')}}" width="100"/><br>
                         <span class="label label-default">Clientes </span></a>
                    {{-- Gastos --}}
                    <a class="btn btn-success active btn-lg" role="button"  href="{{ url('/admin/gasto/gasto') }}"> 
                        <img src="{{asset('img/images.jpg')}}" width="100" /><br>
                        <span class="label label-default">Gastos </span></a>
 
    {{--Fin de Panel de Botones--}}
 </div> </div> </div> 
@endsection