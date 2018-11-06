<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    //
    function index(Request $request)
    {
    	if($request->session()->exists('user'))
    	{
    		return view('search',['links'=>[['url'=>'home','name'=>'Pregled'],['url'=>'graph','name'=>'Grafik'],['url'=>'logout','name'=>'Odjava']],'user'=>$request->session()->get('user')]);
    	}
    	else
    	{
    		$request->session()->flush();
    		return redirect('/');
    	}
    }
    function browse(Request $request)
    {
    	$this->check_is_ajax($request);
    	//check column $request->type for like $request->val
    	$results = DB::table('podaci')
    	->select($request->type)
    	->where($request->type, $request->val)
    	->orWhere($request->type, 'like', '%' . $request->val . '%')
    	->distinct()
    	->get();

    	return response()->json(['type'=>$request->type, 'res'=>$results]);
    }
    function filter(Request $request)
    {
    	$this->check_is_ajax($request);
    	$results = DB::table('podaci')

	    ->when($request->grad, function($query) use ($request){
	        return $query->where('grad', $request->grad);
	    })
	   	->when($request->ulica, function($query) use ($request){
	        return $query->where('ulica', $request->ulica);
	    })
	    ->when($request->prezime, function($query) use ($request){
	        return $query->where('prezime', $request->prezime);
	    })
        ->when($request->ime, function($query) use ($request){
            return $query->where('ime', $request->ime);
        })
        ->when($request->tel_broj, function($query) use ($request){
            return $query->where('telefonski_broj', $request->tel_broj);
        })
	    ->orderBy('grad')->orderBy('prezime')->orderBy('ime')->get();
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
