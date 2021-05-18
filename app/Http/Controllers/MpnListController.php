<?php

namespace App\Http\Controllers;

use App\Models\MpnList;
use Illuminate\Http\Request;

class MpnListController extends Controller
{
    public function index(){
        return view('skroutz.getSkroutzUrlByMpn');
    }

    public function insertMpnListToDb(Request $request ){
        $this->validate($request, [
            'mpn' => 'required'
        ]);
//
//        lap09dlaksdjf09098
//mcbn90780sdglksdjf
//jkslkhf88sd8f8s8kfk
//ptiy99vsn35fksdf9a

        $mpnString = trim($request->mpn);
        $mpn_array = explode(" ",$mpnString);

        var_dump($mpn_array);

//        for ($i = 0; $i < 5; $i++){
//            MpnList::create([
//                'mpn' => $request->mpn
//            ]);
//        }

        // return back();
    }
}
