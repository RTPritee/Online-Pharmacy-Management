<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'suplliersId';
    public $timestamps = false;
    function supplier(){
        return $this->hasMany(supplier::class);

    }
}
