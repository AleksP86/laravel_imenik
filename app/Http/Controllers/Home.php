<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    //
    function index(Request $request)
    {
    	if($request->session()->exists('user'))
    	{
    		return view('home',['links'=>[['url'=>'search','name'=>'Pretraga'],['url'=>'graph','name'=>'Grafik'],['url'=>'logout','name'=>'Odjava']],'user'=>$request->session()->get('user')]);
    	}
    	else
    	{
    		$request->session()->flush();
    		return redirect('/');
    	}
    	
    }
    function insert_entry(Request $request)
    {
    	$ime=$request->ime;
    	//return response()->json(['ime'=>$ime]);
    	
    	$id=DB::table('podaci')->insertGetId(['ime' => $request->ime, 'prezime' => $request->prezime, 'telefonski_broj' => $request->tel_broj, 'grad' => $request->grad, 'ulica' => $request->ulica, 'broj' => $request->broj, 'created_at'=>DB::raw('now()')]);
    	if($id>0)
    	{
    		//inserted sucessfully
    		return response()->json(['success'=>'Data is successfully added','id'=>$id]);
    	}
    	else
    	{
    		//insert failed
    		return response()->json(['fail'=>'Insert failed']);
    	}
    }
    function all_entries()
    {
    	$entries=DB::table('podaci')->orderBy('grad')->orderBy('prezime')->orderBy('ime')->get();
    	return response()->json(['entries'=>$entries]);

    }
}
