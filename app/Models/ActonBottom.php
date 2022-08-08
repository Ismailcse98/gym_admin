<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActonBottom extends Model
{
    use HasFactory;
    protected $table = "acton_bottoms";
    protected $fillable = ['heading','description','icon'];
}
