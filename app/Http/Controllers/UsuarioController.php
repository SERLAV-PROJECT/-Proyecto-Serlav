<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
   
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.listusuario')->with('usuarios', $usuarios);
    }

   
    public function create()
    {
        return view('usuario.createusuario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'max:50'],
            'documento' => ['required', 'numeric', 'min:4'],
            'telefono' => ['required', 'numeric', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'estado' => ['required', 'in:Activo,Inactivo'],
        ],
        [
            'required' => 'Campo obligatorio',
            'unique' => 'Correo ya se encuentra registrado',
        ]
        );

        $usuarios = User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'estado' => $request->estado,
        ]);

        return redirect('/usuarios');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario.editusuario')->with('usuario',$usuario);
    }

function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'max:50'],
            'documento' => ['required', 'numeric', 'min:4'],
            'telefono' => ['required', 'numeric', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'estado' => ['required', 'in:Activo,Inactivo'],
        ],
        [
            'required' => 'Campo obligatorio',
            'unique' => 'Correo ya se encuentra registrado',
        ]
        );

        $usuario = User::find($id);

        $usuario->name = $request->get('name');
        $usuario->apellido = $request->get('apellido');
        $usuario->documento = $request->get('documento');
        $usuario->telefono = $request->get('telefono');
        $usuario->email = $request->get('email');
        $usuario->password = Hash::make($request->get('password'));
        $usuario->estado = $request->get('estado');

        $usuario->save();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario-> delete();

        return redirect('/usuarios');
    }
}
