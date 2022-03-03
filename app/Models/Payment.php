<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function form()
    {
        return $this->belongsTo(AssistanceForm::class,'assistance_form_id');
    }
}
