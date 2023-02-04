<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    public function job()
    {
        return $this->hasMany(Job::class);
    }

    public function curriculumSubscription()
    {
        return $this->hasMany(CurriculumSubscription::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'website' ,
        'facebook' ,
        'twitter',
        'linkedin' ,
        'logo',
    ];
}
