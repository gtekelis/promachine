<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EanListController extends Controller
{
    public function index(){
        return view('skroutz.getSkroutzUrlByEan');
    }
}
