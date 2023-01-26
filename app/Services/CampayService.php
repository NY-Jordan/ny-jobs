<?php

namespace App\Services;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class CampayService 
   
{
    /**
     *Campay credentials
     * @var string
     */
    private $username = "vaGVIwXzgNErXOL5LxE-Voyjp3fjJumS22Jn4HobQlZrsCrh1fsTG611Y43FFVvwxQIAS-3q-9McyzOCirIivg";
    private $password = "vrvj1lvTKfoCRFfwLPzBo1ZyM77r4LKRGQlyOQMaKB01x_fn9yydqV5aVdj-7jvMxZdUs_B4pAQs_rmYDZ07UA";



    public function __construct()
    {
        
    }


    /**
     * initPayment function
     *
     * init a payment by camapy 
     * @param Request $request
     * @param int $amount
     * @return $link (the link for the payment)
     */
    public   function initPayment(Request $request, int $amount)  {
        
        try {
            
            $request_token = Http::post('https://demo.campay.net/api/token/', [
                "username" =>  $this->username,
                "password" => $this->password
            ]);        
            $token   = $request_token->json()['token'];
    
            //request for obtain the payment links
            $reference = 'NY-JOBS-payment-by-campay-'.uniqid();
            $response = Http::withHeaders([
                'Authorization' => 'Token '.$token,
            ])->post('https://demo.campay.net/api/get_payment_link/', [
                'Authorization' => 'Token '.$token,
                "amount" => $amount,
                "external_reference" => $reference,
                "currency" => "XAF",
                "redirect_url" => "http://localhost:8000/payement/status"
            ]);   

            if ($response->status() === 400) {
                return false ;              
            }
            $request->session()->put('token', $token);
            $request->session()->put('amount', $amount);
            $link = $response->json()['link'];
            return $link;
        } catch (\Throwable $th) {
            return false;             
        }   
    }


    /**
     * getStatus function
     * get the status of the payment 
     * @param Request $request
     * @return array
     */
    public function getStatus(Request $request)
    {
        
        try {
        
        $token = $request->session()->get('token');
        $id = $request->session()->get('id'); // id of the offers
        $amount = $request->session()->get('amount');
        $reference = $request->reference;
        //request for obtain the status
        $response = Http::withHeaders([
            'Authorization' => 'Token ' . $token[0],
        ])->get('https://demo.campay.net/api/transaction/' . $reference . '/', [
            'Authorization' => 'Token ' . $token[0],
        ]);

        $request->session()->forget('token');
        $id = $request->forget()->get('id'); 
        $amount = $request->forget()->get('amount');
        
        if ($response->status() === 401) {
            return  false;
        }   
        return  [
            "status" => $response->json()['status'],
            "id" =>  $id,
            "amount" =>  $amount,
        ]; 
        
        } catch (\Throwable $th) {
            return  false;
        }
        
    } 

}
