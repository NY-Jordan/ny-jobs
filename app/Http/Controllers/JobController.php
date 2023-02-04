<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Services\AppService;
use App\Services\JobService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    /**
     * addJob function
     * check if user had a package or subscription, if not return to offers view
     * @return \Illuminate\View\View
     */
    public function add()
    {
        try {
            if (Auth::user()) {
                $package = JobService::checkPackage(Auth::user()->id);
                $subscription = JobService::checkSubscription(Auth::user()->id);
                if ($package || $subscription) {
                    return view('account.job.add');
                }
                return redirect('/offers');
            }
            return redirect('/offers');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'error refresh and try again');
        }
    }


    /**
     * create function
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        //dd($request->user()->can('create'));
        $request->user()->can('create');
        $request->validate([
            "image" => "required",
            "title" => "required | min:5",
            "type" => "required",
            "location" => "required",
            "description" => "required | min:255",
            "apply_by" => "required",
            "to_apply" => "required",
        ]);
        try {
            $path = AppService::saveFile($request->title, $request->file("image"), "jobs");
            $job = job::create([
                "title" => $request->title,
                "description" => $request->description,
                "type" => $request->type,
                "location" => $request->location,
                "image" => $path,
                "apply_by" => $request->apply_by,
                "to_apply" => $request->to_apply,
                "experience" => $request->experience,
                "expired_at" => $request->expired_at,
                "company_id" => Auth::user()->id,
            ]);
            return redirect("/account");
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('message', 'error, retry and refresh ');
        }
    }


    /**
     * delete function
     *
     * @param [type] $id
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function delete($id, Request $request)
    {
        try {
            $job = Job::find($id);
            if (!$job)
                abort('404');
            if ($request->user()->cannot('delete', $job)) {
                abort('401');
            }
            $job->delete();
            return redirect('/account')->with('message', 'Job successfull delete');
        } catch (\Throwable $th) {
            return back()->with('message', 'Error, refresh and try again');
        }
    }


    /**
     * edit function
     *
     * @param [type] $id
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $job = Job::find($id);
        if (!$job)
            abort('404');
        if ($request->user()->cannot('edit', $job)) {
            abort('401');
        }
        return view('account.job.edit', compact('job'));
    }


    public function update($id, Request $request)
    {
        try {
            $job = Job::find($id);
            if (!$job)
                abort('404');
            if ($request->user()->cannot('edit', $job)) {
                abort('401');
            }

            $job->title = $request->title;
            $job->type = $request->type;
            $job->location = $request->location;
            $job->description = $request->description;
            $job->apply_by = $request->apply_by;
            $job->email_to_apply = $request->email_to_apply;
            if ($request->image) {
                $path = AppService::saveFile($request->title, $request->file("image"), "jobs");
                $job->image = $path;
            }
            $job->save();
            return redirect('/account')->with('message', 'Job successfull update');
        } catch (\Throwable $th) {
            return back()->with('message', 'Error, refresh and try again');
        }
    }


    public function details($id)
    {
        $job =  Job::find($id);
        if ($job) {
            $job->view += 1;
            $job->save();
            return  view('account.job.details', compact('job'));
        } else  abort('404');
    }


    public function search(Request $request)
    {
        $KeyWord = $request->keyword ?? '';
        $location = $request->location ?? '';
        $type = $request->type ?? '';
        $result  = new Job();
        if (isset($KeyWord) && !empty($KeyWord)) {
            $result = $result->where('title', 'like', "%$KeyWord%")->orWhere('description', 'like', "%$KeyWord%");
        }
        if (isset($location) && !empty($location)) {
            $result = $result->where('location', 'like', "%$location%");
        }
        if (isset($type) && !empty($type)) {
            $result = $result->where('type', $type);
        }
         $res  = $result->paginate(10);
         return view("search", ['results' => $res]);
    }
}
