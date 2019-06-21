<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    public function add()
    {
        return view('community.create');
    }

    public function create(Request $request)
    {
        return redirect('community/create');
    }

    public function toppage()
    {
        return view('toppage');
    }
}
