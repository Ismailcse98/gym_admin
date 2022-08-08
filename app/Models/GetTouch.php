<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetTouch extends Model
{
    use HasFactory;
    protected $table = "get_touches";
    protected $fillable = ['title','icon'];
}
