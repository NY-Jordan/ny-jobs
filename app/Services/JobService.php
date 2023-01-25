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
     * @return boolean
     */
    public static function checkPackage(int $id) : bool
    {
        try {
            $package = JobPackage::where('user_id', $id)->first();
            $return  = ($package) ?  true : false;
            return $return; 
        } catch (\Throwable $th) {
            return false;
        }
    }


    /**
     * checkSubscription function
     *
     * @param integer $id
     * @return boolean
     */
    public static function checkSubscription(int $id) : bool
    {
        try {
            $subscription = JobSubscription::where('user_id', $id)->first();
            $return  = ($subscription) ?  true : false;
            return $return; 
        } catch (\Throwable $th) {
            return false;
        }
    }

    
}
