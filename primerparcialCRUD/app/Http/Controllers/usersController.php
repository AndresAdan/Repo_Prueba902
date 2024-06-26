<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usersController extends Controller
{
    public function index(){
        $users = User::orderBy('name')->paginate(10);
        return view('indexusers', compact('users'));
    }

    public function create(){
        return view('createusers');
    }

    public function store(Request $request){
        $request-> validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        User::create($request->post());
        return redirect()->route('users.index')->with('Confirmado','Registro Agregado Correctamente');        
    }

    public function edit($id){
        $users = User::find($id);
        return view('editusers', compact('users'));
    }

    public function update(Request $request, $id){
        $users=User::find($id);
        $input=$request->all();
        $users->update($input);
        return redirect()->route('users.index')->with('Confirmación','Registro Actualizado');
    }

    public function destroy($id){
        $users=User::find($id);
        $users->delete();
        return redirect()->route('users.index')->with('Confirmacion', 'Registro Eliminado');
    }

    public function show($id){
        $users=User::find($id);
        return view('showusers',['users'=>$users]);
    }
}
