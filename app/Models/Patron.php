<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    use HasFactory;

    // protected $with = ['payment', 'donation'];
    protected $guarded = [];
    protected $appends = ['form'];


    public function getFormAttribute()
    {
        return $this->payment->form;
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
