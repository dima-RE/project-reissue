<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'Productos';
    public $timestamps = false;
    protected $primaryKey = 'cod_producto';
    public $incrementing = false;
    protected $keyType = 'integer';

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
    
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function det_ventas(){
        return $this->hasMany(Det_Venta::class);
    }
}
