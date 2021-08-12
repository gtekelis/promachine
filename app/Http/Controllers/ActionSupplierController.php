<?php

namespace App\Http\Controllers;

use App\Models\ActionMpnList;
use Illuminate\Http\Request;

class ActionSupplierController extends Controller
{
    public function index(){
       $mpn_list = ActionMpnList::paginate(50);
        return view('actionSupplier.getActionMpnList',[
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
            ActionMpnList::create([
                'mpn' => trim($mpn_array[$i])
            ]);
        }

        return back();
    }

    public function delete(ActionMpnList $mpn){
//        dd($mpn);
        $mpn->delete();
        return back();
    }
}
