<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Input;
use Session;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();

        return view('categories.index')
        	->with('categories', $categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'titulo' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('categories/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $category = new Category;
            $category->titulo = Input::get('titulo');
            $category->save();

            Session::flash('message', 'Successfully created category!');

            return Redirect::to('categories');
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $category = Category::find($id);

        return view('categories.show')
            ->with('category', $category);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $category = Category::find($id);

        return view('categories.edit')
            ->with('category', $category);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $rules = array(
            'titulo' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('categories/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $category = Category::find($id);

        	if ($category) {
	            $category->titulo = Input::get('titulo');
	            $category->save();

	            Session::flash('message', 'Successfully updated category!');
	        } else {
	            Session::flash('message', 'Failed to update category!');
	        }

            return Redirect::to('categories');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $category = Category::find($id);

        if ($category) {
        	$category->delete();

	        Session::flash('message', 'Successfully deleted category!');
        } else {
	        Session::flash('message', 'Failed to delete category!');
        }

        return Redirect::to('categories');
	}

}
