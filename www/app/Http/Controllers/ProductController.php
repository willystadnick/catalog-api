<?php namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Input;
use Session;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $products = Product::all();

        return view('products.index')
        	->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::lists('titulo', 'id');

		return view('products.create')
        	->with('categories', $categories);
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
            'preco' => 'regex:/^\d*(\.\d{2})?$/',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('products/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $product = new Product;
            $product->titulo = Input::get('titulo');
            $product->preco = Input::get('preco');
            $product->thumbnail = Input::get('thumbnail');
            $product->category_id = Input::get('category');
            $product->save();

            Session::flash('message', 'Successfully created product!');

            return Redirect::to('products');
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
        $product = Product::find($id);

        return view('products.show')
            ->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $product = Product::find($id);
        $categories = Category::lists('titulo', 'id');

        return view('products.edit')
            ->with('product', $product)
        	->with('categories', $categories);
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
            'preco' => 'regex:/^\d*(\.\d{2})?$/',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('products/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $product = Product::find($id);

        	if ($product) {
	            $product->titulo = Input::get('titulo');
                $product->preco = Input::get('preco');
	            $product->thumbnail = Input::get('thumbnail');
	            $product->category_id = Input::get('category');
	            $product->save();

	            Session::flash('message', 'Successfully updated product!');
	        } else {
	            Session::flash('message', 'Failed to update product!');
	        }

            return Redirect::to('products');
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
        $product = Product::find($id);

        if ($product) {
        	$product->delete();

	        Session::flash('message', 'Successfully deleted product!');
        } else {
	        Session::flash('message', 'Failed to delete product!');
        }

        return Redirect::to('products');
	}

}
