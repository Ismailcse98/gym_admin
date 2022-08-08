<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainsInfo extends Model
{
    use HasFactory;
    protected $talbe = "trains_infos";
    protected $fillable = ['name','designation','description','image','facebook','twitter','instagram'];
}
