<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        date_default_timezone_set('Asia/Tokyo');
        
        return view('dashboard')->with([
            "now" => date("Y/m/d H:i:s"),
        ]);
    }
}
