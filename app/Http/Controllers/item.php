<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_model;

class item extends Controller
{
    //
    function item_main () {
        $items = item_model::all();
        return view("item", 
                ["all_items"=> $items]);
    }

    function create_item (Request $request) {
        $item = item_model::create($request->post());

        return redirect("/item");
    }


    function view_update($id) {
        $item = item_model::find($id);
        return view("update_item", [
            "item"=> $item
        ]);
    }


    function update($id, Request $request) {
        $item = item_model::find($id);
        $a = $item->update($request->post());
        // $item->name = $request->name;
        // $item->price = $request->price;
        // $item->save();
        
        return redirect("/item");
    }


    function delete_item ($i) {
        $item = item_model::find($i);
        $item->delete();
        return redirect("/item");
    }
}
