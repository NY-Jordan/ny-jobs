<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        "title" ,
        "description" ,
        "status" ,
        "type" ,
        "location" ,
        "company_id",
        "experience",
        "expired_at",
        "image" ,
        "apply_by" ,
        "to_apply" ,
    ];

   
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }


    /**
     * getRecentJobs function
     *
     * get 7 recent jobs offers
     * @return Job
     */
    public static function getRecentJobs()
    {
        try {
            $jobs = Job::where('status', 1)
                        ->take(7)
                        ->get();
            
            return $jobs;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
