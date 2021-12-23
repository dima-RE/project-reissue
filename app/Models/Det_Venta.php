<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Det_Venta extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Det_Ventas';
    public $timestamps = false;
    //protected $primaryKey = 'cod_producto + num_venta';
    public $incrementing = false;
    //protected $keyType = 'integer';

    public function venta(){
        return $this->belongsTo(Venta::class);
    }
    
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
