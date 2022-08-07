<?php

namespace App\Http\Controllers;

use App\Models\tbl_category;
use App\Models\tbl_client;
use App\Models\tbl_events;
use App\Models\tbl_news;
use App\Models\tbl_page_home;
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
        if (isset($request->cta)&&!empty($request->cta)) {
            $request->validate([
                'cta_text' =>  'required',
                'cta_button_text' =>  'required',
                'cta_button_url' =>  'required'
            ]);
            $settings = tbl_settings::find(1);
            $settings->cta_text = $request->cta_text;
            $settings->cta_button_text = $request->cta_button_text;
            $settings->cta_button_url = $request->cta_button_url;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->cta_background_hidden)&&!empty($request->cta_background_hidden)) {
            $request->validate([
                'cta_background' =>  'required'
            ]);
            $path = $request->file('cta_background')->storeAs(
                'images', 'cta_background'.rand(1, 1000), 'public'
            );
            $settings = tbl_settings::find(1);
            $settings->cta_background = $path;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->email)&&!empty($request->email)) {
            $request->validate([
                'send_email_from' =>  'required',
                'receive_email_to' =>  'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->receive_email_to = $request->receive_email_to;
            $settings->send_email_from = $request->send_email_from;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->news_page_sidebar)&&!empty($request->news_page_sidebar)) {
            $request->validate([
                'sidebar_total_recent_post' =>  'required',
                'sidebar_news_heading_category' =>  'required',
                'sidebar_news_heading_recent_post' =>  'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->sidebar_total_recent_post = $request->sidebar_total_recent_post;
            $settings->sidebar_news_heading_category = $request->sidebar_news_heading_category;
            $settings->sidebar_news_heading_recent_post = $request->sidebar_news_heading_recent_post;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->event_page_sidebar)&&!empty($request->event_page_sidebar)) {
            $request->validate([
                'sidebar_total_upcoming_event' =>  'required',
                'sidebar_total_past_event' =>  'required',
                'sidebar_event_heading_upcoming' =>  'required',
                'sidebar_event_heading_past' =>  'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->sidebar_total_upcoming_event = $request->sidebar_total_upcoming_event;
            $settings->sidebar_total_past_event = $request->sidebar_total_past_event;
            $settings->sidebar_event_heading_upcoming = $request->sidebar_event_heading_upcoming;
            $settings->sidebar_event_heading_past = $request->sidebar_event_heading_past;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->service_single_page_sidebar)&&!empty($request->service_single_page_sidebar)) {
            $request->validate([
                'sidebar_service_heading_service' =>  'required',
                'sidebar_service_heading_quick_contact' =>  'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->sidebar_service_heading_service = $request->sidebar_service_heading_service;
            $settings->sidebar_service_heading_quick_contact = $request->sidebar_service_heading_quick_contact;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        if (isset($request->portfolio_single_page_sidebar)&&!empty($request->portfolio_single_page_sidebar)) {
            $request->validate([
                'sidebar_portfolio_heading_project_detail' =>  'required',
                'sidebar_portfolio_heading_quick_contact' =>  'required',
            ]);
            $settings = tbl_settings::find(1);
            $settings->sidebar_portfolio_heading_project_detail = $request->sidebar_portfolio_heading_project_detail;
            $settings->sidebar_portfolio_heading_quick_contact = $request->sidebar_portfolio_heading_quick_contact;
            $settings->save();
            return back()->with('message', 'operation successfully');
        }
        return back()->with('message', 'error, try again');
    }
    public function pages()
    {
        $pages   = tbl_page_home::find(1);
        return view('pages', [
            'pages' => $pages
        ]);
    }
    public function update_pages(Request $request)
    {
        $pages   = tbl_page_home::find(1);
        if (isset($request->meta_items)&&!empty($request->meta_items)) {
            $request->validate([
                'title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
            ]);
            $pages->title = $request->title;
            $pages->meta_keyword = $request->meta_keyword;
            $pages->meta_description = $request->meta_description;
            $pages->save();
            return back()->with('message', 'error, try again');

        }
    }
}
