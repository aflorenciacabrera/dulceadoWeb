@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{{-- ******************************************** CSS Style ************************************************* --}}
<style>
    .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top:10px;
  margin-bottom: 10px;
}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


{{-- ***************************************** Galeria de Imagen *********************************************** --}}
{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="card">   
        <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pascua</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cortantes</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Reposteria</a> 
					</div>
        </nav>
                </div>
 @if($productos->count())
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <div class="container">
	<div class="row">
		<div class="row">

           
            {{-- *************************Galeria de Imagen PASCUA **********************************--}}
            
              @foreach ( $productos as $producto) 
               @if($producto->categoria == 'Pascua')
            <div class="col-lg-3 col-md-4 col-xs-6 thumb"> 
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{Storage::url($producto->avatar)}}"
                   data-target="#image-gallery" >
                    <img class="img-thumbnail " 
                         src="{{Storage::url($producto->avatar)}}"
                         style="width:400px; height:100px; margin-right:100px;" 
                         alt="Another alt text">
                </a>
                <h4>{{$producto->titulo}}</h4>
                <p>{{$producto->categoria}}</p>
      			<p>{{$producto->descripcion}} </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">${{$producto->precio}}</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-info right" > Ver</button>
      				</div>    				
                  </div>
                  <br >
            </div> 
           
            @endif
    @endforeach
                            </div>
        </div>
    </div>         
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          
                   <div class="container">
	<div class="row">
		<div class="row">

           
            {{-- **************************Galeria de Imagen CORTANTES***********************--}}
            
              @foreach ( $productos as $producto) 
               @if($producto->categoria == 'Cortante')
            <div class="col-lg-3 col-md-4 col-xs-6 thumb"> 
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{Storage::url($producto->avatar)}}"
                   data-target="#image-gallery" >
                    <img class="img-thumbnail " 
                         src="{{Storage::url($producto->avatar)}}"
                         style="width:400px; height:100px; margin-right:100px;" 
                         alt="Another alt text">
                </a>
                <h4>{{$producto->titulo}}</h4>
                <p>{{$producto->categoria}}</p>
      			<p>{{$producto->descripcion}} </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">${{$producto->precio}}</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-info right" > Ver</button>
      				</div>    				
                  </div>
                  <br >
            </div> 
             
            @endif
    @endforeach
                           
  
                            </div>
        </div>
    </div>       
              </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                       
            <div class="container">
	<div class="row">
		<div class="row">

           
            {{-- *******************************Galeria de Imagen REPOSTERIA*********************************--}}
           
              @foreach ( $productos as $producto) 
               @if($producto->categoria == 'Reposteria')
            <div class="col-lg-3 col-md-4 col-xs-6 thumb"> 
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{Storage::url($producto->avatar)}}"
                   data-target="#image-gallery" >
                    <img class="img-thumbnail " 
                         src="{{Storage::url($producto->avatar)}}"
                         style="width:400px; height:100px; margin-right:100px;" 
                         alt="Another alt text">
                </a>
                <h4>{{$producto->titulo}}</h4>
                <p>{{$producto->categoria}}</p>
      			<p>{{$producto->descripcion}} </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">${{$producto->precio}}</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-info right" > Ver</button>
      				</div>    				
                  </div>
                  <br >
            </div> 
            
            @endif
    @endforeach
  
                            </div>
        </div>
    </div>
               
                            @else
                                <tr>
                                    <td colspan="8">No hay Productos en Galeria !!</td>
                                </tr>
                            @endif        
					</div>
				</div>
                        




        {{-- Modal de las imagenes --}}
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>

                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>  {{--Fin de Modal imagen--}}
            {{-- Modal detalles de producto --}}

            {{-- Fin de Modal detalles de producto --}}
	    </div>
    </div>
</div>
{{-- ********************************************** JS Scrip ************************************************* --}}
<script>
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>
@endsection
