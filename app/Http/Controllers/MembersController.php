<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index() {

        $members = DB::table('member')->get();

        return view('members')->with([
            'members' => $members,
        ]);
    }
}
