<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\company;
use App\Services\JobService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(company $company)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\company  $company
     * @param  \App\Models\Job  $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(company $company, Job $Job)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(company $company)
    {
        $package = JobService::checkPackage($company->id);
        $subscription = JobService::checkSubscription($company->id);
        return ($package || $subscription) ;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\company  $company
     * @param  \App\Models\Job  $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(company $company, Job $Job)
    {
        return $Job->company_id === $company->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\company  $company
     * @param  \App\Models\Job  $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(company $company, Job $Job)
    {
        return  $Job->company_id === $company->id;
    }


    
    /**
     * Determine whether the user can desactive or active the model.
     *
     * @param company $company
     * @param Job $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function desactiveOrActive(company $company, Job $Job)
    {
        return  $Job->company_id === $company->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\company  $company
     * @param  \App\Models\Job  $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(company $company, Job $Job)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\company  $company
     * @param  \App\Models\Job  $Job
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(company $company, Job $Job)
    {
        //
    }
}
