<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surgery extends Model
{
    use HasFactory;
    protected $table="surgeries";
    protected $fillable =['amount','name','phone','email','id_credit'];
}
