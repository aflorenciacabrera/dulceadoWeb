@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Ingresar Producto</div>

                <div class="card-body">
                   

              
<div class="col-md-12 col-md-offset-0" class="text-center" > 
 
       
        <div class="gallery col-md-12  center">
            <h1 class="gallery-title text-center">Productos</h1>
            <br> 
        </div>

        <div align="center">
            <a  type="button" href="{{url('producto/agregar')}}" class="btn btn-default btn-sl " >Ingreso de Producto <i class="glyphicon glyphicon-plus-sign"></i></a>
             <a type="button" class="btn btn-default btn-sl">
          <i class="glyphicon glyphicon-plus-sign"></i> Plus
             </a>
        	<i class="glyphicon glyphicon-plus-sign"></i>
        	
          </div>
    <div class="row">
    <div class="col-md-12 col-md-offset-0">    
            <div class="panel-body">
                  <div class="pull-left"><h3>Lista de Productos </h3></div>
                  <div class="pull-right"> 
                  </div>
                  <div class="table-container">
                    <table id="mytable" class="table table-bordred table-striped">
                     <thead>
                       <th>Muestra</th>
                       <th>Paciente</th>
                       <th>Depositante</th>               
                       <th>Cesión</th>
                     </thead>
                     <tbody>             
                      <tr>
                        <td colspan="8">No hay  registrados !!</td>
                      </tr>
                            
                    </tbody>
                  </table>          
                </div> 
           </div>
    </div>
    </div>
</div>


      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
