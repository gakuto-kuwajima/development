<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Community;

class CommunityController extends Controller
{
    //
    public function add()
    {
        return view('community.create');
    }


    public function create(Request $request)
    {
        $this->validate($request, Community::$rules);

        $community =new Community;
        $form = $request->all();

        if(isset($form['eyecatch'])){
          $eyecatchpath = $request->file('eyecatch')->store('public/image');
          $community->eyecatch_path = basename($eyecatchpath);
        } else {
          $community->eyecatch_path = null;
        }


        if(isset($form['message_image'])){
          $messageimagepath = $request->file('message_image')->store('public/image');
          $community->message_image_path = basename($messageimagepath);
        } else {
          $community->message_image_path = null;
        }


        unset($form['_token']);

        unset($form['eyecatch']);

        unset($form['message_image']);


        $community->fill($form);
        $community->save();


        return redirect('community/create');
    }


    public function index(Request $request)
    {
        $pages = Community::all();
        return view('community.index',['pages'=>$pages]);
    }


    public function edit(Request $request)
    {
        $community = Community::find($request->id);
        if (empty($community)){
           abort(404);
        }
        return view('community.edit', ['community_form' => $community]);
    }


    public function update(Request $request)
    {
        $this->validate($request, Community::$rules);

        $community = Community::find($request->id);

        $community_form = $request->all();
        if (isset($community_form['eyecatch'])){
          $eyecatchpath = $request->file('eyecatch')->store('public/image');
          $community->eyecatch_path = basename($eyecatchpath);
          unset($community_form['eyecatch']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->eyecatch_path = null;
        }

        if (isset($community_form['message_image'])){
          $messageimagepath = $request->file('message_image')->store('public/image');
          $community->message_image_path = basename($messageimagepath);
          unset($community_form['message_image']);
        }elseif (0 == strcmp($request->remove, 'true')){
          $community->message_image_path = null;
        }

        unset($community_form['_token']);
        unset($community_form['remove']);

        $community->fill($community_form)->save();

        return redirect('community');

    }


    public function delete(Request $request){
       $community = Community::find($request->id);

       $community->delete();
       return redirect('community');
    }

    public function toppage()
    {
        return view('toppage');
    }



}
