<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSubscription extends Model
{
    use HasFactory;
    protected $fillable = [
        "falt_rate", 
        "price", 
        "number", 
        "expired_at", 
        "offer_id", 
        "user_id"
    ];
}
