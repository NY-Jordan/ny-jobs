<?php


namespace App\Services;

use App\Models\Job;
use App\Models\JobPackage;
use App\Models\JobSubscription;

class JobService
{


    public function __construct()
    {
    }


    /**
     * checkPackage function
     * check if user has a job package for do a publication
     * @param integer $id
     * @return JobPackage
     */
    public static function checkPackage(int $id) 
    {
        try {
            $package = JobPackage::where('company_id', $id)->where('etat', 1)->first();
            return $package; 
        } catch (\Throwable $th) {
            return false;
        }
    }


    /**
     * checkSubscription function
     *
     * @param integer $id
     * @return JobSubscription
     */
    public static function checkSubscription(int $id)
    {
        try {
            $subscription = JobSubscription::where('user_id', $id)->where('etat', 1)->first();
            return $subscription; 
        } catch (\Throwable $th) {
            return false;
        }
    }

    
}
