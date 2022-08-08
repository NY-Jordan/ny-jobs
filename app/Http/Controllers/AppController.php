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
            $request->validate([
                'logo' => 'required'
            ]);
            $path = $request->file('logo')->storeAs(
                'images', 'logo'.rand(1, 1000), 'public'
            );
            $settings = tbl_settings::find(1);
            $settings->logo = $path;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->favicon) && !empty($request->favicon)) {
            $request->validate([
                'favicon' => 'required'
            ]);
            $path = $request->file('favicon')->storeAs(
                'images', 'fvcn'.rand(1, 1000), 'public'
            );
            $settings = tbl_settings::find(1);
            $settings->favicon = $path;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->top_bar)&&!empty($request->top_bar)) {
            $request->validate([
                'top_bar_email' => 'required',
                'top_bar_phone' => 'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->top_bar_email = $request->top_bar_email;
            $settings->top_bar_phone = $request->top_bar_phone;
            $settings->save();
            return back()->with('message', 'operation successfully');


        }
        if (isset($request->general_section)&&!empty($request->general_section)) {
            $request->validate([
                'footer_col1_title' => 'required',
                'footer_col2_title' => 'required',
                'footer_col3_title' => 'required',
                'footer_col4_title' => 'required',
                'footer_copyright' => 'required',
                'footer_email' => 'required',
                'footer_phone' => 'required',
                'footer_portfolio_item' => 'required',
                'footer_recent_news_item' => 'required',

            ]);
            $settings = tbl_settings::find(1);
            $settings->footer_col1_title = $request->footer_col1_title;
            $settings->footer_col2_title = $request->footer_col2_title;
            $settings->footer_col3_title = $request->footer_col3_title;
            $settings->footer_col4_title = $request->footer_col4_title;
            $settings->footer_copyright = $request->footer_copyright;
            $settings->footer_email = $request->footer_email;
            $settings->footer_phone = $request->footer_phone;
            $settings->footer_recent_portfolio_item = $request->footer_portfolio_item;
            $settings->footer_recent_news_item = $request->footer_recent_news_item;

            $settings->save();
            return back()->with('message', 'operation successfully');


        }
        if (isset($request->newsletter)&&!empty($request->newsletter)) {
            $request->validate([
                'newsletter_text' =>  'required'
            ]);
            $settings = tbl_settings::find(1);
            $settings->newsletter_text = $request->newsletter_text;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
    }
}
