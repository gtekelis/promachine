<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsToImportDataFromSkroutz extends Controller
{
    public function index(){
        $response = Http::get('http://139.162.185.28:5002/api/v1/inputProductsShow')->json();

        $collection = collect($response);

        return view('skroutz.productsToImportDataFromSkroutz',[
            'product_list' => $collection
        ]);
    }
}
