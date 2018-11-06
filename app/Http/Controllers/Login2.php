<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Login2 extends Controller
{
    //
    function check(Request $request)
    {
    	//$name = $request->user_name;
    	//$request->session()->flash('login_mess', $name);
    	if($request->user_name=='')
    	{
    		$request->session()->flash('login_mess', 'Nedostaje korisnicko ime');
    		return redirect('/');
    	}
    	if($request->user_pass=='')
    	{
    		$request->session()->flash('login_mess', 'Nedostaje lozinka');
    		return redirect('/');
    	}
    	if($request->user_name!='' && $request->user_pass!='')
    	{
    		$users = DB::table('users')->where('name',$request->user_name)->where('password',$request->user_pass)->get();
    		if(count($users)==1)
    		{
    			$request->session()->put('user', $request->user_name);
    			return redirect('/home');
    		}
    		else
    		{
    			$request->session()->flash('login_mess', 'Ne vazeci korisniki podaci');
    			return redirect('/');
    		}
    	}
    	
    	return redirect('/');
    }
    function logout(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/');
    }
}
