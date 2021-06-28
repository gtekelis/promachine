<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsToImportDataFromSkroutz extends Controller
{
    public function index(){
        $nodejs_api = env('NODEJS_API', false);
        $response = Http::get($nodejs_api . '/inputProductsShow')->json();

        $collection = collect($response);

        return view('skroutz.productsToImportDataFromSkroutz',[
            'product_list' => $collection
        ]);
    }
}
