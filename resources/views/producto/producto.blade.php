@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <h3 >Productos</h3></div>
                <div class="card-body">
{{-- ********************************************************************************************************** --}}
                        <div class="col-md-12 col-md-offset-0" class="text-center" >      
                            
                            <div align="center">
                                
                                <a  rol="button" href="{{url('producto/agregar')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                        <div class="row">
                        <div class="col-md-12 col-md-offset-0">    
                                <div class="panel-body">
                                    {{-- Titulo izquierda --}}
                                    <div class="pull-left"><h3>Lista de Productos </h3></div>
                                    {{-- Titulo derecha --}}
                                    <div class="pull-right"> 
                                        
                                    </div>
                                    {{-- Tabla --}}
                                    <div class="table-container">
                                        <table id="mytable" class="table table-bordred table-striped">
                                            <thead>
                                                <th></th>
                                                <th></th>
                                                <th></th>               
                                                <th></th>
                                            </thead>
                                            <tbody>             
                                                <tr>
                                                <td colspan="8">No hay  registrados !!</td>
                                            </tbody>
                                        </table>          
                                    </div> 
                            </div>
                        </div>
                        </div>
                    </div>
{{-- ********************************************************************************************************** --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
