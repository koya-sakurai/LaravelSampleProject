<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models;

class MembersController extends Controller
{
    public function index() {

        $members = DB::table('member')->get();
        // $members = Models\MemberModel::get();

        return view('members')->with([
            'members' => $members,
        ]);
    }

    public function store(Request $request) {

        DB::table('member')->insert(         [
            'name' => $request->name,
            'name_kana' => $request->name_kana,
            'email' => $request->email,
        ]);      

        $members = DB::table('member')->get();
        // $members = Models\MemberModel::get();

        return view('members')->with([
            'members' => $members,
        ]);
    }
}
