<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Offers;
use App\Models\JobPackage;
use Illuminate\Http\Request;
use App\Models\JobSubscription;
use App\Services\CampayService;
use Illuminate\Support\Facades\Auth;
use App\Models\CurriculumSubscription;

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
        return view('account.index2');
    }

    public function initSubscription($id, Request $request)
    {
        try {
            $amount = Offers::find($id)->amount;
            $init  = $this->campay->initPayment($request, $amount);
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
}
