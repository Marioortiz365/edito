<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titulo extends Model
{
    use HasFactory;
    protected $table = "titulos";
    protected $fillable = ['nombre','tipo','precio','id_editorial',];

    public function reditoriales()
    {
    return $this->belongsTo('App\Models\editorial', 'id_editorial');
    }

    public function rautores()
    {
    return $this->belongsToMany('App\Models\autor', 'autor_titulo', 'titulos_id', 'autores_id')->withPivot('titulos_id', 'Nota');
    }
}

