<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $guarded = [];

    public function Place()
    {
        return $this->belongsTo(places::class, 'place_id');
    }
}
