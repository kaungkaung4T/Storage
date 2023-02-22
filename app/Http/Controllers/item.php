<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_model;

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
