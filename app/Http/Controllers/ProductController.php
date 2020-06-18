<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $product = DB::table('products')
                        ->join('category','products.category_id','category.id')
                        ->join('brands','products.brand_id','brands.id')
                        ->select('products.*','category.categtory_name','brands.brand_name')
                        ->get();
                        // return response()->json($product);
                    return view('admin.product.index',compact('product'));
    }
}
