<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volu1 extends Model
{
    use HasFactory;
    
    protected $table="volu1s";
    protected $fillable =['amount','name','phone'];
}
