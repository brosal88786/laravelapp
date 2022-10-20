<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gijiroku;
use Illuminate\Support\Facades\Auth;

class GijirokuController extends Controller
{
    //
    public function index(Request $req)
    {
    	//$items = Gijiroku::where('userid','=', Auth::id());
		$items = Gijiroku::where('userid','=', Auth::id())->get();
    	return view('gijiroku.index', ['items' => $items]);
    }

    public function add(Request $req)
    {
    	return view('gijiroku.add');
    }

    public function create(Request $req)
    {
    	$giji = new Gijiroku;
    	$param = [
    		'userid' => Auth::id(),
    		'naiyo' => $req->naiyo,
    		'sakuseiymd' => $req->sakuseiymd,
    	];
    	$giji->fill($param)->save();
    	return redirect('/giji');
    }
}
