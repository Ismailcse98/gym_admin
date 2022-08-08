<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActonTop extends Model
{
    use HasFactory;
    protected $table="acton_tops";
    protected $fillable =['title','icon','image'];
}
