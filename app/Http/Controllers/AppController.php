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


    /**
     * addJob function
     * check if user had a package or subscription, if not return to offers view
     * @return \Illuminate\View\View
     */
    public function addJob()
    {
        try {
            if (Auth::user()) {
                $package = JobService::checkPackage(Auth::user()->id);
                $subscription = JobService::checkSubscription(Auth::user()->id);
                if ($package || $subscription) {
                    return redirect('/add/new/job');
                }
                return redirect('/offers');
            }
            return redirect('/offers');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'error refresh and try again');
        }
    }
}
