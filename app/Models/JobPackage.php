<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        "falt_rate",
        "price",
        "number", 
        "offer_id", 
        "user_id"
    ];
}
