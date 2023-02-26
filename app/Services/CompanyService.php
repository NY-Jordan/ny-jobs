<?php


namespace App\Services;

use App\Models\Job;
use App\Models\JobPackage;
use App\Models\JobSubscription;

class CompanyService
{

    /**
     * AllView function
     *
     * @param integer $id
     * @return integer $views (all view of job of user)
     */
    public static  function AllView(int $id)
    {
        $views  = 0;
        $jobs = Job::where('company_id', $id)->get();
        if (!empty($jobs)) {
            foreach ($jobs as $key => $job) {
                $views += $job->view;
            }
        }
        return $views;

    }


}