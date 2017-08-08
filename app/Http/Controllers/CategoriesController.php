<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categorie;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Categorie::all();

        return view('backEnd.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Categorie::create($request->all());

        Session::flash('message', 'Categorie added!');
        Session::flash('status', 'success');

        return redirect('admin/categories');
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
        $category = Categorie::findOrFail($id);

        return view('backEnd.categories.show', compact('category'));
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
        $category = Categorie::findOrFail($id);

        return view('backEnd.categories.edit', compact('category'));
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
        
        $category = Categorie::findOrFail($id);
        $category->update($request->all());

        Session::flash('message', 'Categorie updated!');
        Session::flash('status', 'success');

        return redirect('categories');
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
        $category = Categorie::findOrFail($id);

        $category->delete();

        Session::flash('message', 'Categorie deleted!');
        Session::flash('status', 'success');

        return redirect('admin/categories');
    }

}
