<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Curriculum;
use App\Models\CurriculumSubscription;
use App\Models\JobPackage;
use App\Models\JobSubscription;
use App\Models\Offers;
use App\Services\JobService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AppController extends Controller

{

    /**
     * index function 
     *  
     *  * @return \Illuminate\View\View (home page)
     */
    public function index()
    {
        $jobs = Job::getRecentJobs();
        return view('index', ['jobs' => $jobs]);
    }

     /**
     * offers function
     * show the list of offers 
     *  @return \Illuminate\View\View
     */
    public function offers()
    {
        $packages = Offers::where('type', 'package')->get();
        $subscriptions = Offers::where('type', 'subscription')->get();
        $s_curriculum = Offers::where('type', 'cvtheque')->get();
        return view('offers', compact('packages', 'subscriptions', 's_curriculum'));
    }

    /**
     * cvTheque function
     * 
     * @return \Illuminate\View\View
     */
    public function cvTheque()
    {
        $curriculum = Curriculum::all();
        return view('cvtheque', ['curriculum' => $curriculum]);
    }


    
}
