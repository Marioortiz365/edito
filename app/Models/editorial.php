<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    use HasFactory;
    protected $table = "editoriales";
    protected $fillable = ['nombre','ciudad','estado',];

    public function rtitulos()
    {
    return $this->hasMany('App\Models\titulo', 'id_editorial');
    } 
}
