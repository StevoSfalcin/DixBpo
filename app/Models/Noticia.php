<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo','materia',];
}
