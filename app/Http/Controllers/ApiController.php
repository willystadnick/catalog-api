<?php namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class ApiController extends Controller {

	/**
	 * Display a listing of categorias.
	 *
	 * @return Response
	 */
	public function categorias()
	{
        $categories = Category::all();

        foreach ($categories as &$category) {
        	$products = array();

        	foreach ($category->products->all() as $product) {
        		$products[] = $product->id;
        	}

        	$category->produtos = $products;

        	unset($category->products);
        	unset($category->created_at);
        	unset($category->updated_at);
        }

        return response()->json($categories);
	}

	/**
	 * Display a listing of produtos.
	 *
	 * @return Response
	 */
	public function produtos()
	{
        $products = Product::all();

        foreach ($products as &$product) {
        	unset($product->category_id);
        	unset($product->created_at);
        	unset($product->updated_at);
        }

        return response()->json($products);
	}

	/**
	 * Display the specified produto.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function produto($id)
	{
        $product = Product::find($id);

    	unset($product->category_id);
    	unset($product->created_at);
    	unset($product->updated_at);

        return response()->json($product);
	}

}
