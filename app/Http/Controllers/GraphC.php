<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraphC extends Controller
{
    //
    function index(Request $request)
    {
    	if($request->session()->exists('user'))
    	{
    		return view('graph',['links'=>[['url'=>'home','name'=>'Pregled'],['url'=>'graph','name'=>'Grafik'],['url'=>'logout','name'=>'Odjava']],'user'=>$request->session()->get('user')]);
    	}
    	else
    	{
    		$request->session()->flush();
    		return redirect('/');
    	}
    }
    function graph_data(Request $request)
    {
    	$this->check_is_ajax($request);
    	$results = DB::table('podaci')->select('grad as label', DB::raw('count(*) as y'))
    	->groupBy('grad')
	    ->orderBy('grad')->get();
    	return response()->json(['entries'=>$results]);
    }
    function check_is_ajax(Request $request)
    {
    	if($request->ajax())
    	{
    		return;
    	}
    	else
    	{
    		$this->index($request);
    	}
    }
}
