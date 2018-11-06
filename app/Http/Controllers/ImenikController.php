<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImenikController extends Controller
{
    //
    function index($name)
    {
    	$results = DB::table('podaci')->where('grad', $name)->orderBy('prezime')->orderBy('ime')->get();
    	//return response()->json(count($results));
    	if(count($results)>0)
    	{
	    	return response()->json($results,200);
	    }
	    else
	    {
	    	return response()->json(null, 204);
	    }
    }
}
