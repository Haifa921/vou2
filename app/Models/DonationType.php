<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    public function assistanceForms()
    {
        return $this->hasMany(AssistanceForm::class);
    }
}
