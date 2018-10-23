@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
{{-- ********************************************************************************************************** --}}
                        <div class="row">
                        <div class="col-md-12 col-md-offset-0">    
                                <div class="car-body">
                                    {{-- Titulo izquierda --}}
                                    <div class="pull-left"><h3> </h3></div>
                                    {{-- Titulo derecha --}}
                                    <div class="pull-right"></div>
{{-- ***************************************Lista de productos***************************************************** --}}
<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h4>Lista de Productos</h4>
        <div class="table-responsive">        
               <table id="mytable" class="table table-bordred table-striped">                 
                   <thead>              
                   <th>#</th>
                    <th>Imagen</th>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>Tamaño</th>
                    <th>Peso</th>
                    <th>Medidas</th>
                    <th>Sabor</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Editar</th>           
                    <th>Eliminar</th>
                    </thead>
                        <tbody> 
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Foto"><button class="btn btn-outline-success btn-xs" data-title="Foto" data-toggle="modal" data-target="#foto" ><i class="fa fa-image"></i></button></p></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-outline-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-edit"></i></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-outline-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
                        </tr>
                        </tbody>
                </table>
{{-- ***********************Pagination********************************* --}}
            <div class="col-lg-3 offset-lg-4">
                <nav >
                    <ul class="pagination  ">
                        <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>          
        </div>
	</div>
</div>
{{-- ***********************Modal de Edit********************************* --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
           
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group"> 
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group">
                <textarea rows="2" class="form-control" placeholder=""></textarea>
            </div>
        </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-info btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Aceptar</button>
        </div>
    </div>
    <!-- /.modal-content --> 
   </div>
      <!-- /.modal-dialog --> 
</div>
{{-- ***********************Modal de Delete********************************* --}}
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title custom_align" id="Heading">Eliminar Producto</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar el producto?</div> 
        </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="fa fa-ok-sign"></span> Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> No</button>
        </div>
    </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>
{{-- ***********************Modal de Edit********************************* --}}
<div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="foto" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Imagen de Producto</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
        </div>
        <div class="modal-body">
            {{-- <div class="form-group">
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group"> 
                <input class="form-control " type="text" placeholder="">
            </div>
            <div class="form-group">
                <textarea rows="2" class="form-control" placeholder=""></textarea>
            </div> --}}
        </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-info btn-lg" style="width: 100%;"><span class="fa fa-ok-sign"></span>Aceptar</button>
        </div>
    </div>
    <!-- /.modal-content --> 
   </div>
      <!-- /.modal-dialog --> 
</div>
{{-- ***************************************Tabla*************************************************************** --}}   
                    {{-- <div class="table-container">
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
                    </div>  --}}
{{-- ********************************************************************************************************** --}}
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
