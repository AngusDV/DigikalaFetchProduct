<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\ProductFetchRequest;
use Illuminate\Support\Facades\Http;
use function array_to_object;
use function view;

class IndexController extends Controller
{
    public function index()
    {
        $product=Http::get('https://api.digikala.com/v1/product/90825/')->json();
        $product=array_to_object($product);
        return view('index',compact('product' )  );
    }

    public function productFetch(ProductFetchRequest $request)
    {
        $slug=explode("-",$request->slug)[1];
        $product=Http::get('https://api.digikala.com/v1/product/'.$slug.'/')->json();
        $product=array_to_object($product);
        return view('index',compact('product' )  );
    }
}
