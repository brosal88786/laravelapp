<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fruit;
class fruitController extends Controller
{
    public function index(Request $req)
    {
	    $items = Fruit::all();
	    return view('fruit.index', ['items' => $items]);
    }
}
