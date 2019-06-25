<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class CommunityController extends Controller
{
    //
    public function show(Request $request)
    {
        $page = Community::find($request->id);
        return view('community.show',['page' =>$page]);
    }
}
