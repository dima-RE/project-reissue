<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'Ventas';
    public $timestamps = true;
    protected $primaryKey = 'num_venta';
    public $incrementing = true;
    protected $keyType = 'integer';

    public function local(){
        return $this->belongsTo(Local::class);
    }

    public function det_ventas(){
        return $this->hasMany(Det_Venta::class);
    }
}
