<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TinTuc;
use App\Image;
use Auth;

class HomeController extends Controller
{
    function getIndex(){
        $user = User::all();
        $tintuc = TinTuc::all();
        $image = Image::all();
        // dd($tintuc);
     //dd($user);
       // dd($user[0]->fullname);
        return view('pages.home', compact('user', $user, 'tintuc', $tintuc, 'image', $image));
    }
    function getTinTuc($id){
        $tintuc = TinTuc::where('id', $id)->first();
        return view('pages.tintuc', compact('tintuc',$tintuc));
    }
}
