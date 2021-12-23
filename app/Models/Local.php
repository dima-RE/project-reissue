<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Locales';
    public $timestamps = false;
    protected $primaryKey = 'id_local';
    public $incrementing = false;
    protected $keyType = 'string';

    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
