<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;

    public $guarded = [];

    public function Grache()
    {
        return $this->belongsTo(Grache::class, 'grache_id');
    }
}
