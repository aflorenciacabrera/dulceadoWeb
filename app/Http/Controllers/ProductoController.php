<?php

namespace dulceado\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
  public function galeriaProducto(){
      return view('producto.galeriaProducto');
    }
}
