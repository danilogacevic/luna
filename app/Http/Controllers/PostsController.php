<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Validator;

use App\Categorie;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();

        return view('backEnd.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Categorie::pluck('cat_title','id')->all();
        return view('backEnd.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
                'title'      => 'required',
                // 'body'       => 'required',
                'short_desc' => 'required',
                'photo_id'   => 'required',
                'categorie_id' => 'required',
                // 'address'    => 'required',
                'status' => 'required'

                        ]);

          $input = $request->all();

          if(isset($input['price']) && isset($input['decreased_price'])) {

            $input['saving'] = (($input['price'] - $input['decreased_price'])/$input['price'])*100;
          }

          

              if($file = $request->file('photo_id')){

                $name = time() . $file->getClientOriginalName();

                $file->move('media',$name);

                $photo = Photo::create(['file'=>$name]);

                $input['photo_id'] = $photo->id;
            }

        Post::create($input);

        Session::flash('message', 'Post added!');
        Session::flash('status', 'success');

        return redirect('admin/posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('backEnd.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
       

        

        $post = Post::findOrFail($id);

        $categories = Categorie::pluck('cat_title','id')->all();

        return view('backEnd.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();

        if(isset($input['price']) && isset($input['decreased_price'])) {

            $input['saving'] = (($input['price'] - $input['decreased_price'])/$input['price'])*100;
          }



        if($file = $request->file('photo_id')){


            $name = time() . $file->getClientOriginalName();


            $file->move('media', $name);

            $photo = Photo::create(['file'=>$name]);


            $input['photo_id'] = $photo->id;


        }

        Post::findOrFail($id)->update($input);
      

        Session::flash('message', 'Post updated!');
        Session::flash('status', 'success');

        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('message', 'Post deleted!');
        Session::flash('status', 'success');

        return redirect('admin/posts');
    }

}
