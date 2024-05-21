<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;

    protected $table='teachers';
    protected $primarykey='id';
    protected $fillable=[
                'Nombre',
                'Apellidos',
                'Direccion',
                'Telefono',
                'Especialidad',
                'NivelEstudios'
    ];
}
