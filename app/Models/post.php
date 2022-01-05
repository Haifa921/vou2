<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $fillable =['arabic','english','phone','email','orphan_type','amount','branch','id_num','date'];
}
