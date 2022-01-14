<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Review;
use App\User;
use App\Favourites;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Tukang Kita";
        $a = Post::orderBy('title','desc')->take(6)->get();
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('posts',$a);
    }

    public function category(){
        $data = array(
            'title' => 'Category',
            'category' => ['Elektronik','Otomotif', 'Landing']
        );
        $a = Post::all();

        
        return view('pages.category')->with('posts',$a);
    }
    
    public function detail($id){
        // $data = array(
        //     'title' => 'Detail Page',
        //     'about' => ['Elektronik','Otomotif', 'Landing'],
        //     'id' => $id,
        //     'item' => $item
        // );
        $review = Review::select('user_id','message','rating')->where('post_id', $id)->get();
        $data = Post::find($id);

        return view('pages.detail')->with('data', $data)->with('review',$review);
    }

    public function favorite($id){
        $a = Favourites::find($id);
        // return view('pages.index',compact('title'));
        // return view('pages.index')->with('posts',$a);
        return view('pages.favorite')->with('posts',$a);
    }

    public function profile(){
        return view('pages.profile');
    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        if($request->pass == ""){

        }else{
            if(bcrypt($request->input('pass')) == $user->password){
                $user->password = $request->input('newpass');
            }else{
                return redirect('/profile')->with('error','Password tidak sesuai!');
            }
        }
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->location = $request->input('location');
        $user->locationdetail = $request->input('detaillocation');
        
        $user->save();
        //how to delete file after update to reserve memory, LOOK DESTROY METHOD
        return redirect('/profile')->with('success','Data Updated!!');
    }

}   
