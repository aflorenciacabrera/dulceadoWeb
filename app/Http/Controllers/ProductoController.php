<?php

namespace dulceado\Http\Controllers;

use Illuminate\Http\Request;

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
}
