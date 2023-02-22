<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_model;

class item extends Controller
{
    //
    function item_main () {
        $all_items = item_model::all();

        return view("item", [
            "all_items"=> $all_items,
        ]);
    }

    function create_item (Request $request) {

        item_model::create($request->post());


        return redirect("item");
    }


    function delete_item ($i) {
        $a = item_model::find($i);
        $a->delete();
        return redirect("item");
    }
}
