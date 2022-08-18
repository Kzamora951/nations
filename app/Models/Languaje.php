<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languaje extends Model
{
    protected $table = "languages";
    protected $primaryKey = "language_id";
    use HasFactory;

    public function idiomas(){
        //parametros
        //1 modelo a relacionar
        //2 tabla intermedia
        //3 clave foranea de el modelo actual en la tabla intermedia
        //4 clave foranea de el modelo a relacionar en la tabla intermedia
        return $this->belongsToMany(Country::class,'country_languages','language_id','country_id');
    }
}

