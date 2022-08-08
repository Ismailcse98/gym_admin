<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $table ='generals';
    protected $fillable = ['email','phone','location','description','copyright','logo','facebook','twitter','instagram'];
}
