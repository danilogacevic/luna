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

$time=Carbon::now()->format('d-M-Y');


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

        
        $categories = Categorie::with('posts')->get();
        $data=[];

        foreach ($categories as $category) {
            # code...

            if ($category->cat_title === 'ture') {
                # code...

                $data[$category->cat_title]=$category->posts()->paginate(5);
              

            } else {

                $data[$category->cat_title]=$category->posts;
            }

            // $category->cat_title === 'ture' ? $data[$category->cat_title]=$category->posts()->paginate(1):$data[$category->cat_title]=$category->posts;
        }

        $photos = Photo::all();
        global $time;
        return view('index',compact('photos','time','data'));

        // foreach ($aranzmani as $aranzman) {
        //     # code...

        //     echo $aranzman->title;
        // }

        // return $data['ture'];


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
