<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Push extends Model
{
    use HasFactory;
    protected $table = "pushes";
    protected $fillable =['title_top','title_bottom','description','image'];
}
