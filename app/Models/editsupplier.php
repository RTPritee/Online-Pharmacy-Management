<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editsupplier extends Model
{
    use HasFactory;
    protected $table = 'editsuppliers';
    protected $primaryKey = 'supplierId';
    public $timestamps = false;
    function supplier(){
        return $this->hasMany(supplier::class);

    }
}
