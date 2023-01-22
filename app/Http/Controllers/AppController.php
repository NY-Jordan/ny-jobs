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
        return view('index');
    }

   
}
