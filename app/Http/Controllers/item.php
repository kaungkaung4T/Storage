<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class item extends Controller
{
    //
    function item_main () {
        return view("item");
    }

    function create_item () {
        return redirect("item");
    }
}
