<?php

namespace App\Http\Controllers;

use App\Models\tbl_category;
use App\Models\tbl_client;
use App\Models\tbl_events;
use App\Models\tbl_news;
use App\Models\tbl_page_photo_gallery;
use App\Models\tbl_page_pricing;
use App\Models\tbl_page_services;
use App\Models\tbl_page_testimonial;
use App\Models\tbl_photo;
use App\Models\tbl_pricing_table;
use App\Models\tbl_services;
use App\Models\tbl_settings;
use App\Models\tbl_team_member;
use App\Models\tbl_testimonials;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {

        return view('home',[
            'total_news' => count(tbl_news::all()),
            'total_category' => count(tbl_category::all()),
            'total_client' => count(tbl_client::all()),
            'total_events' => count(tbl_events::all()),
            'total_team_member' => count(tbl_team_member::all()),
            'total_photo' => count(tbl_photo::all()),
            'total_princing' => count(tbl_pricing_table::all()),
            'total_services' => count(tbl_services::all()),
            'total_testimonials' => count(tbl_testimonials::all())
        ]);
    }

    public function settings()
    {

        return view('settings', [
            'settings' => tbl_settings::find(1)
        ]);
    }
    public function updateLogo(Request $request)
    {
        if (isset($request->logo) && !empty($request->logo)) {
            $path = $request->file('logo')->storeAs(
                'images',
                $request->images,
                'public'
            );
            $settings = tbl_settings::find(1);
            $settings->logo = $path;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->favicon) && !empty($request->favicon)) {
            $path = $request->file("logo")->storeAs(
                'images',
                $request->favicon,
                'public'
            );
            $settings = tbl_settings::find(1);
            $settings->favicon = $path;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
    }
}
