<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = "continents";
    protected $primaryKey = "continent_id";
    use HasFactory;

    //relacion 1 a muchos con las regiones
    public function regiones(){
        //hasMany parametros
        //1) modelo a relacionar
        //2) FK del modelo actual en el modelo a relacionar
        return $this->hasMany( Region::class ,'continent_id');
    }
}
