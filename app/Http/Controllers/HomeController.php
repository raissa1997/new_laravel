<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Controllers\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;


class  HomeController extends Controller
{
    // public function header(){
    //     return view('home.header');
    // }

    //Home page View
    public function homepage(){
        return view('home.homepage');
    }
    //
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){      
                
                $posts=Post::All()->sortByDesc('created_at');

                return view('user.my_post',compact('posts'));
            }
            else if($usertype=='admin'){
                $posts=Post::All()->sortByDesc('created_at');
                return view('admin.adminhome',compact('posts'));
            }
            else{
                return redirect()->back(); 
            }
        } 
    } 
    
    //Stockage des data dans la base de donnees
    public function user_post(Request $request){
        $request->validate([
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $user=Auth()->user();
        $user_id=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $post=new Post;
        $post->user_id=$user_id; 
        $post->name=$name;
        $post->usertype=$usertype;
        $post->description=$request->description;
        $image=$request->file('image');

        if($image){
            $destinationPath='images/';
            $profileImage=date('ymdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $post->image=$profileImage;
        }

        // $imagePath='storage/'.$request->file('image')->store('postImage','public');


        //Keeping image in public folder
        // $image=$request->image;
        // $imagename=time().''.$image->getClientOriginalExtension();
        // $request->image->move('postImage',$imagename);

        //Storing image in Database
        // $post->image=$imagename;
         

        // $post->post_status='active';
        $post->save();
        return redirect()->route('my_post')->with('status', 'Post added');

    }
    public function liste_posts(){
        $posts = Post::all();
        $count = Post::count();
        return view('admin.adminhome')->with(['posts' => $posts, 'count' => $count]);

      //return view ('admin.adminhome',compact('posts'));  
    }
   
    public function store(Request $request){

         //Keeping image in public folder
        //  $image=$request->image;
        //  $imagename=time().''.$image->getClientOriginalExtension();
        //  $request->image->move('postImage',$imagename);
 
         //Storing image in Database

        //  $image='storage/'.$request->file('image')->store('postimage','public');
        //  $post=new Post();
        //  $post->image=$image;
        //  $post->save();
        // return redirect()->route('my_post')->with('status', 'Post added');        
    }

    public function my_post(){
        $user=Auth::user();
        $user_id=$user->id;
        // $posts=Post::where('user_id','=',$user_id)->get();

        $posts=Post::All()->sortByDesc('created_at');
        return view('user.my_post',compact('posts'));
    }

    // public function accept_post($id){
    //     $post=Post::find($id);
    //     $post->post_status= 'accepted';
    //     $post->save();
    //     return redirect(route('admin.adminhome'))->with('status', 'Le post a bien été accepté avec succes.');
    // }

    public function reject_post($id){
        $post=Post::find($id);
        $post->post_status= 'rejected';
        $post->save();
        return redirect(route('admin.adminhome'))->with('status', 'Le post a bien été bloqué avec succes.');
    }

}
