<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table = "autores";
    protected $fillable = ['au_nombre','au_apellido','telefono','calle','ciudad','estado','pais',];

    public function rtitulos()
    {
    return $this->belongsToMany('App\Models\titulo', 'autor_titulo', 'autores_id', 'titulos_id')->withPivot('autores_id', 'Nota');
    }

}
