<?php

namespace dulceado\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //     return view('home');
    // }

    
    public function index(Request $request)
    {
        // Autentifica si el usuario registrado tiene asignado un rol
        $request->user()->authorizeRoles(['admin', 'user']);
        // Panel de menu botones de Administracion
        if(Auth::user()->hasRole('admin')){
          return view('admin.menu');
       }
        return view('home');
    }
/*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

    public function menu(){
        if(Auth::user()->hasRole('admin')){
          return view('admin.menu');
       }
        
    }
}
