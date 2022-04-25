<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = "cod";
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
    public $fillable = ['cod', 'nombre', 'nombre_corto', 'descripcion', 'PVP', 'familia'];
    use HasFactory;
}
