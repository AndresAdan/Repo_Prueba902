<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachers;

class teachersController extends Controller
{

    public function index(){
        $teachers = teachers::orderBy('id','desc')->paginate(10);
        return view('indexteachers', compact('teachers'));
    }

    public function create(){
        return view('createteachers');
    }

    public function store(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Especialidad'=>'required',
            'NivelEstudios'=>'required'
        ]);
        teachers::create($request->post());
        return redirect()->route('teachers.index')->with('Confirmado','Registro Agregado Correctamente');        
    }

    public function edit($id){
        $teachers = teachers::find($id);
        return view('editteachers', compact('teachers'));
    }

    public function update(Request $request, $id){
        $teachers=teachers::find($id);
        $input=$request->all();
        $teachers->update($input);
        return redirect()->route('teachers.index')->with('Confirmación','Registro Actualizado');
    }

    public function destroy($id){
        $teachers=teachers::find($id);
        $teachers->delete();
        return redirect()->route('teachers.index')->with('Confirmacion', 'Registro Eliminado');
    }

    public function show($id){
        $teachers=teachers::find($id);
        return view('showteachers',['teachers'=>$teachers]);
    }   
}