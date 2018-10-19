<?php

namespace dulceado\Http\Controllers;
use Illuminate\Http\Request;
use dulceado\producto;
class ProductoController extends Controller
{
    //
  public function galeriaProducto(){
      return view('producto.galeriaProducto');
    }
  
     public function producto(){
      return view('producto.producto');
    }
    public function agregarProducto(){
      return view('producto.agregarProducto');
    }

    public function altaProducto(Request $request){

      $p = new producto; 
  
      // $p->avatar= $request->avatar;     
      $p->titulo= $request->titulo;
      $p->tipo= $request->tipo;
      $p->tamano= $request->tamano;
      $p->peso= $request->peso;
      $p->medida= $request->medida;
      $p->sabor= $request->sabor;
      $p->descripcion= $request->descripcion;
      $p->precio= $request->precio;

      $p->save();
     
      return redirect(url('producto/agregar'));

      // return view('producto.agregarProducto');
    }
}
