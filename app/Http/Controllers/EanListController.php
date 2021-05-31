<?php

namespace App\Http\Controllers;

use App\Models\EanList;
use Illuminate\Http\Request;

class EanListController extends Controller
{
    public function index(){
        $ean_list = EanList::paginate(50);
        return view('skroutz.getSkroutzUrlByEan',[
            'ean_list' => $ean_list
        ]);
    }

    public function insertEanListToDb(Request $request ){
        $this->validate($request, [
            'ean' => 'required'
        ]);

        $ean_string = trim($request->ean);
        $ean_array = explode("\n",$ean_string);

        for ($i = 0; $i < count($ean_array); $i++){
            EanList::create([
                'ean' => trim($ean_array[$i])
            ]);
        }
        return back();
    }

    public function delete(EanList $ean){
//        dd($ean);
        $ean->delete();
        return back();
    }
}
