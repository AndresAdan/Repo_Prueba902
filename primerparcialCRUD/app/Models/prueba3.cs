// Hola esto va ser una tercera prueba en el archivo prueba3.cs

public static CONTROLADOR{
    public int carrito {get; set;}
    public string modelo {get; set;}
}

// Esta es un practica git revert al archivo Prueba3.cs para el proyecto de primerparcialCRUD

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $table='students';
    protected $primarykey='id';
    protected $fillable=[
                'Nombre',
                'Apellidos',
                'Direccion',
                'Telefono',
                'Email'
    ];
}
