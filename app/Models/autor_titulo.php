<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor_titulo extends Model
{
    use HasFactory;
    protected $table = "autor_titulo";
    protected $fillable=['autores_id', 'titulos_id', 'Nota'];
}
