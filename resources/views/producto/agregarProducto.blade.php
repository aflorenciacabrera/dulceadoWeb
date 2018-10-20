@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Ingreso de Producto') }}</h4></div>
                {{-- *************************************************************************************** --}}
                <div class="card-body">
                        <form method="POST" action="{{url('producto/agregar')}}">
                        @csrf
                        {{-- ************************ Cambiar imagen de producto************************--}}
                        <div class="col-md-3 col-lg-3 " align="center"> {{-- <img src="{{asset('img/descarga (3).jpg')}}" style="width:100px; height:100px; float:left; margin-right:30px;"  class="img-responsive" > --}}

                            <div class="col-lg-offset-2 " > 
                                <img alt="User Pic" src="{{asset('img/images.png')}}" style="width:140px; height:120px; float:left; margin-right:70px;" id="profile-image1" > 
                            </div> 
                            {{-- <form enctype="multipart/form-data" action="{{url('producto/agregar')}}" method="POST">    --}}
                                <input id="profile-image-upload" value="Seleccionar imagen" name="avatar" class="hidden" type="file" accept="image/*" ><br><br><br>
                                <div   style="color:#999;" >haga clic aquí para cambiar la imagen del perfil</div>  
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Cargar" class="pull btn btn-sm btn-default active">
                            </form>   --}}
                        </div>
                        
                        {{-- ******************************************************************************--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Título</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="titulo" value="" required autofocus>
                            </div>
                            <label for="name" class="col-md-2 col-form-label "> Tipo</label>
                            <div class="col-md-4">
                                 <select name="tipo" id="">
                                    <option value="Figura"> Figura  </option>
                                    <option value="Huevo"> Huevo </option>
                                </select> 
                            </div>
                        </div>
                        {{-- ****************************************************************************** --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Tamaño</label>
                            <div class="col-md-4">
                                <select name="tamano" id="">
                                    <option value="Único">Único</option>
                                  <option value="Chico">Chico</option>
                                  <option value="Mediano">Mediano</option>
                                  <option value="Grande">Grande</option>
                                  <option value="jumbo">jumbo</option>
                                </select>                           
                            </div>  
                            <div class="col-md-2  label-column"> 
                               <label class="control-label" >Peso </label> 
                           </div> 
                             <div class="col-sm-2 input-column"> 
                             <input class="form-control" type="number"  min="0.00" max="10000.00" name="peso" placeholder="N°"  />                         
                          </div>           
                            
                        </div>
                        {{-- ****************************************************************************** --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Medidas</label>
                            <div class="col-md-4">
                                <li>Ancho: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                              <li>Alto: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                            </div>    
                            <div class="col-sm-2 label-column"> 
                              <label class="control-label" for="name-input-field" >Chocolate </label>
                          </div>        
                            <div class="col-sm-4 input-column">
                                <li><label class="radio-inline"><input type="radio" name="sabor" value="Negro" checked >Negro</label></li>
                                <li><label class="radio-inline"><input type="radio" name="sabor" value="Blanco" >Blanco</label></li>
                               <li><label class="radio-inline"><input type="radio" name="sabor" value="Mixto">Mixto</label></li>                                      
                            </div>
                        </div>
                       {{-- ******************************************************************************--}}
                        <div class="form-group row">
                           <label for="comment" class="col-md-2 col-form-label "> Descripción</label>
                            <div class="col-md-5">
                                <textarea class="form-control" rows="2"  name="descripcion" id="comment" required></textarea>
                                {{-- <input id="name" type="text" class="form-control" name="descripcion" value="" required autofocus> --}}
                            </div>
                         <div class="col-sm-1 label-column">  
                              <label class="control-label">Precio</label> 
                          </div>
                         <div class="col-sm-2 input-column">
                             <input class="form-control"  type="number"  name="precio" min="0.00" max="10000.00" step="0.01" placeholder="$" required />
                          </div>     
                        </div>
                        {{--******************************************************************************--}}
                         <div class="form-group row">
                                       
                        </div>
                        {{-- ******************************************** footer panel ***********************************************- --}}
                        <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
                                </button>
                                <span class="pull-right">                        
                                <a href="{{ url('/producto') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">Cancelar<i class="glyphicon glyphicon-share-alt"></i></a>
                                </span>
                        </div>
                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 {{-- *********************************** Script ***********************************- --}}
<script>
    $(function() {
        $('#profile-image1').on('click', function() {
            $('#profile-image-upload').click();
        });
    });       
</script> 

@endsection