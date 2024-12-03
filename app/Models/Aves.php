<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aves extends Model
{
    use HasFactory;

    protected $table = "aves"; 
    protected $primaryKey = "id";
    protected $fillable = ['familia', 'nombrecientifico', 'nombrecomun', 'categoria', 'caracteristicas', 'imagen'];
}
