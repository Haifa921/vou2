<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistanceForm extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['afordable'];
    protected $hidden = ['type'];
    protected $wiht=['patron'];

    public function getAfordableAttribute()
    {
        $typeId= $this->type->id;
        $funds = Donation::where('donation_type_id',$typeId)->sum('amount');
        return $this->attributes['amount'] < $funds;
    }
    public function type()
    {
        return $this->belongsTo(DonationType::class,'type_id');
    }
    
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    
    public function patron()
    {
        return $this->hasOneThrough(Patron::class,Payment::class);
    }

}
