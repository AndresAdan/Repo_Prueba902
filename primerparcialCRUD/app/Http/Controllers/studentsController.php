<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class studentsController extends Controller
{
    public function index(){
        $students = students::orderBy('id','desc')->paginate(10);
        return view('index', compact('students'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request-> validate([
            'Nombre'=>'required',
            'Apellidos'=>'required',
            'Direccion'=>'required',
            'Telefono'=>'required',
            'Email'=>'required'
        ]);
        students::create($request->post());
        return redirect()->route('students.index')->with('Confirmado','Registro Agregado Correctamente');        
    }

    public function edit($id){
        $students = students::find($id);
        return view('edit', compact('students'));
    }

    public function update(Request $request, $id){
        $students=students::find($id);
        $input=$request->all();
        $students->update($input);
        return redirect()->route('students.index')->with('Confirmación','Registro Actualizado');
    }

    public function destroy($id){
        $students=students::find($id);
        $students->delete();
        return redirect()->route('students.index')->with('Confirmacion', 'Registro Eliminado');
    }

    public function show($id){
        $students=students::find($id);
        return view('show',['students'=>$students]);
    }
}
