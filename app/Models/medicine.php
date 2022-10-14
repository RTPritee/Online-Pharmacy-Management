<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;
    protected $table = 'medicines';
    public $primaryKey = 'medicineId';
    protected $fillable = ['name','quantity','price','discount','photo'];
    public $timestamps = false;
}
