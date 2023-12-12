<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombres',
        'fechaIngreso',
        'departamento',
        'area',
        'correo',
        'cedulaJefe',
        'estado',
        'usuario',
        'accesos',
        'cedulaJefeDepartamento',
        'fechaNombramiento',
        'cargo',
        'grupo',
        'sueldo',
        'codigoPuesto',
        'genero',
        'relacionLaboral',
        // ... otros campos que necesites
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario');
    }

}
