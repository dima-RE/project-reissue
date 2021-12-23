<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'Categorias';
    public $timestamps = false;
    protected $primaryKey = 'cod_categoria';
    public $incrementing = true;
    protected $keyType = 'tinyInteger';

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
