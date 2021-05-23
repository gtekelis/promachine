<?php

namespace App\Http\Controllers;

use App\Models\MpnList;
use Illuminate\Http\Request;

class MpnListController extends Controller
{
    public function index(){
        $mpn_list = MpnList::paginate(50);
        return view('skroutz.getSkroutzUrlByMpn',[
            'mpn_list' => $mpn_list
        ]);
    }

    public function insertMpnListToDb(Request $request ){
        $this->validate($request, [
            'mpn' => 'required'
        ]);

        $mpn_string = trim($request->mpn);
        $mpn_array = explode("\n",$mpn_string);

        for ($i = 0; $i < count($mpn_array); $i++){
            MpnList::create([
                'mpn' => $mpn_array[$i]
            ]);
        }

         return back();
    }

    public function delete(MpnList $mpn){
//        dd($mpn);
        $mpn->delete();
        return back();
    }
}
