<?php

namespace dulceado\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function __construct () {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    protected function guard () {
        return Auth::guard('user');
    }

    public function perfil () {
       
            return view('usuario.perfil');
        
    }
    public function editarPerfil (Request $request) {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->telefono = $request->telefono;
        
        $user->save();
        // return view("institucion.mostrarCapacidad");
        return redirect(url('/perfil'));
    }

    public function update_avatar (Request $request) {
        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/cargas/avatars/'.$filename ));

            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect(url('/perfil'));
    }

    public function eliminarPerfil (Request $request) {
        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect(url('/'))->with('status','Tu cuenta a sido ELIMINADA');
    }

}
