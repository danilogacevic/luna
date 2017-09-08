<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\ContactForm;
use App\Post;
use App\Photo;
use App\Categorie;

// vrijeme cu da koristim svudje, pa da bih samo jednom pozivao Carbon

$time=Carbon::now();


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {

        // $categories = Categorie::where('cat_title','=','ekskluzivno')->orWhere('cat_title','=','rent a car')->get();
        

        $posts = Post::all();
        $photos = Photo::doesntHave('post')->get();
        global $time;
        return view('index',compact('posts','photos','time'));

        // foreach ($categories as $category) {
        //     # code...

        //     echo $category->posts;
        // }


    }

    public function single_post() {

        return view('blog-post');
    }

    public function single_tour($id) {

        $post = Post::findOrFail($id);
        global $time;
        return view('single-tour',compact('post','time'));
    }

    public function sendEmail(Request $request){


        Mail::to('danilogacevic.pg@gmail.com')->send(new ContactForm($request->all()));

        return redirect()->back();

        
    }
}
