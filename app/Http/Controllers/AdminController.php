<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\TinTuc;
use App\Image;
use App\Video;
use Hash;

class AdminController extends Controller
{
    function getLogin(){
        return view('admin.pages.login');
    }
    function postLogin(Request $req){
        $data = [
            'username' => $req->username,
            'password' =>   $req->password
        ];

        if(Auth::attempt($data)){
           // dd(Auth::user());
            //return redirect()->back()->with('success', 'Đăng nhập thành công!'); 
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Sai thông tin đăng nhập!'); 
        //return redirect()->route('home');
    }
    function getHome(){
        return view('admin.pages.index');
    }
    // function getImage(){
    //     return view('admin.pages.image');
    // }
    // function getRegister(){
    //     return view('admin.pages.register');
    // }
    // function postRegister(Request $req){
    //     $user = new User;
    //     $user->username = $req->username;
    //     $user->fullname = $req->fullname;
    //     $user->email = $req->email;
    //     $user->password =Hash::make($req->password);
    //     $user->save();
    //     return redirect()->route('login')->with('success','Đăng ký thành công!');
    // }

    /** User*/
    function getEditUser(){
        $user = Auth::user();
        //dd($user);
        return view('admin.pages.edit_profile', compact('user'));
    }
    function postEditUser(Request $req){
        $user = Auth::user();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->fullname = $req->fullname;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->website = $req->website;
        $user->description = $req->description;
        
        $user->save();
        return redirect()->back()->with('message', 'Cập nhật thành công!');
    }
    /*TinTuc*/
    function getTinTuc(){
        $tintuc = TinTuc::all();
        return view('admin.pages.tintuc', compact('tintuc', $tintuc));
    }
    function getAddTinTuc(){
        return view('admin.pages.add-tintuc');
    }
    function postAddTinTuc(Request $req){
        $tintuc = new TinTuc();
        $tintuc->tieude = $req->tieude;
        $tintuc->tomtat = $req->tomtat;
        $tintuc->noidung = $req->noidung;
        $tintuc->status = isset($req->status)&& $req->status=="on"?1:0;
        if($req->hasFile('image')){
            $image = $req->file('image');
            $name = time().$image->getClientOriginalName();
            $image->move('upload/tintuc',$name);
            $tintuc->hinhanh = $name;
        }
        $tintuc->save();
        return redirect()->route('tintuc', $tintuc)->with('success', 'Thêm mới thành công!');
    }
    function getEditTinTuc($id){
        $tintuc = TinTuc::where('id', $id)->first();
        return view('admin.pages.edit-tintuc', compact('tintuc',$tintuc));
    }
    function postEditTinTuc(Request $req){
        $tintuc = TinTuc::findOrFail($req->id);
        //dd($tintuc);
        if($tintuc){
            $tintuc->tieude = $req->tieude;
            $tintuc->tomtat = $req->tomtat;
            $tintuc->noidung = $req->noidung;
            if($req->hasFile('image')){
                $image = $req->file('image');
                $name = time().$image->getClientOriginalName();
                $image->move('upload/tintuc',$name);
                $tintuc->hinhanh = $name;
            }
            
            $tintuc->save();
            return redirect()->back()->with('success', 'Cập nhật thành công!');
        }
    }
    function getDeleteTinTuc($id){
        $tintuc = TinTuc::findOrFail($id);
        $tintuc->delete();
        return redirect()->back()->with('success', 'Xóa dữ liệu thành công!');
    }

    /** Image*/
    function getImage(){
        $image = Image::all();
        return view('admin.pages.image', compact('image', $image));
    }
    function postAddImage(Request $req){
        $hinhanh = new Image;
        $hinhanh->status = isset($req->status)&& $req->status=="on"?1:0;
        if($req->hasFile('image')){
            $image = $req->file('image');
            $name = time().$image->getClientOriginalName();
            $image->move('upload/hinhanh', $name);
            $hinhanh->hinh = $name;
        }
        $hinhanh->save();
        return redirect()->back()->with('success', 'Thêm hình ảnh thành công!');
    }
    function getEditImage($id){
        $image = Image::where('id', $id)->first();
        return view('admin.pages.edit_image', compact('image',$image));
    }
    function postEditImage(Request $req){
        $hinhanh = Image::findOrFail($req->id);
        if($hinhanh){
            if($req->hasFile('image')){
                $image = $req->file('image');
                $name = time().$image->getClientOriginalName();
                $image->move('upload/hinhanh', $name);
                $hinhanh->hinh = $name;
            }
        }
        $hinhanh->save();
        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }
    function getDeleteHinhAnh($id){
        $tintuc = Image::findOrFail($id);
        $tintuc->delete();
        return redirect()->back()->with('success', 'Xóa dữ liệu thành công!');
    }
    /**Video */

    function getVideo(){
        $video = Video::all();
        return view('admin.pages.video', compact('video', $video));
    }
    function postAddVideo(Request $req){
        $video = new Video;
        $video->status = isset($req->status)&& $req->status=="on"?1:0;
        $video->link = $req->link;
        $video->save();
        return redirect()->back()->with('success', 'Thêm video thành công!');
    }
    function getDeleteVideo($id){
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()->back()->with('success','Xóa dữ liệu thành công!');
    }
}
