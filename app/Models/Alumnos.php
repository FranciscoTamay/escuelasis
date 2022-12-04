<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table='alumnos';

    protected $primaryKey='matricula';

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'matricula',
        'nombre',
        'apellidos',
        'grupo'
    ];
}
