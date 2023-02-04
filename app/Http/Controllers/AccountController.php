<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Offers;
use App\Models\Company;
use App\Models\JobPackage;
use App\Services\AppService;
use Illuminate\Http\Request;
use App\Models\JobSubscription;
use App\Services\CampayService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CurriculumSubscription;
use Illuminate\Contracts\View\View;

class AccountController extends Controller
{

    private $campay;

    public function __construct()
    {
        $this->campay = new CampayService();
    }

    /**
     * index function 
     *  
     *  * @return \Illuminate\View\View (home page)
     */
    public function index()
    {
        $jobs = Job::where('company_id', Auth::user()->id)->get();
        return view('account.index2', compact("jobs"));
    }

    public function password()
    {
        return view('account.password');
    }

    public function settings()
    {
        return view('account.setting');
    }

    public function initSubscription($id, Request $request)
    {
        try {
            $amount = Offers::find($id)->amount;
            $init  = $this->campay->initPayment($request, 10);
            if (!$init) {
                return back()->with('message', "nous avons quelques problèmes veuillez réessayer plus tard");
            }
            $link = $init;
            $request->session()->put('id', $id);
            return redirect($link);
        } catch (\Throwable $th) {
            return back()->with('message', "nous avons quelques problèmes veuillez réessayer plus tard");
        }
    }


    /**
     * StatusSubscribePackage function
     *
     * @param Request $request
     * @return \Illuminate\View\View (account page)
     */
    public function statusSubscription(Request $request)
    {
        try {
            // if is okay, return id of offers, amount and status of teh payment 
            $status  = $this->campay->getStatus($request);
            if (!$status) {
                return back()->with('message', "Echec du payement, verifier votre compte et reesayer");
            }
            $offer = Offers::find($status['id']);
            $type_offer = $offer->type;
            $user_id = Auth::user()->id;
            // save the subscription offer
            if ($type_offer === "package") {
                JobPackage::create(["falt_rate" => $offer->title, "price" => $status['amount'], "number" =>  $offer->number, "offer_id" => $status['id'], "user_id" => $user_id]);
            } elseif ($type_offer === "subscription") {
                // will fixe it 
                $expire_at = (now() + $offer->days);
                JobSubscription::create(["falt_rate" => $offer->title, "price" => $status['amount'], "number" =>  $offer->number, "expired_at" => $expire_at, "offer_id" => $status['id'], "user_id" => $user_id]);
            } elseif ($type_offer === "cvtheque") {
                // will fixe it 
                $expire_at = (now() + $offer->days);
                CurriculumSubscription::create(["falt_rate" => $offer->title, "price" => $status['amount'],  "expired_at" => $expire_at, "offer_id" => $status['id'], "user_id" => $user_id]);
            }
            redirect('/account')->with('message', "Subscription sucessfully");       
            
        } catch (\Throwable $th) {
            return back()->with('message', "nous avons quelques problèmes veuillez réessayer plus tard");
        }
    }


    /**
     * updateProfil function
     * update the profile off the company
     * @param  $id
     * @param Request $request
     * @return \Illuminate\View\View (setting page)
     */
    public function updateProfil($id, Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
        ]);
        try {
            $company  = Company::find($id);
            $company->name = $request->name;
            $company->email = $request->email;
            $company->website = $request->website;
            $company->facebook = $request->facebook;
            $company->twitter = $request->twitter;

            if (!empty($request->logo)) {
                $path = AppService::saveFile($request->name, $request->file("logo"), "company");
                $company->logo = $path;
            }
            $company->save();
            return back()->with('message', "Profile update successfully"); 
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('message', "error, refresh and try again"); 
        }
    }

    
    /**
     * updatePassword function
     *
     * @param  $id
     * @param Request $request
     *@return \Illuminate\View\View (password update  page)
     */
    public function updatePassword($id, Request $request)
    {
        $request->validate([
            "new_password" => "required",
            "old_password" => "required",
            "confirm_password" => "required",
        ]);
        if (password_verify($request->old_password, Auth::user()->password)) {
            if ($request->new_password === $request->confirm_password) {
                $company = Company::find($id);
                $company->password = Hash::make($request->new_password);
                $company->save();
                return  back()->with('message', "Password successfullt update");
            }
            return  back()->with('message', "Confirm password failed");
        }
        return  back()->with('message', "Old password is not correct");
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return \Illuminate\View\View
     */
    public function delete($id) 
    {
        try {
            Company::find($id)->delete();
            return redirect('/');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('message', "error, refresh and try again"); 
        }
        
    }

}
