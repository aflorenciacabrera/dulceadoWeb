<?php

namespace dulceado\Http\Controllers;

use Illuminate\Http\Request
;
use dulceado\producto;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    //
  public function galeriaProducto(){
    $productos = producto::all();
      return view('producto.galeriaProducto', compact('productos'));
    }
  
     public function producto(){
        $productos = producto::all();
      return view('producto.producto', compact('productos'));
    }
    public function agregarProducto(){
      
      return view('producto.agregarProducto');
    }

    public function altaProducto(Request $request){

      $p = new producto; 
  
      $p->avatar= $request->file('avatar')->store('/public');     
      $p->titulo= $request->titulo;
      $p->tipo= $request->tipo;
      $p->tamano= $request->tamano;
      $p->peso= $request->peso;
      $p->medida= $request->medida;
      $p->sabor= $request->sabor;
      $p->descripcion= $request->descripcion;
      $p->precio= $request->precio;

      $p->save();
     
      return redirect(url('producto'));
  // return view('producto.agregarProducto');
    }

    
}
