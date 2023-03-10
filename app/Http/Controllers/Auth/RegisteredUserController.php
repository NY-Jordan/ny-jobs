<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Company;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'logo' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        

        $path = AppService::saveFile($request->name, $request->file("logo"), "company");

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'website' => $request->website,
            'facebook' =>$request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'logo' => $path,
        ]);    

        event(new Registered($company));
        Auth::login($company);
        return redirect(RouteServiceProvider::HOME);
    }
}
