<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table='Gestion';
    
    protected $primaryKey='idGestion';
    public $timestamps=false;
    
    protected $fillable =[
        'fecha',
        'montoIngreso',
        'montoEgreso',
        'Utilidad',
        'idUsuario'
    ];
    
    protected $guarded =[
        
    ];
}
