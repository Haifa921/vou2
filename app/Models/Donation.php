<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $appends =['type_name'];
    protected $hidden =['type'];
    
    public function getTypeNameAttribute()
    {
        return $this->type->name;
    }

    public function type()
    {
        return $this->belongsTo(DonationType::class,'donation_type_id');
    }
    
    public function patronFor()
    {
        return $this->hasOneThrough(AssistanceForm::class,Patron::class);
    }
}
